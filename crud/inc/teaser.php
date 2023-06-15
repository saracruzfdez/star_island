<!doctype html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>STARISLAND</title>
    <link rel="stylesheet" href="..\assets\css\teaser.css">
</head>

<body>

    <!-- logo -->
    <div>
        <img id="logoStarIsland" src="..\assets\img\starisland.png" alt="">
    </div>

    <!-- perso background -->
    <div class="parent">
        <img id="teaser_image" src="..\assets\img\Perso2-removebg-preview.png" alt="">
    </div>

    <!-- compteur -->
    <div class="box-rebours">
        <div class="box_jour">
            <div id="jour">00</div>
            <span id="jour_label"></span>
        </div>

        <div id="separator">:</div>

        <div class="box_heure">
            <div id="heure">00</div>
            <span id="heure_label"></span>
        </div>

        <div id="separator">:</div>

        <div class="box_minute">
            <div id="minute">00</div>
            <span id="minute_label"></span>
        </div>

        <div id="separator">:</div>

        <div class="box_seconde">
            <div id="seconde">00</div>
            <span id="seconde_label"></span>
        </div>
    </div>

    <!-- texte -->
    <div id="texte">
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur augue est, interdum vitae purus sed, tincidunt placerat mi. Aliquam dui ex, iaculis vel mi in, iaculis iaculis dui. In posuere metus eleifend risus euismod, iaculis pulvinar urna scelerisque. Nullam suscipit quam sit amet arcu sagittis fermentum. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
        </p>
    </div>

    <!-- reseaux -->
    <div class="container_reseaux" id="container_reseaux">
        <div class="reseaux">

            <a href=""><img src="..\assets\img\logo_Instagram.png" alt=""></a>

            <a href="">
                <img src="..\assets\img\logo_facebook.png" alt="">
            </a>

            <a href="">
                <img src="..\assets\img\Logo_tiktok.png" alt="">
            </a>

            <a href="">
                <img id="discordLogo" src="..\assets\img\logo_discord.png" alt="">
            </a>

            <a href="">
                <img src="..\assets\img\logo_twitch.png" alt="">
            </a>

            <a href="">
                <img src="..\assets\img\logo_twitter.png" alt="">
            </a>

            <a href="">
                <img src="..\assets\img\logo_youtube.png" alt="">
            </a>
        </div>
    </div>

    <div class="logoDiscord2">
        <img id="logoDiscord2" src="..\assets\img\logo_discord.png" alt="">
    </div>

    <div id="degrade">

    </div>

    </div>

    <!-- script -->
    <script type="text/javascript">
        /* compte rebours */
        function reboursF() {
            let rebours = document.getElementById("rebours"),
                jour = document.getElementById("jour"),
                jour_label = document.getElementById("jour_label"),
                heure = document.getElementById("heure"),
                heure_label = document.getElementById("heure_label"),
                minute = document.getElementById("minute"),
                minute_label = document.getElementById("minute_label"),
                seconde = document.getElementById("seconde"),
                seconde_label = document.getElementById("seconde_label"),
                maintenant = new Date(),
                finannee = new Date('June 30, 2023 23:59:59');

            let total_secondes = (finannee - maintenant) / 1000;

            if (total_secondes > 0) {
                let nb_jours = Math.floor(total_secondes / (60 * 60 * 24));
                let nb_heures = Math.floor((total_secondes - (nb_jours * 60 * 60 * 24)) / (60 * 60));
                let nb_minutes = Math.floor((total_secondes - ((nb_jours * 60 * 60 * 24 + nb_heures * 60 * 60))) / 60);
                let nb_secondes = Math.floor(total_secondes - ((nb_jours * 60 * 60 * 24 + nb_heures * 60 * 60 + nb_minutes * 60)));

                jour.textContent = caractere(nb_jours);
                heure.textContent = caractere(nb_heures);
                minute.textContent = caractere(nb_minutes);
                seconde.textContent = caractere(nb_secondes);

                jour_label.textContent = genre(nb_jours, 'jour');
                heure_label.textContent = genre(nb_heures, 'heure');
                minute_label.textContent = genre(nb_minutes, 'minute');
                seconde_label.textContent = genre(nb_secondes, 'seconde');

            }

            let minuteur = setTimeout("reboursF();", 1000);
        }

        function genre(nb, libelle) {
            return (nb > 1) ? libelle + 's' : libelle;
        }

        function caractere(nb) {
            return (nb < 10) ? '0' + nb : nb;
        }

        reboursF();

        /* evenement on click sur logo 2 le faire disparaitre et faire aparaitre les logos reseaux sociaux */
        function visibility() {
            let logoDiscord2 = document.getElementById("logoDiscord2")

            logoDiscord2.addEventListener('click', function() {
                let containerReseaux = document.getElementById("container_reseaux")

                if (containerReseaux.style.visibility == "hidden") {
                    containerReseaux.style.visibility = "visible"
                } else {
                    containerReseaux.style.visibility = "hidden"
                };
            })
        }

        visibility()
    </script>

</body>

</html>