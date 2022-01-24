<?php


use App\model\ListeJeux;

$jeu = new ListeJeux();

$dataMinecraft = $jeu->getNumbersMine();
$dataDiscord = $jeu->getNumbersDisc();
$dataTerraria = $jeu->getNumbersTerraria();
$dataDofus = $jeu->getNumbersDofus();
$dataGarry = $jeu->getNumbersGarry();
$DataGTA = $jeu->getNumbersGTA();
$dataWorldOfWarcraft = $jeu->getNumbersWoW();
$dataArk = $jeu->getNumbersArk();
$dataRust = $jeu->getNumbersRust();
$dataCs = $jeu->getNumbersCS();
$dataHabbo = $jeu->getNumbersHabbo();
$dataArmA = $jeu->getNumbersArmA();
$dataConan = $jeu->getNumbersConan();
$dataForum = $jeu->getNumbersForum();
$dataOgame = $jeu->getNumbersOgame();

//if(isset($_POST['h-captcha-response']) && !empty($_POST['h-captcha-response']))
//{
//    $secret = '0x8ECAB07b4074f4869FDd0f9F503908eE984E8671';
//    $verifyResponse = file_get_contents('https://hcaptcha.com/siteverify?secret='.$secret.'&response='.$_POST['h-captcha-response'].'&remoteip='.$_SERVER['REMOTE_ADDR']);
//    $responseData = json_decode($verifyResponse);
//}
//if (!isset($_SESSION['idUser'])) {
//    require __DIR__ . '/../view/login.php';
//}

require  __DIR__ . '/../view/liste-jeux.php';
?>


