<body>
<header>
    <section class="hero is-medium is-link mb-6 "
             style=" background-size: cover ; background-repeat: no-repeat ;background-image: url('../../public/assets/img/mineserv.jpg');">
        <div class="hero-body">
            <p data-text='Modifier le serveur' class="title titleLogo has-text-centered">
                Modifier le serveur

            </p>
        </div>
    </section>

</header>

<main class="menuServ columns ">

    <aside  id="volet" class="menu column is-2">

        <div class="logoMenu ">
            <div class="contenth2 is-flex is-justify-content-space-around">
                <h2>Top serveur privé</h2>
                <h2>Top serveur privé</h2>
            </div>

        </div>
        <h3 class="menu-label ">
            Liste des jeux
        </h3>

        <ul class="jaj menu-list">
            <li><a class='menu ' href='/liste-serveur/game
/minecraft/'>Minecraft</a></li>
            <li><a class='menu ' href='/liste-serveur/game
/discord/'>Discord</a></li>
            <li><a class='menu' href='/liste-serveur/game
/terraria/'>Terraria</a></li>
            <li><a class='menu ' href='/liste-serveur/game
/dofus/'>Dofus</a></li>
            <li><a class='menu ' href='/liste-serveur/game
/gsm/'>Garry's Mod</a></li>
            <li><a class='menu ' href='/liste-serveur/game
/gta/'>Grand Theft Auto</a></li>
            <li><a class='menu' href='/liste-serveur/game
/wow/'>World Of Warcraft</a></li>
            <li><a class='menu' href='/liste-serveur/game
/ark/'>Ark</a></li>
            <li><a class='menu' href='/liste-serveur/game
/rust/'>Rust</a></li>
            <li><a class='menu' href='/liste-serveur/game
/cs/'>Counter Strike</a></li>
            <li><a class='menu' href='/liste-serveur/game
/habbo/'>Habbo</a></li>
            <li><a class='menu' href='/liste-serveur/game
/arma3/'>Arma 3</a></li>
            <li><a class='menu' href='/liste-serveur/game
/conan/'>Conan Exiles</a></li>
            <li><a class='menu' href='/liste-serveur/game
/forum/'>Forums RP</a></li>
            <li><a class='menu' href='/liste-serveur/game/ogame/'>Ogame</a></li>


        </ul>

    </aside>
    <button id="open" class="ouvrir" onclick="ouvre()">menu</button>

    <div id="cardOpn" class="container is-fluid column pt-0 pb-0">
        <div class="column has-text-centered p-0">

            <div class="card bg-add is-flex is-flex-direction-column ">
                <div class="card-header-title is-white is-centered card-header">
                    <h4 class="title-add">Modifier le serveur:</h4>
                </div>
                <form method="post" class="servCreate has-text-centered" enctype="multipart/form-data">
                    <div class="card-content p-3 has-text-centered">
                        <div id="profile-containerBis">
                            <image id="profileImage"
                                   src="../../public/assets/img/serv/<?php echo $serveur['img'] ?>"></image>
                            <p style="color: white" class='changerPhoto '>Changer votre photo de Serveur (clic sur l'image)</p>

                        </div>
                        <input type="file" name="fileToUpload" id="fileToUpload" accept=".jpg, .jpeg, .png">
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

                        ?>
                    </div>
                    <div class="card-content">
                        <label for="name">Nom du serveur :</label>
                        <input value="<?php echo $serveur['name'] ?>" type="text" name="name" id="name" required>
                    </div>
                    <div class="card-content">
                        <label for="site"> Site internet (optionnel) </label>
                        <input value="<?php echo $serveur['url'] ?>" type="text" name="site" id="site">
                    </div>
                    <div class="card-content">
                        <label for="discord">Url Discord (optionnel) </label>
                        <input value="<?php echo $serveur['discord'] ?>" type="text" name="discord" id="discord">
                    </div>
                    <div class="card-content">
                        <label for="ip">Adresse IP (optionnel) </label>
                        <input value="<?php echo $serveur['ip'] ?>" type="text" name="ip" id="ip">
                    </div>
                    <div class="card-content">
                        <label for="port">Port (optionnel) </label>
                        <input value="<?php echo $serveur['port'] ?>" type="text" name="port" id="port">
                    </div>
                    <div class="container is-fluid">

                        <textarea  name="desc" id="image-tools"><?php echo $serveur['descri'] ?></textarea>

                    </div>

                   
                    <?php if ($_POST['jeu']) {if ($_POST['jeu'] == "") {
                        echo "<p style='color: white'>Veuillez choisir un jeu</p>";
                    }} ?>
                    <!-- bon -->
                    <div id="select2" class="card-content is-flex is-flex-direction-column">
                        <?php require ("tagModSer.php");?>
                    </div>

                    <div class="field pt-6">
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
                        <div class="card-content">
                            <?php if ($isemptyName || $isemptyDesc || $isemptyTag) {
                            echo "<p class='m-6' style='color: white'>Le nom, la description et les tags sont obligatoires</p>";
                        }?>
                            <button  class="button is-info is-outlined" value="submit" type="submit" name="modifier">

                                    <span class="icon is-small">
                                        <i style="color: white !important;" class="fas fa-check"></i>
                                    </span>
                                <span style="color: white !important;">Enregistrer</span>
                            </button>
                        </div>
                    </div>
                </form>

            </div>


        </div>
    </div>

</main>
<?php require('footer.php'); ?>
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
</script>
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
        $("#fileToUpload").click();
    });

    function fasterPreview(uploader) {
        if (uploader.files && uploader.files[0]) {
            $('#profileImage').attr('src',
                window.URL.createObjectURL(uploader.files[0]));
        }
    }

    $("#fileToUpload").change(function () {
        fasterPreview(this);
    });
</script>
</body>


</html>