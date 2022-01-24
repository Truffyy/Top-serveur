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


$filterPassword = isset($_POST['password']) ? filter_var($_POST['password'], FILTER_SANITIZE_STRING) : null;
$filterRePassword = isset($_POST['re-password']) ? filter_var($_POST['re-password'], FILTER_SANITIZE_STRING) : null;


if ( isset($_POST['password']) && isset($_POST['re-password']) && !empty($_POST['password']) && !empty($_POST['re-password']) && isset($_POST['h-captcha-response']) && !empty($_POST['h-captcha-response'])) {
    if ($filterPassword == $filterRePassword && isset($_POST['password']) && isset($_POST['re-password']) && !empty($_POST['password']) && !empty($_POST['re-password'])) {
        $user = new UpdatePass(password_hash($filterPassword, PASSWORD_BCRYPT));
        $user->UpdateUser();
        header('Location: /logout');
    } else {
        $errorPass = "Les mots de passe ne sont pas identiques";
    }
}

    if (isset($_FILES["userfile"]["name"])) {
        $target_dir = __DIR__ . '/../../public/assets/img/profil/';
        $target_file = $target_dir . basename($_FILES["userfile"]["name"]);


        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));


// Check if image file is a actual image or fake image
        if ($_POST["sub-profil"] == "img-profil" && $_FILES["userfile"]["name"] != '') {

            if (file_exists($target_file)) {
                $_SESSION['upload'] = 'no';
                $error1 = "Le fichier existe déjà";
            }
            if (!file_exists($target_file)) {
                $_SESSION['upload'] = 'yes';
            }


            $check = getimagesize($_FILES["userfile"]["tmp_name"]);
            if ($check !== false) {
                $error2 = "Le fichier est une image. - " . $check["mime"] . ".";
            } else {
                $error3 = "Le fichier n'est pas une image.";

            }


// Check file size
            if ($_FILES["userfile"]["size"] > 70000) {
                $_SESSION['upload'] = 'no';
                $error4 = "L'image est trop grande.";

            }

// Allow certain file formats
            if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                && $imageFileType != "gif") {
                $_SESSION['upload'] = 'no';
                $error5 = "Mauvais fichier, seulement les fichiers JPG, JPEG, PNG & GIF sont accepté.";

            }

// Check if $uploadOk is set to 0 by an error
            if (isset($_SESSION['upload'])) {
                if ($_SESSION['upload'] == 'no') {
                    $error6 = "Le fichier n'a pas été uploadé.";
// if everything is ok, try to upload file
                }
            }

            if (isset($_SESSION['upload'])) {
                if ($_SESSION['upload'] == 'yes' && isset($_POST['h-captcha-response']) && !empty($_POST['h-captcha-response'])) {
                    move_uploaded_file($_FILES["userfile"]["tmp_name"], $target_file);
                    $bravo = "Le fichier a été uploadé.";
                    $SQL = $db->prepare("UPDATE accounts SET img=? WHERE id=?");
                    $SQL->execute([$_FILES["userfile"]["name"], $_SESSION['idUser']]);
                    unset($_SESSION['upload']);
                    header('Location: /account/menu/profil');

                } else {
                    $error8 = "Les champs sont obligatoires";

                }
            }
        }
    }






require __DIR__ . '/../view/profil.php';

?>


