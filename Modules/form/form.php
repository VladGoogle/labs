<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<form action="formsubmit.php" method="post" enctype="multipart/form-data" class="mb-3">
    <div class="mb-3">
        <label class="form-label"> Name
            <input name="name" type="text" class="form-control">
        </label>
    </div>
    <div class="mb-3">
        <label for="surname" class="form-label"> Surname
            <input name="surname" type="text" class="form-control">
        </label>
    </div>
    <div class="mb-3">
        <label class="form-label"> Father's name
            <input name="fathersName" type="text" class="form-control">
        </label>
    </div>
    <div class="mb-3">
        <label class="form-label"> Birth Day
            <input name="birthday" type="date" class="form-control">
        </label>
    </div>
    <div class="mb-3">
        <label class="form-label"> Sex
            <select class="form-select" name="sex">
                <option value="Man">Man</option>
                <option value="Woman">Woman</option>
            </select>
        </label>
    </div>
    <div class="form-floating">
        <textarea class="form-control" placeholder="Tell more about yourself" id="floatingTextarea2" style="height: 200px" name="description"></textarea>
        <label for="floatingTextarea2">About me</label>
    </div>
    <div class="mb-3">
        <label for="formFile" class="form-label">Photo</label>
        <input class="form-control" type="file" id="formFile" name="photo" accept="image/jpeg, image/png">
    </div>
    <div class="btn-group mb-3" role="group" aria-label="Call me">
        <input type="radio" class="btn-check" name="CallMe" value="BySkype" id="btnradio1" autocomplete="off" checked>
        <label class="btn btn-outline-primary" for="btnradio1">By Skype</label>

        <input type="radio" class="btn-check" name="CallMe" value="ByPhone" id="btnradio2" autocomplete="off">
        <label class="btn btn-outline-primary" for="btnradio2">By phone</label>

        <input type="radio" class="btn-check" name="CallMe" value="ByEmail" id="btnradio3" autocomplete="off">
        <label class="btn btn-outline-primary" for="btnradio3">By Email</label>
    </div>

    <div class="form-check form-switch mb-3">
        <input class="form-check-input" type="checkbox" id="notice" name="notice">
        <label class="form-check-label" for="notice">Notice me about updates</label>
    </div>
    <div class="col-12">
        <button class="btn btn-primary" type="submit">Submit</button>
    </div>
</form>
</body>
</html>
