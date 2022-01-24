<?php $random = rand(0, 20);




?>

<body xmlns="http://www.w3.org/1999/html">

    <main>
        <section class="hero is-medium is-link mb-6" style="background-size: cover; background-repeat: no-repeat ;background-image: url('../../public/assets/img/<?php echo $random ?>.jpg');">
            <div class="hero-body">
                <p data-text='Se connecter' class="title titleLogo has-text-centered">
                    Se connecter
                </p>
            </div>
        </section>
        <div class="top container is-fluid has-text-centered">
            <h1 class="title pb-5">Login</h1>
            <?php if (isset($_SESSION['confirm'])) {
                if ($_SESSION['confirm'] === 'ok') {
                    echo '<div id="myModal" class="modal is-active">
                   <div class="modal-background"></div>
                   <div class="modal-content">
                    <p style="color: white">merci d\'avoir confirmé votre compte</p>
                   </div>
                   <button id="myModalClose" class="modal-close is-large" aria-label="close"></button>
                   </div>';
                    session_unset();
                    session_destroy();
                }
            }
            if (isset($login)) {
                if (!$login->login()) {
                    echo '<div id="myModalLogin" class="modal is-active">
                   <div class="modal-background"></div>
                   <div class="modal-content">
                    <p style="color: white">Mauvaise infos ou vous n\'avez pas confirmé votre compte via le lien envoyé sur votre mail</p>
                   </div>
                   <button id="myModalCloseLogin" class="modal-close is-large" aria-label="close"></button>
                   </div>';
                }
            } ?>
            <div class="container">
                <form method="post">
                    <div class="field">
                        <label class="label">Login</label>
                        <div class="control has-icons-left has-icons-right">

                            <input required name="username" class="input " type="text" placeholder="Username" value="<?php if (isset($_POST['username'])) {
                                                                                                                            echo $_POST['username'];
                                                                                                                        } ?>">
                            <span class="icon is-small is-left">

                                <i class="fas fa-user"></i>
                            </span>
                            <span class="icon is-small is-right">
                                <i class="fas fa-exclamation-triangle"></i>
                            </span>
                        </div>

                    </div>

                    <div class="field">
                        <label class="label">Password</label>
                        <div class="control">

                            <input required name="password" class="input" type="password" placeholder="ton mot de passe">

                        </div>
                    </div>


                    <div class="field">

                        <div class="control">
                            <div class="h-captcha" data-sitekey="faab60e6-9bd4-417b-843b-84fae9892ce3"></div>
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


                    <div class="field">
                        <div class="control pb-2">
                            <button class="button is-link" id='loading'>Se connecter</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>

        </div>
    </main>
    <?php require('footer.php'); ?>
</body>