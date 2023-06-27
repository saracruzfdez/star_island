<?php require_once 'config/function.php';
require_once 'inc/header.inc.php';


// if (isset($_GET['a']) && $_GET['a']=='dis'){

//     unset($_SESSION['user']);
//     $_SESSION['messages']['info'][]='A bientôt !!';
//     header('location:./');
//     exit();
// }
?>

<div class="titre">
    <h1 id="titre">
        L'EQUIPE
    </h1>
</div>

<img class="scf-city" src="assets\img\decor6.png" alt="">

<!-- navBarEquipe -->
<section class="navBarStaff">
    <h3>Tous</h3>
    <div class="red"></div>
    <h3>Admin</h3>
    <div class="red"></div>
    <h3>Modérateur</h3>
    <div class="red"></div>
    <h3>Développeur</h3>
    <div class="red"></div>
    <h3>Mapper</h3>
    <div class="red"></div>
    <h3>Helper</h3>
</section>

<!-- equipe Section -->
<section class="equipe">

    <div class="equipeItem">
        <img src="assets\img\profil1.jpg" alt="">
        <div class="equipeItemReseaux">
            <div>
                <img src="assets\img\logo_twitch.png" alt="">
            </div>
            <div>
                <img src="assets\img\discord.png" alt="">
            </div>
        </div>
    </div>
    <div class="equipeItem">
        <img src="assets\img\profil4.png" alt="">
        <div class="equipeItemReseaux">
            <div>
                <img src="assets\img\logo_twitch.png" alt="">
            </div>
            <div>
                <img src="assets\img\discord.png" alt="">
            </div>
        </div>
    </div>
    <div class="equipeItem">
        <img src="assets\img\profil2.jpg" alt="">
    </div>
    <div class="equipeItem">
        <img src="assets\img\profil3.png" alt="">
    </div>
    <div class="equipeItem">
        <img src="assets\img\profil7.jpg" alt="">
    </div>
    <div class="equipeItem">
        <img src="assets\img\profil5.png" alt="">
    </div>
    <div class="equipeItem">
        <img src="assets\img\profil8.jpg" alt="">
    </div>
    <div class="equipeItem">
        <img src="assets\img\profil9.jpg" alt="">
    </div>
    <div class="equipeItem">
        <img src="assets\img\profil10.jpg" alt="">
    </div>
    <div class="equipeItem">
        <img src="assets\img\profil11.jpg" alt="">
    </div>

</section>


<!-- Social media START -->
<?php require_once 'inc/reseaux.inc.php' ?>
<!-- Social media END -->

<?php require_once 'inc/footer.inc.php';          ?>