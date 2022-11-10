<?php
$mod = $_GET['mod'];
session_start();

switch ($mod) {
    case 'main':
    {
        header("Location: /Modules/main/index.php");
        break;
    }
    case 'form':
    {
        header("Location: /Modules/form/form.php");
        break;
    }
    case 'auth':
    {
        $auth = $_GET['auth'];
        $_SESSION['auth'] = $auth;
        header("Location: /Modules/auth/auth.php");
        break;
    }
    case 'core':
    {
        header("Location: /Modules/Gvecore/index.php");
        break;
    }
}
