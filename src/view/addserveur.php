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
    <!-- <div id='btnServAdd'> -->
    <div class="mnServ account-menu">
        <p class="h2mn">Vos serveurs publiés</p>
        <div id="btnServ" style='overflow:hidden !important;word-break: break-word !important;'>
            <button class="buttonServ  is-centered mt-6"><a class="h2mn" href="/ajouter-serveur">+ Ajouter un
                    serveur </a></button>

            <br>
            <?php if ($errorServ) {
                echo "<p class='i pServ mt-6 mb-3' style='color: white'>" . $errorServ . "</p>";
            }?>
            <!-- </div> -->
        </div>


        <hr>


        <div class="container mr-3  is-fluid">
            <?php

            foreach ($myServ as $data) {
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
                    <form style='overflow:hidden !important;word-break: break-word !important;' name='form' method='post' action='/modifier-serveur/{$data['token']}'>
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