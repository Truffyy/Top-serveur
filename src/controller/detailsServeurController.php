<?php

use App\model\Details;
use App\model\Note;

$note = new Note();

$seveur = new Details();


if ($seveur->getServByName($serveur)[0] != null) {
    $datas = $seveur->getServByName($serveur);
    $notes = $note->GetNote($datas[0]['token']);
    if ($_POST['increment'] == 'yes') {
        $date = new DateTime();
        $date = $date->format('Y-m-d H:i:s');
        $dataClic = $seveur->getClicIp($serveur, $_SERVER['REMOTE_ADDR']);

        if ($dataClic == []) {
            $seveur->setIpClic($_SERVER['REMOTE_ADDR'], $serveur, $date);
            $seveur->setServeurClic($datas[0]['clics'] + 1, $datas[0]['token']);
        } else {
            $dateDb = new DateTime($dataClic[0]['date']);
            $dateDb->modify('+1 hour, +30 minute');
            $dateDb = $dateDb->format('Y-m-d H:i:s');
            if ($dateDb < $date) {
                $seveur->uptIpClic($_SERVER['REMOTE_ADDR'], $serveur, $date, $_SERVER['REMOTE_ADDR'], $serveur);
                $clics = $datas[0]['clics'] + 1;
                $seveur->setServeurClic($datas[0]['clics'] + 1, $datas[0]['token']);
            } else {
                $erreur = ('Vous avez déjà cliqué sur ce serveur');

            }

        }
    }

    if ($_POST['sub-more'] == 'show') {

        $notes2 = $note->GetMore($datas[0]['token']);
    }

    if ($_POST['sub-min'] == 'min') {
        unset($_POST['sub-more']);
    }
    if ($datas[0]['stars']) {
        $moyenne = round($datas[0]['stars'] / $datas[0]['com']);
    } else {
        $moyenne = 0;
    }

} else {
    $aucun = " aucun serveur trouvé";
}

$issetNote = isset($_POST['note']) ? $_POST['note'] : null;
$issetCommentaire = isset($_POST['commentaire']) ? $_POST['commentaire'] : null;

$issetHcaptcha = isset($_POST['h-captcha-response']) && !empty($_POST['h-captcha-response']);

$user = $_SESSION['username']?? 'unknown';


if ($issetNote && $issetCommentaire && $issetHcaptcha) {
    $note->SetNote($_POST['note'], $user, $_POST['commentaire'], $serveur);
    $note->SetServeurNote($datas[0]['stars'] + $_POST['note'], $datas[0]['com'] + 1, $serveur);
    header('Location: /liste-jeux');
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

require __DIR__ . '/../view/details-serveur.php';
?>


