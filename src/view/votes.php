
<?php $random = rand(0, 20);

if ($seveur->getServByName($token)[0] != null) {


foreach ($datas

as $data) {

?>

<body>
<section class="hero is-medium is-link mb-6"
         style="background-size: cover; background-repeat: no-repeat ;background-image: url('../../public/assets/img/<?php echo $random ?>.jpg');">
    <div class="hero-body">
        <p data-text='Votes' class="title titleLogo has-text-centered">
            Votes
        </p>
    </div>
</section>
<main class="container">
    <section id="formvote">

        <div class="card voteCard">
            <header class="card-header">
                <p style="color: #fff !important;" class="card-header-title has-text-right">
                    <?php echo $data['name'] ?>
                </p>
            </header>
            <div class="card-content">
                <div class="content">
                    <div class="is-flex is-flex-direction-column is-align-items-center is-centered">
                        <h2 style="color: #fff !important;">Voter pour <?php echo $data['name'] ?></h2>
                        <form action="" method="post">


                            <div class="h-captcha" data-sitekey="c92050e0-ebd8-4c6d-9d1a-12af36c2f6c5"></div>
                            <?php if (isset($_POST['g-recaptcha-response'])) {
                                if ($_POST['g-recaptcha-response'] === '') {
                                    echo '<p class="help is-danger is-flex is-justify-content-space-around">Veuillez cocher la case de captcha</p>';
                                }
                            } ?>
                            <div class="is-flex is-justify-content-space-around">
                                <button class="button is-info is-outlined radio is-flex is-justify-content-space-around"
                                        value="vote" type="submit"
                                        name="sub-vote">

                                    <span class="icon is-small">
                                        <i style="color: white !important;" class="fas fa-check"></i>
                                    </span>
                                    <span id="shows" style="color: white !important;">Voter</span>
                                </button>
                            </div>
                        </form>
                    </div>
                    <?php  if ($erreurVote){
                        echo "<p style='color: white !important;' class='card-content is-flex is-justify-content-space-around'>" . $erreurVote ."</p>";
                    }?>

                </div>
            </div>
        </div>
    </section>
</main>


<?php require('footer.php');
}
} ?>



</body>


</html>