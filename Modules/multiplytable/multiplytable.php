<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="/css/styles.css" rel="stylesheet" type="text/css">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Lab2</title>
</head>
<body>
<div class="table">
    <?
    for ($i = 1; $i <= 10; $i++ ){
        echo "<div class='col'>";
        for ($j = 1; $j <= 10; $j++ ){
            echo "<div class='row'>$j * $i = ".$j*$i."</div>";
        }
        echo "</div>";
    }
    ?>
</div>
</body>
</html>