<?php
session_start();
if ($_POST['login']!='' && $_POST['password']!='' )
{
    $_SESSION['user'] = $_POST['login'];
    header("Location: /Modules/main/index.php");
    exit();
}
else echo "<div class='alert alert-danger'>Login and password required</div>";