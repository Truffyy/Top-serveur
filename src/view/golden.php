<?php $random = rand(0, 20); ?>

<body>
<section class="hero is-medium is-link mb-6"
         style="background-size: cover; background-repeat: no-repeat ;background-image: url('../../public/assets/img/<?php echo $random ?>.jpg');">
    <div class="hero-body">
        <p data-text='Golden' class="title titleLogo has-text-centered">
            Golden
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
    <button id="open" class="ouvrir " onclick="ouvre()">menu</button>
    <div id="cardOpn" class="container is-fluid column pt-0">
        <div class="card bg-add">
            <div class="card-header-title is-white is-centered card-header">

                <h4 class="title-add gold">Golden</h4>

            </div>
            <form method='post' class="pub">
                <div class="card-content container">
                    <div class="pubtitle">
                        <p class="gold">Choisis ton serveur en question</p>
                    </div>
                    <div class="select is-fullwidth">
                        <select name="jeu" class='gold' required>
                            <option>Selectionne ton serveur</option>

                        </select>
                    </div>
                </div>

                <div class="card-content container">
                    <div class="pubtitle">
                        <p class="gold">Durée de l'annonce </p>
                    </div>
                    <div class="select is-fullwidth">
                        <select name="jeu" id='gold' class='gold' required>
                            <option value="">Combien de jours</option>
                            <option value="5€">1 jour</option>
                            <option value="15€">3 jours</option>
                            <option value="25€">5 jours</option>
                            <option value="35€">7 jours</option>
                            <option value="45€">10 jours</option>
                            <option value="55€">15 jours</option>
                            <option value="65€">20 jours</option>
                            <option value="75€">25 jours</option>
                            <option value="85€">31 jours</option>
                        </select>
                    </div>
                </div>
                <div class="card-content container has-text-centered">
                    <button name="submit" class="  button is-info is-outlined gold mb-4">payer</button>
                </div>
                <div class="totalpay container">
                    <div class="gold has-text-centered">
                        <p id="euro"> Prix à payer 0€</p>
                    </div>
                </div>
            </form>
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
</body>


</html>