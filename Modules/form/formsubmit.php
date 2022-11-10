<?php
/**
 * @param string $item
 * @return bool
 */
function checkIsEmpty(string $item): bool
{
    return $item == '';
}

/**
 * @param array $errors
 * @return string
 */
function showErrors(array $errors): string
{
    $result = '';

    foreach ($errors as $error) {
        $result .= "<div class='alert alert-danger'>$error</div>";
    }

    return $result;
}

function separateByCapitalLetters(string $string): string
{
    return preg_replace('/(?<!\ )[A-Z]/', ' $0', ucfirst($string));
}

/**
 * @return void
 */
function renderData(): void
{
    foreach ($_POST as $key => $value) {
        if (checkIsEmpty($value)) {
            $errors[] = separateByCapitalLetters($key)." is required";
        }
    }
    $file_extension = pathinfo($_FILES["photo"]["name"], PATHINFO_EXTENSION);

    if($file_extension != 'jpg' && $file_extension != 'bmp'){
        $errors[] = "Invalid image format";
    }

    try {
        if (isset($errors)) {
            throw new Exception(showErrors($errors));
        }
    } catch (Exception $e) {
        echo $e->getMessage();
        die();
    }

    $photoPath = "uploads/" . $_FILES["photo"]["name"];
    move_uploaded_file($_FILES["photo"]["tmp_name"], $photoPath);

    foreach ($_POST as $key => $value){
        echo "<p class='text-left'>"
            .separateByCapitalLetters($key)
            .":"
            .separateByCapitalLetters($value)
            ."</p>";
    }
    echo "<img src='{$photoPath}' width='100px' height='100px'>";
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Result</title>
</head>
<body>
    <?renderData()?>
</body>
</html>
