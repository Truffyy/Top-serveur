<?php

if (!isset($_SESSION['idUser'])) {
    header('Location: /login');
}



use App\model\UpdatePass;

$configs = include('config.php');
global $db;
$data = $db->prepare('SELECT * FROM accounts WHERE id = ?');
$data->execute([$_SESSION['idUser']]);
$datas = $data->fetch();



if ( !empty($code)) {
    $code = isset($_POST['code']) ? preg_replace('/[^a-zA-Z0-9]+/', '', $_POST['code']) : '';
    if (empty($code)) {
        $noCode = 'Vous devez saisir un code';
    } else {
        $dedipass = file_get_contents("http://api.dedipass.com/v1/pay/?public_key={$configs->public}&private_key={$configs->private}&code=" . $code);
        $dedipass = json_decode($dedipass);
        if ($dedipass->status == 'success') {
            // Le transaction est validée et payée.
            // Vous pouvez utiliser la variable $virtual_currency
            // pour créditer le nombre de euros.
            $virtual_currency = $dedipass->virtual_currency;
            $codeOk = 'Le code est valide et vous êtes crédité de ' . $virtual_currency . 'Jetons.';
            $SQL = $db->prepare("SELECT credit FROM accounts WHERE id = ?");
            $SQL->execute([$_SESSION['idUser']]);
            $credit = $SQL->fetch();
            $SQL = $db->prepare("UPDATE accounts SET credit = ? WHERE id=?");
            $SQL->execute([$credit + $virtual_currency, $_SESSION['idUser']]);
        } else {
            // Le code est invalide
            $codeNoOk = 'Le code ' . $code . ' est invalide';
        }
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

require __DIR__ . '/../view/solde.php';

?>


