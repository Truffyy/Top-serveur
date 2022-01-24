<body style="width: 100% !important;">
<header>
    <?php $random = rand(0, 20); ?>


    <section class="hero is-medium is-link mb-6"
             style="background-size: cover; background-repeat: no-repeat ;background-image: url('../../public/assets/img/<?php echo $random ?>.jpg');">
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
            <div class="mnServ account-menu ">
                <p class="h2mn">Comment fonctionne les crédits</p>

                <div class="container column is-12" id='profile-imageFlex'>
                    <p class="pServ">Votre solde vous permet d'acheter de la publicité pour vos serveurs de jeux. Votre
                        compte est crédité instantanément du montant qui est indiqué sur le module de paiement. Vos
                        données
                        sont chiffrées avant d'être transmises et nous n'enregistons aucune donnée personnelle de
                        paiement.
                    </p>
                </div>


                <hr>

                <div class="card">
                    <p class="h2mnBis card-title ">Créditez votre solde</p>


                    <div data-dedipass="a355a11751e50aac6e60d6e115c6bbdc" data-dedipass-custom=""></div>
                </div>
                <br>
                <h2 class="h2mn">Historiques des transactions</h2>
                <ul id="ulSolde">
                    <li class="liSolde">Référence</li>
                    <li class="liSolde">Montant</li>
                    <li class="liSolde">Prestaire</li>
                    <li class="liSolde">Date</li>
                    <hr>

                </ul>
                <p class="pServ">Vous avez aucune transaction pour le moments</p>
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