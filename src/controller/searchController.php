<?php

use App\model\Search;

$isemptySearch = empty($_POST['search']);
$isemptySubmit = empty($_POST['submit']);
$issetVar = isset($_POST['search']) && isset($_POST['submit']);
$filterSearch = isset($_POST['search']) ? filter_var($_POST['search'], FILTER_SANITIZE_STRING) : null;



if (isset($_POST['search']) /*$issetVar && !$isemptySearch && $isemptySubmit && $filterSearch && isset($_POST['h-captcha-response']) && !empty($_POST['h-captcha-response'])*/) {

    $search = new Search($_POST['search']);

    if ($search->getServ()) {
        $datas = $search->getServ();

    } else{
        $aucun = " aucun serveur trouvé";
    }
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

require  __DIR__ . '/../view/search.php';
?>


