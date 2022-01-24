<?php
require_once('../vendor/autoload.php');
require_once("router.php");
session_start();
require __DIR__. '/../src/view/header.php';



use App\model\Connect;
$configs = include('config.php');
$connection = new Connect($configs->host, $configs->database, $configs->username, $configs->pass);
$db = $connection->getPdo();

// ##################################################
// ##################################################
// ##################################################

// Static GET
// In the URL -> http://localhost
// The output -> Index


get('/search', "/../src/controller/searchController.php");
post('/search', "/../src/controller/searchController.php");

post('/votes/$token', "/../src/controller/voteController.php");
get('/votes/$token', "/../src/controller/voteController.php");


post('/ajouter-serveur', "/../src/controller/ajoutServeurController.php");
get('/ajouter-serveur', "/../src/controller/ajoutServeurController.php");

post('/modifier-serveur/$token', "/../src/controller/modifierServeurController.php");
get('/modifier-serveur/$token', "/../src/controller/modifierServeurController.php");


post('/annonce', "/../src/view/annonce.php");
get('/annonce', "/../src/view/annonce.php");

post('/golden', "/../src/view/golden.php");
get('/golden', "/../src/view/golden.php");


get('/pub', "/../src/view/pub.php");

post('/details-serveur/serveur/$serveur', "/../src/controller/detailsServeurController.php");
get('/details-serveur/serveur/$serveur', "/../src/controller/detailsServeurController.php");

get('/liste-jeux', "/../src/controller/listeJeuController.php");

get('/liste-serveur/game/$name', "/../src/controller/listeServeurController.php");
get('/liste-serveur/game/$name/$type', "/../src/controller/listeServeurController.php");

get('/account/menu/profil', "/../src/controller/profilController.php");
post('/account/menu/profil', "/../src/controller/profilController.php");

get('/account/menu/solde', "/../src/controller/soldeController.php");
post('/account/menu/solde', "/../src/controller/soldeController.php");

get('/account/menu/addserveur', "/../src/controller/addserveurController.php");
post('/account/menu/addserveur', "/../src/controller/addserveurController.php");

get('/', "/../src/view/login.php");

get('/logout', "/../src/controller/logoutController.php");

get('/login', "/../src/controller/loginController.php");
post('/login', "/../src/controller/loginController.php");

get('/confirm/cle/$cle/id/$id', "/../src/controller/confirmController.php");

get('/register', "/../src/controller/registerController.php");
post('/register', "/../src/controller/registerController.php");

get('/more-infos', "/../src/view/moreInformation.php");
post('/more-infos', "/../src/view/moreInformation.php");

get('/404', "/../src/view/404.php");



















// ##################################################
// ##################################################
// ##################################################
// any can be used for GETs or POSTs

// For GET or POST
// The 404.php which is inside the views folder will be called
// The 404.php has access to $_GET and $_POST any('/404','../../src/View/404.php');
any('404', "/../src/view/404.php");
