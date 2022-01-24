<?php

use App\model\Details;
use App\model\Vote;


$seveur = new Details();
$vote = new Vote();
$date = new DateTime();
$date = $date->format('Y-m-d H:i:s');
$user = $_SESSION['username'] ?? 'Anonymous';

if ($seveur->getServByName($token)[0] != null) {
    $datas = $seveur->getServByName($token);

} else {
    $aucun = " aucun serveur trouvé";
}

$voteActu = $datas[0]['vote'];
$votePts = 1;
$issetSub = isset($_POST['sub-vote']) ? $_POST['sub-vote'] : null;


if ($issetSub && isset($_POST['h-captcha-response']) && !empty($_POST['h-captcha-response'])) {
    $date = new DateTime();
    $date = $date->format('Y-m-d H:i:s');
    $dataClic = $vote->GetVoteIp($token, $_SERVER['REMOTE_ADDR']);
    $dateDb = new DateTime($dataClic[0]['date']);
    $dateDb->modify('+1 hour, +30 minute');
    $dateDb = $dateDb->format('Y-m-d H:i:s');
    if ($dataClic == []) {
        $vote->SetVote($_SERVER['REMOTE_ADDR'], $token, $date, $user);
        $vote->SetServeurVote($voteActu + $votePts, $token);

        header("Location: /details-serveur/serveur/$token");
    }

    if ($dateDb < $date) {
        $vote->SetServeurVote($voteActu + $votePts, $token);
        $vote->UptVote($_SERVER['REMOTE_ADDR'], $token, $date, $user, $_SERVER['REMOTE_ADDR'], $token );
        header("Location: /details-serveur/serveur/$token");
    } else {
        $datediffDb = new DateTime($dateDb);
        $dateDiffActual = new DateTime($date);

        $diff = $datediffDb->diff($dateDiffActual);
        $erreurVote = 'Vous avez déjà votez sur ce serveur il vous reste ' . $diff->h . ' heures ' . $diff->i . ' minutes';

    }


} else {
    $error = "erreur";

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

require __DIR__ . '/../view/votes.php';

?>


