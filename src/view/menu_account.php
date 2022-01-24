<!-- profil -->
<?php

use App\model\ListServeur;

$_SESSION['menu'] = $name;
if ($_SESSION['menu'] == 'profil') {
?>


    <aside id="volet" class="menu column is-2">
        <div class="logoMenu">
            <div class="contenth2 ">
                <h2>Top serveur privé</h2>
                <h2>Top serveur privé</h2>

            </div>

        </div>

        <h3 class="menu-label ">
            gestion de compte
        </h3>
        <hr>
        <ul class="jaj menu-list">

            <li><a href="profil" class='menu '>Mon profil</a></li>
            <li><a href="addserveur" class='menu '>Mes serveur</a></li>
            <li><a href="/ajouter-serveur" class='menu '> +Ajouter votre serveur</a></li>
            <hr>
            <li><a href="/account/menu/solde" class='menu '> Solde :</a></li>
            <div class="dropdown">
                <button class="dropbtn">Publicité</button>
                <div class="dropdown-content">
                    <a href="/annonce">Anonce</a>
                    <a href="/golden">Premium</a>

                </div>
            </div>


        </ul>

    </aside>
    <button id="open" class="ouvrir mt-3" onclick="ouvre()">menu</button>

    <div class="container is-fluid column pt-0" id="cardOpn">

        <form method="post" class="account-menu" enctype="multipart/form-data">
            <h2 class="h2mn">Modifier vos informations</h2>
            <div class="card-content is-columns is-multiline">
                <div class="container column is-12" id='profile-imageFlex'>
                    <div id="profile-container">
                        <image id="profileImage" src="../../public/assets/img/profil/<?php echo $datas['img']?>"></image>
                    </div>
                    <p style="color: white" class='changerPhoto '>Changer votre photo de profil (clic sur l'image)</p>
                </div>

                <!-- Le nom de l'élément input détermine le nom dans le tableau $_FILES -->
                <input id="imageUpload" accept=".jpg, .jpeg, .png" name="userfile" placeholder="Photo" type="file" />
                <?php if (isset($error1)) {
                    echo "<p style='color: white'>" . $error1 . "</p>";
                }
                if (isset($error2)) {
                    echo "<p style='color: white'>" . $error2 . "</p>";
                }
                if (isset($error3)) {
                    echo "<p style='color: white'>" . $error3 . "</p>";
                }
                if (isset($error4)) {
                    echo "<p style='color: white'>" . $error4 . "</p>";
                }
                if (isset($error5)) {
                    echo "<p style='color: white'>" . $error5 . "</p>";
                }
                if (isset($error6)) {
                    echo "<p style='color: white'>" . $error6 . "</p>";
                }
                if (isset($error7)) {
                    echo "<p style='color: white'>" . $error7 . "</p>";
                }
                if (isset($error8)) {
                    echo "<p style='color: white'>" . $error8 . "</p>";
                }
                if (isset($bravo)) {
                    echo "<p style='color: white'>" . $bravo . "</p>";
                }

                ?>
                <hr>
                <div class="card-content">
                    <label class="menulabel" for=" site"> Changer de mot de passe </label>
                    <input type="text" class='input' name="password" id="password">
                </div>

                <div class="card-content">
                    <label class="menulabel" for=" discord">Confirmer votre mot de passe</label>

                    <input type="text" name="re-password" class='input' id="password">

                </div>
                <?php if (isset($errorPass)) {
                    echo "<p style='color: white'>" . $errorPass . "</p>";
                }?>
                <div class="control is-flex is-justify-content-space-around">
                    <div class="card-content">
                        <div class="h-captcha" data-size="compact" data-sitekey="faab60e6-9bd4-417b-843b-84fae9892ce3"></div>

                        <?php if (isset($_POST['g-recaptcha-response'])) {
                            if ($_POST['g-recaptcha-response'] === '') {
                                echo '<p class="help is-danger">Veuillez cocher la case de captcha</p>';
                            }
                        }
                        if ($responseData) {
                            if ($responseData->success) {
                                echo 'Your request have submitted successfully.';
                            } else {
                                echo 'Robot verification failed, please try again.';
                            }
                        } ?>
                    </div>
                </div>
                <div class="is-flex is-justify-content-space-around" style='overflow:hidden !important;word-break: break-word !important;'>
                    <button class="button is-info is-outlined radio" value="img-profil" type="submit" name="sub-profil">

                        <span class="icon is-small">
                            <i style="color: white !important;" class="fas fa-check"></i>
                        </span>
                        <span id="shows" class='is-centered' style="color: white !important;">Valider les modifications</span>
                    </button>
                </div>
            </div>
        </form>
    </div>


<?php }


if ($_SESSION['menu'] == 'addserveur') { ?>


    <aside id="volet" class="menu column is-2">
        <div class="logoMenu">
            <div class="contenth2 ">
                <h2>Top serveur privé</h2>
                <h2>Top serveur privé</h2>
            </div>

        </div>

        <h3 class="menu-label ">
            gestion de compte
        </h3>
        <hr>
        <ul class="jaj menu-list">

            <li><a href="profil" class='menu '>Mon profil</a></li>
            <li><a href="addserveur" class='menu '>Mes serveur</a></li>
            <li><a href="/ajouter-serveur" class='menu '> +Ajouter votre serveur</a></li>
            <hr>
            <li><a href="/account/menu/solde" class='menu '> Solde :</a></li>
            <div class="dropdown">
                <button class="dropbtn">Publicité</button>
                <div class="dropdown-content">
                    <a href="/annonce">Anonce</a>
                    <a href="/golden">Premium</a>

                </div>
            </div>

        </ul>

    </aside>

    <button id="open" class="ouvrir mt-3" onclick="ouvre()">menu</button>

    <div class="container is-fluid column pt-0" id="cardOpn">
        <!-- <div id='btnServAdd'> -->
            <div class="mnServ account-menu">
                <p class="h2mn">Vos serveurs publiés</p>
                <div id="btnServ" style='overflow:hidden !important;word-break: break-word !important;'>
                    <button class="buttonServ  is-centered mt-6"><a class="h2mn" href="/ajouter-serveur">+ Ajouter un serveur </a></button>
               
                <br>
                <p class="pServ mt-6 mb-3">Vous n'avez pas encore publier de serveur.</p>
            <!-- </div> -->
         </div>



            <hr>


            <div class="container mr-3  is-fluid">
                <?php



                $data = new ListServeur("Minecraft");
                $datas = $data->getServ();

                foreach ($datas as $data) {
                    echo "<div class='cardServ'>
            <div class='box columns is-multiline'>";
                    echo "<div class=' column is-12'>
                    <p style='font-size: 24px !important;'>
                        {$data['name']}
                    </p>
                </div>";
                    echo "<div class='column is-3'>
                    <figure class='image'>
                        <img src='/../../public/assets/img/serv/{$data['img']}' alt='Image'>
                    </figure>
                </div>";

                    echo "<div style='overflow:hidden  !important;word-break: break-word !important; height: 240px !important; width: 70% !important;' class=' column is-5'>
                    <p>
                        {$data['descri']}
                    </p>
                </div>";

                    echo "<div class='column is-7'>
                    <p>Votes : {$data['vote']}</p>
                    <p>clics : {$data['clics']}</p>
                    <p>commentaires : {$data['com']}</p>

                    <p><a href='/votes/{$data['token']}'>Intégration</a></p>
                    <form style='overflow:hidden !important;word-break: break-word !important;' name='form' method='post' action='/details-serveur/serveur/{$data['token']}'>
                        <p><button class='button is-info is-outlined radio mt-4' name='increment' value='yes' type='submit'></a></p>
                        <span class='icon is-small'>
                                        <i style='color: black !important;' class='fas fa-check'></i>
                                    </span>
                                        <span id='shows' style='color: black !important;'>Modifier mon serveur</span>
                                    </button>
                    </form>
                    
                </div>";

                    if ($data['stars']) {
                        $moyenne = round($data['stars'] / $data['com']);
                    } else {
                        $moyenne = 0;
                    }
                    if ($moyenne > 0) {
                        for ($i = 0; $i < $moyenne; $i++) echo "<span class='fa fa-star checked'></span>";
                        $reste = 5 - $moyenne;
                        for ($i = 0; $i < $reste; $i++) echo "<span class='fa fa-star'></span>";
                    } else {
                        for ($i = 0; $i < 5; $i++) echo "<span class='fa fa-star'></span>";
                    }

                    $tagExplo = explode(",", $data['tag']);

                    foreach ($tagExplo as $tag) {
                        echo "<div class='is-flex is-justify-content-flex-start mr-1'>
                    <span style='background-color: #45769c;color: white !important;' class='tag '>{$tag}</span>
                    </div>";
                    }
                    echo "
            </div>
        </div> <hr>";
                }
                ?>
            </div> 
            
            <!-- fin des card serveur -->
            <?php if ($aucun) {
                echo "<div class='columns'><div class='card column is-12 has-text-centered'>
                    <p>" . $aucun . "</p>

                </div></div> ";
            }
            ?>
        </div>
    </div>


<?php }
if ($_SESSION['menu'] == 'solde') { ?>


    <div class="menuresp columns ">
        <aside id="volet" class="menu column is-2">
            <div class="logoMenu">
                <div class="contenth2 ">
                    <h2>Top serveur privé</h2>
                    <h2>Top serveur privé</h2>
                </div>

            </div>

            <h3 class="menu-label ">
                gestion de compte
            </h3>
            <hr>
            <ul class="jaj menu-list">

                <li><a href="profil" class='menu '>Mon profil</a></li>
                <li><a href="addserveur" class='menu '>Mes serveur</a></li>
                <li><a href="/ajouter-serveur" class='menu '> +Ajouter votre serveur</a></li>
                <hr>
                <li><a href="/account/menu/solde" class='menu '> Solde :</a></li>
                <div class="dropdown">
                    <button class="dropbtn">Publicité</button>
                    <div class="dropdown-content">
                        <a href="/annonce">Anonce</a>
                        <a href="/golden">Premium</a>

                    </div>
                </div>


            </ul>

        </aside>
        <button id="open" class="ouvrir mt-3" onclick="ouvre()">menu</button>
        <div class="container is-fluid column pt-0" id="cardOpn">
            <div class="mnServ account-menu ">
                <p class="h2mn">Comment fonctionne les crédits</p>
                <br>
                <p class="pServ">Votre solde vous permet d'acheter de la publicité pour vos serveurs de jeux. Votre
                    compte est crédité instantanément du montant qui est indiqué sur le module de paiement. Vos données
                    sont chiffrées avant d'être transmises et nous n'enregistons aucune donnée personnelle de paiement.
                </p>
                <br>

                <hr>

                <div class="card">
                    <p class="h2mnBis card-title ">Créditez votre solde</p>

                    <?php
                    $code = isset($_POST['code']) ? preg_replace('/[^a-zA-Z0-9]+/', '', $_POST['code']) : '';
                    if (empty($code)) {
                        echo 'Vous devez saisir un code';
                    } else {
                        $dedipass = file_get_contents('http://api.dedipass.com/v1/pay/?public_key=a355a11751e50aac6e60d6e115c6bbdc&private_key=242114f24bfa10a982d1d4ed42225209bf15ff72&code=' . $code);
                        $dedipass = json_decode($dedipass);
                        if ($dedipass->status == 'success') {
                            // Le transaction est validée et payée.
                            // Vous pouvez utiliser la variable $virtual_currency
                            // pour créditer le nombre de euros.
                            $virtual_currency = $dedipass->virtual_currency;
                            echo 'Le code est valide et vous êtes crédité de ' . $virtual_currency . 'euros';
                        } else {
                            // Le code est invalide
                            echo 'Le code ' . $code . ' est invalide';
                        }
                    }
                    ?>
                    <div data-dedipass="a355a11751e50aac6e60d6e115c6bbdc" data-dedipass-custom=""></div>
                </div>
                <br>
                <h2 class="h2mn">Historiques des transactions</h2>
                <ul id="ulSolde">
                    <li class="liSolde">Référence</li>
                    <li class="liSolde">Montant</li>
                    <li class="liSolde">Prestaire</li>
                    <li class="liSolde">Date</li>
                    <hr>

                </ul>
                <p class="pServ">Vous avez aucune transaction pour le moments</p>
            </div>

        </div>

    </div>


<?php } // Premium


else {
    header('Location: /404');
}

?>
<script src="//api.dedipass.com/v1/pay.js"></script>
<script>
    function ouvre() {
        let x = document.getElementById('volet');
        let main = document.getElementById("cardOpn");
        if (x.style.display === 'none') {
            x.style.display = 'block';

        } else {
            x.style.display = 'none';

        }
        if (main.style.display === 'block') {
            main.style.display = 'none';

        } else {
            main.style.display = 'block';

        }
    }


    $("#profileImage").click(function(e) {
        $("#imageUpload").click();
    });

    function fasterPreview(uploader) {
        if (uploader.files && uploader.files[0]) {
            $('#profileImage').attr('src',
                window.URL.createObjectURL(uploader.files[0]));
        }
    }

    $("#imageUpload").change(function() {
        fasterPreview(this);
    });
</script>