<?php $random = rand(0, 20);

?>

<body>
<section class="hero is-medium is-link mb-6"
         style="background-size: cover; background-repeat: no-repeat ;background-image: url('../../public/assets/img/<?php echo $random ?>.jpg');">
         <div class="hero-body">
        <p data-text='Inscription' class="title titleLogo has-text-centered">
           Inscription
        </p>
    </div>
</section>
<div class="top container has-text-centered">
    <h1 class="title">Register</h1>
    <form method="post">
        <div class="field">
            <label class="label">Username</label>
            <div class="control has-icons-left has-icons-right">
                <input name="username" class="input is-primary is-outlined" type="text" placeholder="User input" value="<?php echo $filterUsername;?>">
                <span class="icon is-small is-left">
                    <i class="fas fa-user"></i>
                </span>
                <span class="icon is-small is-right">
                    <i class="fas fa-exclamation-triangle"></i>
                </span>
            </div>
            <p class="help is-danger"><?php if ($user != null && $user->UsernameExist()) {
                                        echo '<p class="help is-danger ">Ce Login Existe</p>';} ?>
            <p class="help is-danger "> <?php if($filterUsername == null && isset($_POST['username'])) {echo "login non valide";}?> </p>
        </div>

        <div class="field">
            <label class="label">Password</label>
            <div class="control">
                <input required name="password" class="input" type="password" placeholder="ton mot de passe">
            </div>
            <p class="help is-danger "> <?php if($filterPassword == null && isset($_POST['password']) ) {echo "mot de passe non valide";}?> </p>
        </div>
        <div class="field">
            <label class="label">retype Password</label>
            <div class="control">
                <input required name="re-password" class="input" type="password" placeholder="ton mot de passe">
            </div>
            <p class="help is-danger "> <?php if($filterRePassword == null && isset($_POST['re-password']) ) {echo "mot de passe non valide";}?> </p>
            <p class="help is-danger "> <?php if($filterPassword != $filterRePassword ) {echo "les mots de passes ne sont pas identique";}?> </p>
        </div>
        <div class="field">
            <label class="label">Email</label>
            <div class="control has-icons-left has-icons-right">
                <input required name="email" class="input" type="email" placeholder="Email input" value="<?php echo $filterEmail; ?>">
                <span class="icon is-small is-left">
                    <i class="fas fa-envelope"></i>
                </span>
                <span class="icon is-small is-right">
                    <i class="fas fa-exclamation-triangle"></i>
                </span>
            </div>

            <p class="help is-danger"><?php if (isset($_POST['email']) && $user != null && $user->emailExist()) {
                    echo '<p class="help is-danger ">Cette adresse mail Existe</p>';} ?>
            <p class="help is-danger "> <?php if($filterEmail == null && isset($_POST['email']) ) {echo "mail non valide";}?> </p>

        </div>

        <div class="field">
            <label class="label">rang</label>
            <div class="control">
                <div class="select">
                    <select name="rang">
                        <option>Choisis ton rang</option>
                        <option>joueur</option>
                        <option>créateur</option>

                    </select>
                </div>
            </div>
        </div>

        <div class="field">
            <div class="control">
                <label class="checkbox">
                    <input required name="checkbox" type="checkbox">
                    I agree to the <a href="#">terms and conditions</a>
                </label>
            </div>
            <p class="help is-danger "> <?php if(isset($rank)) {echo $rank;}?> </p>
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
                <button class="button is-link" id='loading'>S'inscrire</button>
            </div>

        </div>
    </form>
</div>
</body>

<?php require('footer.php'); ?>

</html>