<?php


if (isset($_SESSION['idUser'])) {
    header('Location: /liste-jeux');
}

use App\model\User;
use PHPMailer\PHPMailer\PHPMailer;


$configs = include(__DIR__ . '/../../public/config.php');
$cle = rand(1000000, 9000000);
$isemptyUsername = empty($_POST['username']);
$isemptyEmail = empty($_POST['email']);
$isemptyPassword = empty($_POST['password']);
$isemptyPassword = empty($_POST['re-password']);
$isemptyCheckbox = empty($_POST['checkbox']);
$issetEmail = isset($_POST['email']);
$issetRang = isset($_POST['rang']);
$issetVar = isset($_POST['username']) && isset($_POST['rang']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['re-password']) && isset($_POST['checkbox']) && $issetRang;
$filterUsername = isset($_POST['username']) ? filter_var($_POST['username'], FILTER_SANITIZE_STRING) : null;
$filterEmail = isset($_POST['email']) ? filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) : null;
$filterPassword = isset($_POST['password']) ? filter_var($_POST['password'], FILTER_SANITIZE_STRING) : null;
$filterRePassword = isset($_POST['re-password']) ? filter_var($_POST['re-password'], FILTER_SANITIZE_STRING) : null;


if ($issetVar && !$isemptyUsername && $filterEmail && $filterPassword && $filterRePassword && $filterUsername && $filterPassword == $filterRePassword) {
    $user = new User(trim($filterUsername), trim($filterEmail), password_hash($filterPassword, PASSWORD_BCRYPT));

} else $user = null;

if ($issetVar && isset($_POST['checkbox']) == true && $_POST['rang'] != "Choisis ton rang" && isset($_POST['h-captcha-response']) && !empty($_POST['h-captcha-response'])) {


    if ($user != null && !$user->emailExist() && !$user->UsernameExist()) {
        $user->createUser($cle);
        $mail = new PHPMailer();
        $_SESSION['mailer'] = $mail;


        $body = "<a href='http://localhost/confirm/cle/$cle/id/{$_SESSION['id']}'>Click to confirm</a>";

        $mail->isSMTP();
        $mail->SMTPDebug = 0;
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'tls';
        $mail->Host = 'smtp.mail.yahoo.com';
        $mail->Port = 587;
        $mail->Username = $configs->mailUser;
        $mail->Password = $configs->mailPass;

        $mail->setFrom($configs->mailUser, 'top-serveur-prive');

        $mail->AddReplyTo($configs->mailUser, "top-serveur-prive");

        $mail->Subject = "confirm your Account top-serveur-prive";

        $mail->AltBody = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test

        $mail->MsgHTML($body);

        $address = $filterEmail;
        $mail->AddAddress($address);
        header('Location: /login');
        if (!$mail->Send()) {
            echo "Mailer Error: " . $mail->ErrorInfo;
        }

    }
} else {
    $rank = "Veuillez cocher la case et choisir un rang";


}
require __DIR__ . '/../view/register.php';