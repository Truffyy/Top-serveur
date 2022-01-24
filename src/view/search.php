<body>
<header>
    <section class="hero is-medium is-link mb-6"
             style="background-size: cover ; background-repeat: no-repeat ;background-image: url('../../public/assets/img/mineserv.jpg');">
        <div class="hero-body">
            <p class="title has-text-centered">
                Serveurs disponibles
            </p>
        </div>
    </section>

</header>

<main class="menuServ columns ">

    <?php require('menu.php') ?>

    <div style="padding-top: 0 !important;" id="cardOpn" class="container is-fluid column">
        <!-- nouvellesection -->

        <?php

        if ($_POST["search"]) {
        foreach ($datas as $data) {
            echo "<div class='cardServ '>
            <div style='margin-top: 0 !important; padding-top: 0 !important;' class='box columns is-multiline margin-search'>";
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

            echo "<div style='overflow:hidden !important;word-break: break-word !important; height: 240px !important; width: 70% !important;' class=' column is-5'>
                    <p>
                        {$data['descri']}
                    </p>
                </div>";
            echo "<div class='column is-7'>
                    <p>Votes : {$data['vote']}</p>
                    <p>clics : {$data['clics']}</p>
                    <p>commentaires : {$data['com']}</p>

                    <p><a href='/votes/{$data['token']}'>Votez</a></p>
                    <form name='form' method='post' action='/details-serveur/serveur/{$data['token']}'>
                        <p><button class='button is-info is-outlined radio mt-4' name='increment' value='yes' type='submit'></a></p>
                        <span class='icon is-small'>
                                        <i style='color: black !important;' class='fas fa-check'></i>
                                    </span>
                                        <span id='shows' style='color: black !important;'>Plus de détails</span>
                                    </button>
                    </form>
                    
                </div>";
            if ($data['stars']){
                $moyenne = round($data['stars'] / $data['com']);
            }else{
                $moyenne = 0;
            }
            if ($moyenne > 0) {for ($i = 0; $i < $moyenne; $i++)echo "<span class='fa fa-star checked'></span>";
                $reste = 5 - $moyenne;
                for ($i = 0; $i < $reste; $i++) echo "<span class='fa fa-star'></span>"; }
            else{
                for ($i = 0; $i < 5; $i++) echo "<span class='fa fa-star'></span>"; }
            $tagExplo = explode("," , $data['tag']);

            foreach ($tagExplo as $tag) {
                echo "<div class='is-flex is-justify-content-flex-start mr-1'>
                    <span style='background-color: #45769c;color: white !important;' class='tag '>{$tag}</span>
                    </div>";
            }
            echo "
            </div>
        </div>";
        }
        }
        ?>

        <!-- fin des card serveur -->
        <?php if (!$search->getServ()) {
            echo "<div class='columns mt-1'><div class='card column is-12 has-text-centered'>
                    <p>" . $aucun . "</p>

                </div></div> ";
        }
        ?>

    </div>

</main>
<?php require('footer.php'); ?>
</body>


</html>