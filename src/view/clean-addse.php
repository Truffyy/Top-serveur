<body>

    <header>
        <section class="hero is-medium is-link mb-6" style="background-size: cover ; background-repeat: no-repeat ;background-image: url('../../public/assets/img/mineserv.jpg');">
            <div class="hero-body">
                <p data-text='Liste des serveurs' class="title titleLogo has-text-centered">
                    Liste des serveurs

                </p>
            </div>
        </section>

    </header>

    <main class="menuServ is-flex">
        <?php require('menu.php') ?>


        <div class="container is-fluid">
            <div class=" columns is-centered">
            <div class="card bg-add">
                <div class="card-header-title is-white is-centered card-header">
                    <h4 class="title-add">Ajouter un serveur :</h4>
                </div>
                <form method="post" class="servCreate" enctype="multipart/form-data">
                    <div class="card-content">
                        <input  type="file" name="fileToUpload" id="fileToUpload" accept=".jpg, .jpeg, .png" required>
                        <?php  if (isset($error1)) { echo "<p style='color: white'>" . $error1 . "</p>"; }
                        if (isset($error2)) { echo "<p style='color: white'>" . $error2 . "</p>"; }
                        if (isset($error3)) { echo "<p style='color: white'>" . $error3 . "</p>"; }
                        if (isset($error4)) { echo "<p style='color: white'>" . $error4 . "</p>"; }
                        if (isset($error5)) { echo "<p style='color: white'>" . $error5 . "</p>"; }
                        if (isset($error6)) { echo "<p style='color: white'>" . $error6 . "</p>"; }
                        if (isset($error7)) { echo "<p style='color: white'>" . $error7 . "</p>"; }
                        if (isset($error8)) { echo "<p style='color: white'>" . $error8 . "</p>"; }

                        ?>
                    </div>
                    <div class="card-content">
                        <label for="name">Nom du serveur :</label>
                        <input type="text" name="name" id="name" required>
                    </div>
                    <div class="card-content">
                        <label for="site"> Site internet (optionnel) </label>
                        <input type="text" name="site" id="site">
                    </div>
                    <div class="card-content">
                        <label for="discord">Url Discord (optionnel) </label>
                        <input type="text" name="discord" id="discord">
                    </div>
                    <div class="card-content">
                        <label for="ip">Adresse IP (optionnel) </label>
                        <input type="text" name="ip" id="ip">
                    </div>
                    <div class="card-content">
                        <label for="port">Port (optionnel) </label>
                        <input type="text" name="port" id="port">
                    </div>
                    <div class="container is-fluid">

                        <textarea name="desc" id="image-tools"></textarea>




                    </div>
                    <div class="card-content">
                        <div class="select">
                            <select name="jeu" required>
                                <option disabled>Selectionne ton jeu</option>
                                <option>Minecraft</option>
                                <option>Discord</option>
                                <option>Terraria</option>
                                <option>Dofus</option>
                                <option>Garry's Mod</option>
                                <option>Grand Theft Auto</option>
                                <option>World of Warcraft</option>
                                <option>Ark</option>
                                <option>Rust</option>
                                <option>Counter Strike</option>
                                <option>Habbo</option>
                                <option>Arma 3</option>
                                <option>Conan Exiles</option>
                                <option>Forums RP</option>
                                <option>Ogame</option>


                            </select>
                        </div>
                    </div>
                    <!-- bon -->


                    <div class="field">
                        <div class="control">
                            <div class="h-captcha" data-sitekey="faab60e6-9bd4-417b-843b-84fae9892ce3">

                            </div>
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
                        <?php if (isset($_SESSION['upload']) && isset($_POST['submit'])) {
                        if ($_SESSION['upload'] == 'no'){


                        }
                        }?>
                        <div class="card-content">
                            <button class="button is-success" value="submit" type="submit" name="submit">

                                <span class="icon is-small">
                                    <i class="fas fa-check"></i>
                                </span>
                                <span>Enregistrer</span>
                            </button>
                        </div>
                    </div>
                </form>

            </div>




            </div>
        </div>

    </main>
    <?php require('footer.php'); ?>
</body>


</html>