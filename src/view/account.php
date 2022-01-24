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

        <?php require('menu_account.php') ?>
        





    </main>

 
        <?php require('footer.php'); ?>
    
</body>