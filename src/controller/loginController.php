<?php


if (isset($_SESSION['username'])) {
    header('location: /liste-jeux');
}
use App\model\Login;

$isemptyUsername = empty($_POST['username']);
$isemptyPassword = empty($_POST['password']);
$issetVar = isset($_POST['username']) && isset($_POST['password']);
$issetVar = isset($_POST['username']) && isset($_POST['password']);
$filterUsername = isset($_POST['username']) ? filter_var($_POST['username'], FILTER_SANITIZE_STRING) : null;
$filterPassword = isset($_POST['password']) ? filter_var($_POST['password'], FILTER_SANITIZE_STRING) : null;


if ($issetVar && !$isemptyUsername && $filterPassword && $filterUsername && isset($_POST['h-captcha-response']) && !empty($_POST['h-captcha-response'])) {

    $login = new Login($_POST['password'], $_POST['username']);
    if ($login->login()) {
        $_SESSION['idUser'] = $login->id();
        $_SESSION['username'] = $login->username($_SESSION['idUser']);
        $_SESSION['password'] = $login->password($_SESSION['idUser']);
        $_SESSION['email'] = $login->email($_SESSION['idUser']);
        header('location: /liste-jeux');
    }
}
if(isset($_POST['h-captcha-response']) && !empty($_POST['h-captcha-response']))
{
    $secret = '0x8ECAB07b4074f4869FDd0f9F503908eE984E8671';
    $verifyResponse = file_get_contents('https://hcaptcha.com/siteverify?secret='.$secret.'&response='.$_POST['h-captcha-response'].'&remoteip='.$_SERVER['REMOTE_ADDR']);
    $responseData = json_decode($verifyResponse);
}
if (!isset($_SESSION['idUser'])) {
    require __DIR__ . '/../view/login.php';
}

?>


