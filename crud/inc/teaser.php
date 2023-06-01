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

    <img id="teaser_image" src="..\assets\img\Perso2-removebg-preview.png" alt="">

    <div class="box-rebours">
        <div class="box_jour">
            <div id="jour">00</div>
            <span id="jour_label">Jours</span>
        </div>
      
            <div id="separator">:</div>
          
     
        <div class="box_heure">
            <div id="heure">00</div>
            <span id="heure_label">Heures</span>
        </div>
        <div id="separator">:</div>
        <div class="box_minute">
            <div id="minute">00</div>
            <span id="minute_label">Minutes</span>
        </div>
        <div id="separator">:</div>
        <div class="box_seconde">
            <div id="seconde">00</div>
            <span id="seconde_label">Secondes</span>
        </div>
    </div>


<div class="reseaux">
    <img src="" alt="">
    <img src="" alt="">
    <img src="" alt="">
    <img src="" alt="">
    <img src="" alt="">
    <img src="" alt="">
    <img src="" alt="">
</div>


    <script type="text/javascript">
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
    </script>

</body>

</html>