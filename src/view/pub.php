<?php $random = rand(0, 20); ?>

<body>
<section class="hero is-medium is-link mb-6" style="background-size: cover; background-repeat: no-repeat ;background-image: url('../../public/assets/img/<?php echo $random ?>.jpg');">
    <div class="hero-body">
        <p data-text='Pub' class="title titleLogo has-text-centered">
            Pub
        </p>
    </div>
</section>


<main class="menuServ columns ">
    <aside  id="volet" class="menu column is-2">
        <div class="logoMenu">
            <div class="contenth2 ">
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

    <div id="cardOpn" class="container is-fluid column">
<div class="columns is-multiline ">
    <div class="card  column is-12 mb-6">
        <div class="card-header-title is-centered card-header">
            <h4>A propos :</h4>
        </div>
        <p class="size mt-6 mb-4"> Distinguez votre serveur des autres sur le classement, souscrivez à l'option premium et votre serveur s'affichera sur fond coloré pour attirer l'oeil des visiteurs. Les internautes qui parcourent nos classements cliquent en moyenne 2 fois plus sur les serveurs qui sont premium. Améliorez votre visibilité et augmentez votre taux de conversion.
        </p>
    </div>

    <div class="card column mt-6 mr-1 ">
            <div class="is-flex is-flex-direction-column is-align-content-space-between">
                <div class="card-header-title is-centered card-header">
                    <h4>Mettre son serveur en avant :</h4>
                </div>
                <p class="size pb-6 mt-6 mb-4"> Placez votre serveur privé en première place du classement pendant une durée déterminée. Vous bénéficierez d'une importante visibilité et vous apparaitrez en premier sur toutes les pages et tags de votre catégorie de jeu. Acquérez rapidement de nouveaux joueurs ciblés et améliorez considérablement votre popularité.
                </p>
                <a href='/annonce' class=" button mb-4" >Mettre son serveur en avant</a>
            </div>
        </div>



        <div class="goldenbg card  column is-6 mt-6 ml-1">
            <div class="is-flex is-flex-direction-column is-align-content-space-between">
                <div class="card-header-title is-centered card-header ">
                    <h4 class="gold">Golden :</h4>
                </div class='gold'>
                <div>
                    <p class="gold  mt-6 pb-6  mb-4"> Distinguez votre serveur des autres sur le classement, souscrivez à l'option premium et votre serveur s'affichera sur fond coloré pour attirer l'oeil des visiteurs. Les internautes qui parcourent nos classements cliquent en moyenne 2 fois plus sur les serveurs qui sont premium. Améliorez votre visibilité et augmentez votre taux de conversion.
                    </p>
                </div>
                <a href="/golden" class="gold button mb-4" >Mettre son serveur en gold</a>

            </div>
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
            console.log('oui');
        } else {
            x.style.display = 'none';
            console.log('non');
        }
        if (main.style.display === 'block') {
            main.style.display = 'none';
            console.log('oui');
        } else {
            main.style.display = 'block';
            console.log('non');
        }
    }
</script>
</body>
</html>
