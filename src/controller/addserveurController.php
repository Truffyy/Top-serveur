<?php

if (!isset($_SESSION['idUser'])) {
    header('Location: /login');
}


$configs = include('config.php');
global $db;
$data = $db->prepare('SELECT * FROM accounts WHERE id = ?');
$data->execute([$_SESSION['idUser']]);
$datas = $data->fetch();







$SQL = $db->prepare("SELECT * FROM serveurs WHERE idUser = ?");
$SQL->execute([$_SESSION['idUser']]);
$myServ = $SQL->fetchall();
if ($myServ == null) {
    $errorServ = "Vous n'avez pas encore publier de serveur.";
}


//if(isset($_POST['h-captcha-response']) && !empty($_POST['h-captcha-response']))
//{
//    $secret = '0x8ECAB07b4074f4869FDd0f9F503908eE984E8671';
//    $verifyResponse = file_get_contents('https://hcaptcha.com/siteverify?secret='.$secret.'&response='.$_POST['h-captcha-response'].'&remoteip='.$_SERVER['REMOTE_ADDR']);
//    $responseData = json_decode($verifyResponse);
//}
//if (!isset($_SESSION['idUser'])) {
//    require __DIR__ . '/../view/login.php';
//}

require __DIR__ . '/../view/addserveur.php';

?>


