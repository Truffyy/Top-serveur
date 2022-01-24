<?php $random = rand(0, 20); ?>

<body>

<header>
    <section class="hero is-medium is-link mb-6"
             style="background-size: cover; background-repeat: no-repeat ;background-image: url('/../../public/assets/img/<?php echo $random ?>.jpg');">
        <div class="hero-body">
            <p data-text='Liste des serveurs' class="title titleLogo has-text-centered">
                Liste des serveurs

            </p>
        </div>
    </section>

</header>

<main class="menuServ columns ">

    <?php require('menu.php') ?>


    <div  id="cardOpn" class="container is-fluid column">
        <div class="columns is-centered">

            <div class="card m-2 column is-3">
                <div class="card-image">
                    <figure class="image is-4by3">
                        <img src="/../../public/assets/img/9.jpg" alt="Placeholder image">
                    </figure>
                </div>
                <div class="card-content">
                    <div class="media">
                        <div class="media-left">
                            <p>coucou</p>
                        </div>
                        <div class="media-content">
                            <br>
                            <p class="subtitle is-6"><span class="tag is-warning">Ladies fecale</span></p>
                        </div>
                    </div>

                    <div class="content">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Phasellus nec iaculis mauris. <a>@bulmaio</a>.
                        <a href="#">#css</a> <a href="#">#responsive</a>
                        <br>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star no-checked"></span>
                        <span class="fa fa-star no-checked"></span>

                    </div>
                    <span class="tag is-black">Caca</span>
                    <span class="tag is-dark">root</span>
                    <span class="tag is-light">Marty</span>


                </div>
            </div>
            <div class="card m-2 column is-3">
                <div class="card-image">
                    <figure class="image is-4by3">
                        <img src="/../../public/assets/img/10.jpg" alt="Placeholder image">
                    </figure>
                </div>
                <div class="card-content">
                    <div class="media">
                        <div class="media-left">
                            <p>coucou</p>
                        </div>
                        <div class="media-content">
                            <br>
                            <p class="subtitle is-6"><span class="tag is-warning">Ladies fecale</span></p>
                        </div>
                    </div>

                    <div class="content">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Phasellus nec iaculis mauris. <a>@bulmaio</a>.
                        <a href="#">#css</a> <a href="#">#responsive</a>
                        <br>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star no-checked"></span>
                        <span class="fa fa-star no-checked"></span>


                    </div>
                    <span class="tag is-black">Caca</span>
                    <span class="tag is-dark">root</span>
                    <span class="tag is-light">Marty</span>


                </div>
            </div>
            <div class="card m-2 column is-3">
                <div class="card-image">
                    <figure class="image is-4by3">
                        <img src="/../../public/assets/img/15.jpg" alt="Placeholder image">
                    </figure>
                </div>
                <div class="card-content">
                    <div class="media">
                        <div class="media-left">
                            <p>coucou</p>
                        </div>
                        <div class="media-content">
                            <br>
                            <p class="subtitle is-6"><span class="tag is-warning">Ladies fecale</span></p>
                        </div>
                    </div>
                    <div class="content">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Phasellus nec iaculis mauris. <a>@bulmaio</a>.
                        <a href="#">#css</a> <a href="#">#responsive</a>
                        <br>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star no-checked"></span>
                        <span class="fa fa-star no-checked"></span>

                    </div>
                    <span class="tag is-black">Caca</span>
                    <span class="tag is-dark">root</span>
                    <span class="tag is-light">Marty</span>
                </div>
            </div>
        </div>
        <!-- nouvellesection -->


        <?php


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
        </div>";
        }
        ?>

        <!-- fin des card serveur -->
        <?php if ($aucun) {
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