<?php


use App\model\ListServeur;

$seveur = new ListServeur($name);

    if ($seveur->getServ() && $type == null ) {
        $datas = $seveur->getServ();

    }
    else if ($seveur->getServByTag($type) && $type != null ) {
    $datas = $seveur->getServByTag($type);
} else{
        $aucun = " aucun serveur trouvé";
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

require  __DIR__ . '/../view/liste-serveur.php';
?>


