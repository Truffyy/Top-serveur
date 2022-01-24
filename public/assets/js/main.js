window.onload = () => {







    // On va chercher toutes les étoiles
    const stars = document.querySelectorAll(".la-star");

    // On va chercher l'input
    const note = document.querySelector("#note");

    // On boucle sur les étoiles pour le ajouter des écouteurs d'évènements
    for(star of stars){
        // On écoute le survol
        star.addEventListener("mouseover", function(){
            resetStars();
            this.style.color = "gold";
            this.classList.add("las");
            this.classList.remove("lar");
            // L'élément précédent dans le DOM (de même niveau, balise soeur)
            let previousStar = this.previousElementSibling;

            while(previousStar){
                // On passe l'étoile qui précède en rouge
                previousStar.style.color = "gold";
                previousStar.classList.add("las");
                previousStar.classList.remove("lar");
                // On récupère l'étoile qui la précède
                previousStar = previousStar.previousElementSibling;
            }
        });

        // On écoute le clic
        star.addEventListener("click", function(){
            note.value = this.dataset.value;
        });

        star.addEventListener("mouseout", function(){
            resetStars(note.value);
        });
    }

    /**
     * Reset des étoiles en vérifiant la note dans l'input caché
     * @param {number} note
     */
    function resetStars(note = 0){
        for(star of stars){
            if(star.dataset.value > note){
                star.style.color = "black";
                star.classList.add("lar");
                star.classList.remove("las");
            }else{
                star.style.color = "gold";
                star.classList.add("las");
                star.classList.remove("lar");
            }
        }
    }








    let result = document.getElementById('select1');
    if (result){
        result.addEventListener('change', (event) => {

            const value = event.target.value;
            switch (value) {
                case 'Minecraft':
                    document.getElementById("selectMinecraft").style.display = "block";
                    document.getElementById("selectDiscord").style.display = "none";
                    document.getElementById("selectTerraria").style.display = "none";
                    document.getElementById("selectDofus").style.display = "none";
                    document.getElementById("selectGta").style.display = "none";
                    document.getElementById("selectGarrysMod").style.display = "none";
                    document.getElementById("selectWow").style.display = "none";
                    document.getElementById("selectArk").style.display = "none";
                    document.getElementById("selectRust").style.display = "none";
                    document.getElementById("selectCounter").style.display = "none";
                    document.getElementById("selectHabbo").style.display = "none";
                    document.getElementById("selectArma").style.display = "none";
                    document.getElementById("selectConan").style.display = "none";

                    break;
                case 'Discord':
                    document.getElementById("selectDiscord").style.display = "block";
                    document.getElementById("selectMinecraft").style.display = "none";
                    document.getElementById("selectTerraria").style.display = "none";
                    document.getElementById("selectDofus").style.display = "none";
                    document.getElementById("selectGta").style.display = "none";
                    document.getElementById("selectGarrysMod").style.display = "none";
                    document.getElementById("selectWow").style.display = "none";
                    document.getElementById("selectArk").style.display = "none";
                    document.getElementById("selectRust").style.display = "none";
                    document.getElementById("selectCounter").style.display = "none";
                    document.getElementById("selectHabbo").style.display = "none";
                    document.getElementById("selectArma").style.display = "none";
                    document.getElementById("selectConan").style.display = "none";
                    break;
                case 'Terraria':
                    document.getElementById("selectTerraria").style.display = "block";
                    document.getElementById("selectMinecraft").style.display = "none";
                    document.getElementById("selectDiscord").style.display = "none";
                    document.getElementById("selectDofus").style.display = "none";
                    document.getElementById("selectGta").style.display = "none";
                    document.getElementById("selectGarrysMod").style.display = "none";
                    document.getElementById("selectWow").style.display = "none";
                    document.getElementById("selectArk").style.display = "none";
                    document.getElementById("selectRust").style.display = "none";
                    document.getElementById("selectCounter").style.display = "none";
                    document.getElementById("selectHabbo").style.display = "none";
                    document.getElementById("selectArma").style.display = "none";
                    document.getElementById("selectConan").style.display = "none";
                    break;
                case 'Dofus':
                    document.getElementById("selectDofus").style.display = "block";
                    document.getElementById("selectMinecraft").style.display = "none";
                    document.getElementById("selectDiscord").style.display = "none";
                    document.getElementById("selectTerraria").style.display = "none";
                    document.getElementById("selectGta").style.display = "none";
                    document.getElementById("selectGarrysMod").style.display = "none";
                    document.getElementById("selectWow").style.display = "none";
                    document.getElementById("selectArk").style.display = "none";
                    document.getElementById("selectRust").style.display = "none";
                    document.getElementById("selectCounter").style.display = "none";
                    document.getElementById("selectHabbo").style.display = "none";
                    document.getElementById("selectArma").style.display = "none";
                    document.getElementById("selectConan").style.display = "none";
                    break;
                case 'Garry\'s Mod':
                    document.getElementById("selectGarrysMod").style.display = "block";
                    document.getElementById("selectMinecraft").style.display = "none";
                    document.getElementById("selectDiscord").style.display = "none";
                    document.getElementById("selectTerraria").style.display = "none";
                    document.getElementById("selectDofus").style.display = "none";
                    document.getElementById("selectGta").style.display = "none";
                    document.getElementById("selectWow").style.display = "none";
                    document.getElementById("selectArk").style.display = "none";
                    document.getElementById("selectRust").style.display = "none";
                    document.getElementById("selectCounter").style.display = "none";
                    document.getElementById("selectHabbo").style.display = "none";
                    document.getElementById("selectArma").style.display = "none";
                    document.getElementById("selectConan").style.display = "none";
                    break;

                case 'Grand Theft Auto':
                    document.getElementById("selectGta").style.display = "block";
                    document.getElementById("selectMinecraft").style.display = "none";
                    document.getElementById("selectDiscord").style.display = "none";
                    document.getElementById("selectTerraria").style.display = "none";
                    document.getElementById("selectDofus").style.display = "none";
                    document.getElementById("selectGarrysMod").style.display = "none";
                    document.getElementById("selectWow").style.display = "none";
                    document.getElementById("selectArk").style.display = "none";
                    document.getElementById("selectRust").style.display = "none";
                    document.getElementById("selectCounter").style.display = "none";
                    document.getElementById("selectHabbo").style.display = "none";
                    document.getElementById("selectArma").style.display = "none";
                    document.getElementById("selectConan").style.display = "none";
                    break;

                case 'World of Warcraft':
                    document.getElementById("selectWow").style.display = "block";
                    document.getElementById("selectMinecraft").style.display = "none";
                    document.getElementById("selectDiscord").style.display = "none";
                    document.getElementById("selectTerraria").style.display = "none";
                    document.getElementById("selectDofus").style.display = "none";
                    document.getElementById("selectGta").style.display = "none";
                    document.getElementById("selectGarrysMod").style.display = "none";
                    document.getElementById("selectArk").style.display = "none";
                    document.getElementById("selectRust").style.display = "none";
                    document.getElementById("selectCounter").style.display = "none";
                    document.getElementById("selectHabbo").style.display = "none";
                    document.getElementById("selectArma").style.display = "none";
                    document.getElementById("selectConan").style.display = "none";
                    break;

                case 'Ark':
                    document.getElementById("selectArk").style.display = "block";
                    document.getElementById("selectMinecraft").style.display = "none";
                    document.getElementById("selectDiscord").style.display = "none";
                    document.getElementById("selectTerraria").style.display = "none";
                    document.getElementById("selectDofus").style.display = "none";
                    document.getElementById("selectGta").style.display = "none";
                    document.getElementById("selectGarrysMod").style.display = "none";
                    document.getElementById("selectWow").style.display = "none";
                    document.getElementById("selectRust").style.display = "none";
                    document.getElementById("selectCounter").style.display = "none";
                    document.getElementById("selectHabbo").style.display = "none";
                    document.getElementById("selectArma").style.display = "none";
                    document.getElementById("selectConan").style.display = "none";
                    break;

                case 'Rust':
                    document.getElementById("selectRust").style.display = "block";
                    document.getElementById("selectMinecraft").style.display = "none";
                    document.getElementById("selectDiscord").style.display = "none";
                    document.getElementById("selectTerraria").style.display = "none";
                    document.getElementById("selectDofus").style.display = "none";
                    document.getElementById("selectGta").style.display = "none";
                    document.getElementById("selectGarrysMod").style.display = "none";
                    document.getElementById("selectWow").style.display = "none";
                    document.getElementById("selectArk").style.display = "none";
                    document.getElementById("selectCounter").style.display = "none";
                    document.getElementById("selectHabbo").style.display = "none";
                    document.getElementById("selectArma").style.display = "none";
                    document.getElementById("selectConan").style.display = "none";
                    break;
                case 'Counter Strike':
                    document.getElementById("selectCounter").style.display = "block";
                    document.getElementById("selectMinecraft").style.display = "none";
                    document.getElementById("selectDiscord").style.display = "none";
                    document.getElementById("selectTerraria").style.display = "none";
                    document.getElementById("selectDofus").style.display = "none";
                    document.getElementById("selectGta").style.display = "none";
                    document.getElementById("selectGarrysMod").style.display = "none";
                    document.getElementById("selectWow").style.display = "none";
                    document.getElementById("selectArk").style.display = "none";
                    document.getElementById("selectRust").style.display = "none";
                    document.getElementById("selectHabbo").style.display = "none";
                    document.getElementById("selectArma").style.display = "none";
                    document.getElementById("selectConan").style.display = "none";
                    break;
                case 'Habbo':
                    document.getElementById("selectHabbo").style.display = "block";
                    document.getElementById("selectMinecraft").style.display = "none";
                    document.getElementById("selectDiscord").style.display = "none";
                    document.getElementById("selectTerraria").style.display = "none";
                    document.getElementById("selectDofus").style.display = "none";
                    document.getElementById("selectGta").style.display = "none";
                    document.getElementById("selectGarrysMod").style.display = "none";
                    document.getElementById("selectWow").style.display = "none";
                    document.getElementById("selectArk").style.display = "none";
                    document.getElementById("selectRust").style.display = "none";
                    document.getElementById("selectCounter").style.display = "none";
                    document.getElementById("selectArma").style.display = "none";
                    document.getElementById("selectConan").style.display = "none";
                    break;
                case 'Arma 3':
                    document.getElementById("selectArma").style.display = "block";
                    document.getElementById("selectMinecraft").style.display = "none";
                    document.getElementById("selectDiscord").style.display = "none";
                    document.getElementById("selectTerraria").style.display = "none";
                    document.getElementById("selectDofus").style.display = "none";
                    document.getElementById("selectGta").style.display = "none";
                    document.getElementById("selectGarrysMod").style.display = "none";
                    document.getElementById("selectWow").style.display = "none";
                    document.getElementById("selectArk").style.display = "none";
                    document.getElementById("selectRust").style.display = "none";
                    document.getElementById("selectCounter").style.display = "none";
                    document.getElementById("selectHabbo").style.display = "none";
                    document.getElementById("selectConan").style.display = "none";
                    break;
                case 'Conan Exiles':
                    document.getElementById("selectConan").style.display = "block";
                    document.getElementById("selectMinecraft").style.display = "none";
                    document.getElementById("selectDiscord").style.display = "none";
                    document.getElementById("selectTerraria").style.display = "none";
                    document.getElementById("selectDofus").style.display = "none";
                    document.getElementById("selectGta").style.display = "none";
                    document.getElementById("selectGarrysMod").style.display = "none";
                    document.getElementById("selectWow").style.display = "none";
                    document.getElementById("selectArk").style.display = "none";
                    document.getElementById("selectRust").style.display = "none";
                    document.getElementById("selectCounter").style.display = "none";
                    document.getElementById("selectHabbo").style.display = "none";
                    document.getElementById("selectArma").style.display = "none";
                    break;
                case 'Forums RP':
                    document.getElementById("selectConan").style.display = "none";
                    document.getElementById("selectMinecraft").style.display = "none";
                    document.getElementById("selectDiscord").style.display = "none";
                    document.getElementById("selectTerraria").style.display = "none";
                    document.getElementById("selectDofus").style.display = "none";
                    document.getElementById("selectGta").style.display = "none";
                    document.getElementById("selectGarrysMod").style.display = "none";
                    document.getElementById("selectWow").style.display = "none";
                    document.getElementById("selectArk").style.display = "none";
                    document.getElementById("selectRust").style.display = "none";
                    document.getElementById("selectCounter").style.display = "none";
                    document.getElementById("selectHabbo").style.display = "none";
                    document.getElementById("selectArma").style.display = "none";
                    break;
                case 'Ogame':
                    document.getElementById("selectConan").style.display = "none";
                    document.getElementById("selectMinecraft").style.display = "none";
                    document.getElementById("selectDiscord").style.display = "none";
                    document.getElementById("selectTerraria").style.display = "none";
                    document.getElementById("selectDofus").style.display = "none";
                    document.getElementById("selectGta").style.display = "none";
                    document.getElementById("selectGarrysMod").style.display = "none";
                    document.getElementById("selectWow").style.display = "none";
                    document.getElementById("selectArk").style.display = "none";
                    document.getElementById("selectRust").style.display = "none";
                    document.getElementById("selectCounter").style.display = "none";
                    document.getElementById("selectHabbo").style.display = "none";
                    document.getElementById("selectArma").style.display = "none";
                    break;
                default:
                    alert("Vous n'avez pas choisi de jeu");
            }
        });
    }




    tinymce.init({
        selector: 'textarea#image-tools',
        images_file_types: 'jpg,png,webp,gif,svg',
        max_height: 200,
        max_width: 400,


        plugins: [
            'advlist autolink lists link image charmap print preview anchor',
            'searchreplace visualblocks code fullscreen',
            'insertdatetime media table paste imagetools wordcount'
        ],
        toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
        content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'

    });


    // Get all "navbar-burger" elements
    let $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

    // Check if there are any navbar burgers
    if ($navbarBurgers.length > 0) {

        // Add a click event on each of them
        $navbarBurgers.forEach(el => {
            el.addEventListener('click', () => {

                // Get the target from the "data-target" attribute
                const target = el.dataset.target;
                const $target = document.getElementById(target);

                // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
                el.classList.toggle('is-active');
                $target.classList.toggle('is-active');

            });
        });
    }


    const anchors = document.querySelectorAll("a > a:not(.navbar-burger)");
    const transition_el = document.querySelector(".transition");

    setTimeout(() => {
        transition_el.classList.remove("is-active");
    }, 500);

    for (let i = 0; i < anchors.length; i++) {
        const anchor = anchors[i];

        anchor.addEventListener("click", (e) => {
            e.preventDefault();
            let target = e.target.href;

            console.log(transition_el);

            transition_el.classList.add("is-active");

            console.log(transition_el);

            setInterval(() => {
                window.location.href = target;
            }, 500);
        });
    }

    let show = document.getElementById("shows");
    if (show) {
        show.addEventListener("click", () => {
            show.style.display = "none";
        });
    }



    let button = document.getElementById('loading');
    if (button) {
        button.addEventListener('click', () => {
            button.addEventListener('click', () => button.classList.add('is-loading'));
        });
    }


    let modal = document.getElementById('myModal');
    let modalClose = document.getElementById('myModalClose');
    if (modalClose) {
        modalClose.addEventListener('click', () => modal.classList.remove('is-active'));
    }


    let modalLogin = document.getElementById('myModalLogin');
    let modalCloseLogin = document.getElementById('myModalCloseLogin');
    if (modalCloseLogin) {
        modalCloseLogin.addEventListener('click', () => modalLogin.classList.remove('is-active'));
    }


    const selectElement = document.getElementById('gold');
    if (selectElement) {
        selectElement.addEventListener('change', (event) => {
            const result = document.getElementById('euro');
            result.innerHTML = `Prix à payer   ${event.target.value}`;
        });
        }

};