<?php
$random = rand(0, 20);






?>

<body>
<section class="hero is-medium is-link mb-6"
         style="background-size: cover; background-repeat: no-repeat ;background-image: url('../../public/assets/img/<?php echo $random ?>.jpg');">
    <div class="hero-body">
        <p data-text='Détail du serveur' class="title titleLogo has-text-centered">
            Détail du serveur
        </p>
    </div>
</section>


<main class="menuServ columns ">

    <?php require('menu.php'); ?>

    <?php
    if ($seveur->getServByName($serveur)[0] != null) {


    foreach ($datas

    as $data) {

    ?>
    <div id="cardOpn" class="container is-fluid column pt-0 pb-0">
        <div class="column has-text-centered p-0">
            <div class="card bg-add column">
                <div class="card-content">
                    <p style="color: white" class="is-size-2"><?php echo $data['name'] ?></p>
                </div>
                <div class="card-content">
                    <div class="media">
                        <div class="apropos"  style="max-width: 100%;overflow:auto!important;overflow-wrap:break-word !important;">
                            <figure id="imgServ">
                                <img src='<?php echo "/../../public/assets/img/serv/{$data['img']}" ?>'
                                     alt="Placeholder image">
                            </figure>

                        </div>
                    </div>

                    <div class="content is-size-4">
                        <div class="columns">

                            <?php if ($data['version']) {
                                echo "<article class='message column m-1 p-0 is-info has-text-centered'><div class='message-header'>Version</div>
                                <div class='message-body'>
                                    
                                        <p>{$data['version']}</p>
                                   
                                </div>
                            </article>";

                            } ?>
                            <?php if ($data['ip']) {
                                echo "<article class='message column m-1 p-0 is-info has-text-centered'><div class='message-header'>Ip</div>
                                <div class='message-body'>
                                    
                                        <p>{$data['ip']}</p>
                                   
                                </div>
                            </article>";

                            } ?>
                            <?php if ($data['port']) {
                                echo "<article class='message column m-1 p-0 is-info has-text-centered'><div class='message-header'>Port</div>
                                <div class='message-body'>
                                    
                                        <p>{$data['port']}</p>
                                   
                                </div>
                            </article>";

                            } ?>
                        </div>

                        <br>

                    </div>
                </div>
                <div class="card-content">
                    <div class="content is-size-4">
                        <div class="columns">

                            <?php echo "<article class='message column m-1 p-0 is-info has-text-centered'><div class='message-header'>Votes</div>
                                <div class='message-body'>
                                    
                                        <p>{$data['vote']}</p>
                                   
                                </div>
                            </article>";


                            echo "<article class='message column m-1 p-0 is-info has-text-centered'><div class='message-header'>Clics</div>
                                <div class='message-body'>
                                    
                                        <p>{$data['clics']}</p>
                                   
                                </div>
                            </article>";


                            echo "<article class='message column m-1 p-0 is-info has-text-centered'><div class='message-header'>Coms</div>
                                <div class='message-body'>
                                    
                                        <p>{$data['com']}</p>
                                   
                                </div>
                            </article>"; ?>


                        </div>


                        <div class="card mt-4 mb-4 m-0 column is-12">

                            <div class="card-content">
                                <div style="overflow: hidden;word-break: break-word !important;"
                                     class="media is-flex ">
                                    <h4>A propos du serveur</h4>
                                    <?php echo $data['descri'] ?>
                                </div>
                            </div>
                        </div>

                        <?php
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
                        } ?>

                        <div class='is-flex is-justify-content-flex-start ' style="overflow:auto!important;overflow-wrap:break-word !important;">
                            <?php $tagExplo = explode(",", $data['tag']);
                            foreach ($tagExplo as $tag) {
                                echo "<span style='background-color: #45769c;color: white !important;' class='tag mr-1 mb-6'>{$tag}</span>
                        ";
                            }
                            } ?>
                        </div>

                        <div  class="columns is-mobile is-multiline is-centered">

                            <?php
                            global $db;
                            $data = $db->prepare('SELECT * FROM accounts WHERE id = ?');
                            $data->execute([$_SESSION['idUser']]);
                            $datas = $data->fetch();
                            foreach ($notes as $value) { ?>
                                <div class="card column is-6 marginCom" style="overflow:auto!important;overflow-wrap:break-word !important;">
                                    <div class="columns">
                                        <div class="column is-2" id="#profile-containerBIS">
                                            <img id="profileImageBIS"
                                                   src="../../public/assets/img/profil/<?php echo $datas['img'] ?>">
                                            <p><?php echo $value['name']; ?></p>
                                        </div>

                                        <div class="card-content is-12">
                                            <div class="media">
                                                <div class="media-content">
                                                    <p style="overflow: hidden;word-break: break-word !important;"><?php echo $value['comment']; ?></p>
                                                    <p style="overflow: hidden;word-break: break-word !important;">
                                                        <?php for ($i = 0; $i < $value['stars']; $i++) {
                                                            echo "<span class='fa fa-star checked'></span>";
                                                        }
                                                        $reste = 5 - $value['stars'];
                                                        if ($reste > 0 && $reste < 5) {
                                                            for ($i = 0; $i < $reste; $i++) {
                                                                echo "<span class='fa fa-star'></span>";
                                                            }
                                                        }
                                                        ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            <?php }

                            //more
                            foreach ($notes2 as $value) { ?>
                                <div class="card   column is-6 marginCom" style="overflow:auto!important;overflow-wrap:break-word !important;">
                                    <div class="columns">
                                        <div class="column is-2" id="#profile-containerBIS">
                                            <img id="profileImageBIS"
                                                 src="../../public/assets/img/profil/<?php echo $datas['img'] ?>">
                                            <p><?php echo $value['name']; ?></p>
                                        </div>

                                        <div class="card-content is-12">
                                            <div class="media">
                                                <div class="media-content">
                                                    <p style="overflow: hidden;word-break: break-word !important;"><?php echo $value['comment']; ?></p>
                                                    <p style="overflow: hidden;word-break: break-word !important;">
                                                        <?php for ($i = 0; $i < $value['stars']; $i++) {
                                                            echo "<span class='fa fa-star checked'></span>";
                                                        }
                                                        $reste = 5 - $value['stars'];
                                                        if ($reste > 0 && $reste < 5) {
                                                            for ($i = 0; $i < $reste; $i++) {
                                                                echo "<span class='fa fa-star'></span>";
                                                            }
                                                        }
                                                        ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            <?php }
                            ?>

                            <?php if(!isset($_POST['sub-more'])){ ?>
                            <div class="column is-12 marginCom">
                                <form method="post">

                                    <button class="button is-info is-outlined radio" value="show" type="submit"
                                            name="sub-more">

                                    <span class="icon is-small">
                                        <i style="color: white !important;" class="fas fa-check"></i>
                                    </span>
                                        <span id="shows" style="color: white !important;">Voir plus</span>
                                    </button>
                                </form>
                            </div>
                            <?php } ?>


                            <?php if(isset($_POST['sub-more'])){
                                ?>
                                <div class="column is-12 marginCom">
                                    <form method="post">

                                        <button class="button is-info is-outlined radio" value="min" type="submit"
                                                name="sub-min">

                                    <span class="icon is-small">
                                        <i style="color: white !important;" class="fas fa-check"></i>
                                    </span>
                                            <span id="shows" style="color: white !important;">Voir moins</span>
                                        </button>
                                    </form>
                                </div>
                            <?php } ?>

                        </div>
                        <?php if (isset($_SESSION['idUser'])) {
                        ?>
                        <div class="card mt-6 column ">

                            <div class="card" style="overflow:auto!important;overflow-wrap:break-word !important;" >
                                <div class="media">
                                    <div class="apropos"  >
                                        <h4 >Mettre un commentaire</h4>

                                        <form method="post" >
                                            <div class='stars'>
                                                <i class='lar la-star' data-value='1'></i>
                                                <i class='lar la-star' data-value='2'></i>
                                                <i class='lar la-star' data-value='3'></i>
                                                <i class='lar la-star' data-value='4'></i>
                                                <i class='lar la-star' data-value='5'></i>
                                            </div>
                                            <input type='hidden' name='note' id='note' value='0'>
                                            <textarea style="max-width: 75%;overflow:auto!important;overflow-wrap:break-word !important;" class="radio input mt-2 mb-6" name="commentaire"
                                                      placeholder="commentaire"></textarea>
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

                                            <button id="shows" class="button is-info is-outlined radio" value="envoyer"
                                                    type="submit" name="submit">

                                    <span class="icon is-small">
                                        <i style="color: black !important;" class="fas fa-check"></i>
                                    </span>
                                                <span style="color: black !important;">Enregistrer</span>
                                            </button>


                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    </div>
                </div>
            </div>
            <?php }
            else {
                echo

                    '<div class="container is-fluid pt-0 mt-0">
                            <div class="card mb-4 column">

                                <div class="card-content">
                                    <div style="overflow: hidden;overflow-wrap:break-word"
                                         class="media is-flex">' . $aucun .
                    '</div>
                                </div>
                            </div>
                        </div>';

            } ?>
</main>


<?php require('footer.php'); ?>

</body>

</html>