<?php require_once 'config/function.php';
require_once 'inc/header.inc.php';

?>

<div class="fondEvent">


    <section class="event">

        <div>
            <img src="assets\img\prisonds 1.png" alt="">
        </div>

        <div id="eventContent">
            <div id="titreEvent">
                <h2>
                    TIME REMAINING
                </h2>
            </div>

            <div class="compteur">

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
            </div>

            <div id="titreEvent2">
                <h2>
                🌟 Événement des Joueurs de RP ! 🌟
                </h2>
            </div>
            <p id="content">
            Êtes-vous prêt à plonger dans des aventures épiques, à donner vie à des personnages extraordinaires et à explorer des mondes fantastiques ? Rejoignez-nous pour une expérience de jeu de rôle inoubliable qui repousse les limites de l'imagination. 🎭 Quoi : Grand Événement des Joueurs de RP 🌍 Où : Centre des Conventions d'Étheria ⚔️ Thème : "Légendes Éthérées : Voyage à travers les Royaumes" 🌌 Événements à ne pas manquer 🌌 🏰 La Quête des Royaumes Perdus : Participez...
        </p>
        </div>

    </section>

</div>
<!-- Social media START -->
<?php require_once 'inc/reseaux.inc.php' ?>
<!-- Social media END -->

<?php require_once 'inc/footer.inc.php';          ?>