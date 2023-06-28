<?php require_once 'config/function.php';
require_once 'inc/header.inc.php';

// if (isset($_GET['a']) && $_GET['a']=='dis'){

//     unset($_SESSION['user']);
//     $_SESSION['messages']['info'][]='A bientôt !!';
//     header('location:./');
//     exit();
// }
?>

<img class="scf-city" src="assets\img\decor8.png" alt="">

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

        <div id="titreEvent">
            <h2>
                Titre
            </h2>
        </div>
        <p id="content">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt et deleniti porro. Quisquam dolores facere itaque in nobis, quod optio, est reiciendis incidunt non veritatis tenetur nisi odit! Quas, deleniti. Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt et dtur nisi odit! Quas, deleniti.Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt et deleniti porro. Quisquam dolores facere itaque in nobis, quod optio, est reiciendis incidunt non veritatis tenetur nisi odit! Quas, deleniti.
        </p>
    </div>

</section>

<!-- Social media START -->
<?php require_once 'inc/reseaux.inc.php' ?>
<!-- Social media END -->

<?php require_once 'inc/footer.inc.php';          ?>