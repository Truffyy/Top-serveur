<body>
<header>
    <?php $random = rand(0, 20); ?>


    <section class="hero is-medium is-link mb-6" style="background-size: cover; background-repeat: no-repeat ;background-image: url('../../public/assets/img/<?php echo $random ?>.jpg');">
        <div class="hero-body">
            <p data-text='Gestion de compte' class="title titleLogo has-text-centered">
                Gestion de compte
            </p>
        </div>
    </section>
</header>


<main class="columns  menuServ">
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
                    <image id="profileImage"
                           src="../../public/assets/img/profil/<?php echo $datas['img'] ?>"></image>
                </div>
                <p style="color: white" class='changerPhoto '>Changer votre photo de profil (clic sur l'image)</p>
            </div>

            <!-- Le nom de l'élément input détermine le nom dans le tableau $_FILES -->
            <input id="imageUpload" accept=".jpg, .jpeg, .png" name="userfile" placeholder="Photo" type="file"/>
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
            } ?>
            <div class="control is-flex is-justify-content-space-around">
                <div class="card-content">
                    <div class="h-captcha" data-size="compact"
                         data-sitekey="faab60e6-9bd4-417b-843b-84fae9892ce3"></div>

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
            <div class="is-flex is-justify-content-space-around"
                 style='overflow:hidden !important;word-break: break-word !important;'>
                <button class="button is-info is-outlined radio" value="img-profil" type="submit" name="sub-profil">

                        <span class="icon is-small">
                            <i style="color: white !important;" class="fas fa-check"></i>
                        </span>
                    <span id="shows" class='is-centered'
                          style="color: white !important;">Valider les modifications</span>
                </button>
            </div>
        </div>
    </form>
</div>
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


    $("#profileImage").click(function (e) {
        $("#imageUpload").click();
    });

    function fasterPreview(uploader) {
        if (uploader.files && uploader.files[0]) {
            $('#profileImage').attr('src',
                window.URL.createObjectURL(uploader.files[0]));
        }
    }

    $("#imageUpload").change(function () {
        fasterPreview(this);
    });
</script>
</main>


<?php require('footer.php'); ?>

</body>