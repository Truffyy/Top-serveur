<?php
$random = rand(0, 20);



?>

<body>
  <section class="hero is-medium is-link mb-6" style="background-size: cover; background-repeat: no-repeat ;background-image: url('../../public/assets/img/<?php echo $random ?>.jpg');">
    <div class="hero-body">
      <p data-text='Jeux disponible' class="title titleLogo has-text-centered">
        Jeux disponible
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

    <div id="cardOpn" class="column is-12 pt-0">

        <div class="columns is-multiline container is-fluid">
          <a  class="column 


is-4" href="/liste-serveur/game/minecraft">
            <div class="game">
              <div class="card">
                <div class="card-image">
                  <figure class="image is-5by3">
                    <img src="../../public/assets/img/15.jpg" alt="Placeholder image">
                  </figure>
                </div>
                <div class="card-content">
                  <div class="media">
                    <div class="media-content">
                    <p data-text='Nombre de serveurs' class="title titleLogos has-text-centered">
                        Nombre de serveurs
                      </p>
                      <p class="subtitle "><?php echo count($dataMinecraft);?></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </a>
            <a  class="column 


is-4" href="/liste-serveur/game/discord">
            <div class="game">
              <div class="card">
                <div class="card-image">
                  <figure class="image is-5by3">
                    <img src="../../public/assets/img/DISCORD.jpg" alt="Placeholder image">
                  </figure>
                </div>
                <div class="card-content ">
                  <div class="media">
                    <div class="media-content">
                    <p data-text='Nombre de serveurs' class="title titleLogos has-text-centered">
                        Nombre de serveurs
                      </p>
                        <p class="subtitle "><?php echo count($dataDiscord);?></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </a>
            <a  class="column 


is-4" href="/liste-serveur/game/terraria">
            <div class="game">
              <div class="card">
                <div class="card-image">
                  <figure class="image is-5by3">
                    <img src="../../public/assets/img/11.jpg" alt="Placeholder image">
                  </figure>
                </div>
                <div class="card-content">
                  <div class="media">
                    <div class="media-content">
                      <p data-text='Nombre de serveurs' class="title titleLogos has-text-centered">
                        Nombre de serveurs
                      </p>
                        <p class="subtitle "><?php echo count($dataTerraria);?></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </a>
            <a  class="column 


is-4" href="/liste-serveur/game/dofus">
            <div class="game">
              <div class="card">
                <div class="card-image">
                  <figure class="image is-5by3">
                    <img src="../../public/assets/img/dofus.jpeg" alt="Placeholder image">
                  </figure>
                </div>
                <div class="card-content">
                  <div class="media">
                    <div class="media-content">
                    <p data-text='Nombre de serveurs' class="title titleLogos has-text-centered">
                        Nombre de serveurs
                      </p>
                        <p class="subtitle "><?php echo count($dataDofus);?></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </a>
            <a  class="column 


is-4" href="/liste-serveur/game/gsm">
            <div class="game">
              <div class="card">
                <div class="card-image">
                  <figure class="image is-5by3">
                    <img src="../../public/assets/img/garry's mod.jpg" alt="Placeholder image">
                  </figure>
                </div>
                <div class="card-content">
                  <div class="media">
                    <div class="media-content">
                    <p data-text='Nombre de serveurs' class="title titleLogos has-text-centered">
                        Nombre de serveurs
                      </p>
                        <p class="subtitle "><?php echo count($dataGarry);?></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </a>
            <a  class="column 


is-4" href="/liste-serveur/game/gta">
            <div class="game">
              <div class="card">
                <div class="card-image">
                  <figure class="image is-5by3">
                    <img src="../../public/assets/img/gtav.jpg" alt="Placeholder image">
                  </figure>
                </div>
                <div class="card-content">
                  <div class="media">
                    <div class="media-content">
                    <p data-text='Nombre de serveurs' class="title titleLogos has-text-centered">
                        Nombre de serveurs
                      </p>
                      <p class="subtitle "><?php echo count($DataGTA);?></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </a>
            <a  class="column 


is-4" href="/liste-serveur/game/wow">
            <div class="game">
              <div class="card">
                <div class="card-image">
                  <figure class="image is-5by3">
                    <img src="../../public/assets/img/wow.jpg" alt="Placeholder image">
                  </figure>
                </div>
                <div class="card-content">
                  <div class="media">
                    <div class="media-content">
                    <p data-text='Nombre de serveurs' class="title titleLogos has-text-centered">
                        Nombre de serveurs
                      </p>
                      <p class="subtitle "><?php echo count($dataWorldOfWarcraft);?></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </a>
            <a  class="column 


is-4" href="/liste-serveur/game/ark">
            <div class="game">
              <div class="card">
                <div class="card-image">
                  <figure class="image is-5by3">
                    <img src="../../public/assets/img/ark.jpg" alt="Placeholder image">
                  </figure>
                </div>
                <div class="card-content">
                  <div class="media">
                    <div class="media-content">
                    <p data-text='Nombre de serveurs' class="title titleLogos has-text-centered">
                        Nombre de serveurs
                      </p>
                        <p class="subtitle "><?php echo count($dataArk);?></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </a>
            <a  class="column 


is-4" href="/liste-serveur/game/rust">
            <div class="game">
              <div class="card">
                <div class="card-image">
                  <figure class="image is-5by3">
                    <img src="../../public/assets/img/rust.jpg" alt="Placeholder image">
                  </figure>
                </div>
                <div class="card-content">
                  <div class="media">
                    <div class="media-content">
                    <p data-text='Nombre de serveurs' class="title titleLogos has-text-centered">
                        Nombre de serveurs
                      </p>
                        <p class="subtitle "><?php echo count($dataRust);?></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </a>
            <a  class="column 


is-4" href="/liste-serveur/game/cs">
            <div class="game">
              <div class="card">
                <div class="card-image">
                  <figure class="image is-5by3">
                    <img src="../../public/assets/img/cs.jpg" alt="Placeholder image">
                  </figure>
                </div>
                <div class="card-content">
                  <div class="media">
                    <div class="media-content">
                    <p data-text='Nombre de serveurs' class="title titleLogos has-text-centered">
                        Nombre de serveurs
                      </p>
                        <p class="subtitle "><?php echo count($dataCs);?></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </a>
            <a  class="column 


is-4" href="/liste-serveur/game/habbo">
            <div class="game">
              <div class="card">
                <div class="card-image">
                  <figure class="image is-5by3">
                    <img src="../../public/assets/img/habbo.png" alt="Placeholder image">
                  </figure>
                </div>
                <div class="card-content">
                  <div class="media">
                    <div class="media-content">
                    <p data-text='Nombre de serveurs' class="title titleLogos has-text-centered">
                        Nombre de serveurs
                      </p>
                        <p class="subtitle "><?php echo count($dataHabbo);?></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </a>
            <a  class="column 


is-4" href="/liste-serveur/game/arma">
            <div class="game">
              <div class="card">
                <div class="card-image">
                  <figure class="image is-5by3">
                    <img src="../../public/assets/img/arma.jpg" alt="Placeholder image">
                  </figure>
                </div>
                <div class="card-content">
                  <div class="media">
                    <div class="media-content">
                    <p data-text='Nombre de serveurs' class="title titleLogos has-text-centered">
                        Nombre de serveurs
                      </p>
                        <p class="subtitle "><?php echo count($dataArmA);?></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </a>
            <a  class="column 


is-4" href="/liste-serveur/game/conan">
            <div class="game">
              <div class="card">
                <div class="card-image">
                  <figure class="image is-5by3">
                    <img src="../../public/assets/img/conan.jpg" alt="Placeholder image">
                  </figure>
                </div>
                <div class="card-content ">
                  <div class="media">
                    <div class="media-content">
                    <p data-text='Nombre de serveurs' class="title titleLogos has-text-centered">
                        Nombre de serveurs
                      </p>
                        <p class="subtitle "><?php echo count($dataConan);?></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </a>
            <a  class="column 


is-4" href="/liste-serveur/game/rp">
            <div class="game">
              <div class="card">
                <div class="card-image">
                  <figure class="image is-5by3">
                    <img src="../../public/assets/img/roleplay.gif" alt="Placeholder image">
                  </figure>
                </div>
                <div class="card-content ">
                  <div class="media">
                    <div class="media-content">
                    <p data-text='Nombre de serveurs' class="title titleLogos has-text-centered">
                        Nombre de serveurs
                      </p>
                        <p class="subtitle "><?php echo count($dataForum);?></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </a>
            <a  class="column 


is-4" href="/liste-serveur/game/ogame">
            <div class="game">
              <div class="card">
                <div class="card-image">
                  <figure class="image is-5by3">
                    <img src="../../public/assets/img/ogame.jpg" alt="Placeholder image">
                  </figure>
                </div>
                <div class="card-content ">
                  <div class="media">
                    <div class="media-content">
                    <p data-text='Nombre de serveurs' class="title titleLogos has-text-centered">
                        Nombre de serveurs
                      </p>
                        <p class="subtitle "><?php echo count($dataOgame);?></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </a>
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