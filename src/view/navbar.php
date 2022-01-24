<header>
    <div class="transition transition-3 is-active">
        <div class="logoAnim">
            <div class="contenth2">
                <h2>Top serveur privé</h2>
                <h2>Top serveur privé</h2>
            </div>

        </div>
    </div>
</header>
<nav class="navbar" role="navigation" aria-label="main navigation">


    <div class="navbar-brand">
        <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
        </a>
    </div>

    <div id="navbarBasicExample" class="navbar-menu ">
        <div class="navbar-start">
            <a href='/liste-jeux' class="navbar-item is-active">
                Liste jeux
            </a>
            <a href='/ajouter-serveur' class="navbar-item js-trigger-transition is-active">
                Ajouter un serveur
            </a>
            <a href='/pub' class="navbar-item is-active">
                Publicité/premium
            </a>
            <a href='/account/menu/profil' class="navbar-item is-active">

                Gestion de compte
            </a>
            <div id="search" class="container control is-expanded has-icons-left ml-5 ">
                <form action="/search" class="example mt-1  columns" method="post">
                    <input class="column is-10 " type="text" placeholder="Search.." name="search">
                    <button type="submit"><i class="fa fa-search column "></i></button>
                </form>
            </div>
        </div>
            <div class="navbar-start mr-0">
                <?php if (!isset($_SESSION['username'])) { ?>
                <a href='/register' class="button m-2 is-primary is-active">
                    <strong>Sign up</strong>
                </a>
                <a href='/login' class="button m-2 is-light is-active ">
                    Log in
                </a>
            </div>

            <?php } ?>
            <?php if (isset($_SESSION['username'])) { ?>
                            <a href='/logout' class="button is-danger m-2">
                                <strong>Logout</strong>
                            </a>
            <?php } ?>

    </div>

</nav>
