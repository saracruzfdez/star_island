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
        GALERIE
    </h1>
</div>

<img class="scf-city" src="assets\img\decor4.png" alt="">

<!-- Carousel -->
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="scf-carousel carousel-item active">
            <img class="scf-galerieItemImage" src="assets\img\alvaro-palacios-crGx2KBYqd0-unsplash.jpg" alt="First slide">
        </div>
        <div class="scf-carousel carousel-item">
            <img class="scf-galerieItemImage" src="assets\img\ziphaus-07pNMbb77Yc-unsplash.jpg" alt="First slide">
        </div>
        <div class="scf-carousel carousel-item">
            <img class="scf-galerieItemImage" src="assets\img\venti-views-cHRDevKFDBw-unsplash.jpg" alt="First slide">
        </div>
        <div class="scf-carousel carousel-item">
            <img class="scf-galerieItemImage" src="assets\img\roberto-nickson-wdCkqK1oRIc-unsplash.jpg" alt="First slide">
        </div>
        <div class="scf-carousel carousel-item">
            <img class="scf-galerieItemImage" src="assets\img\nathan-dumlao-xxzeV1aiSY8-unsplash.jpg" alt="First slide">
        </div>
        <div class="scf-carousel carousel-item">
            <img class="scf-galerieItemImage" src="assets\img\lala-miklos-qxstzQ__HMk-unsplash.jpg" alt="First slide">
        </div>
        <div class="scf-carousel carousel-item">
            <img class="scf-galerieItemImage" src="assets\img\koke-mayayo-thevisualkiller-I7UyY4EgFSk-unsplash.jpg" alt="First slide">
        </div>
        <div class="scf-carousel carousel-item">
            <img class="scf-galerieItemImage" src="assets\img\kenny-eliason-JXg7Yq5b1wE-unsplash.jpg" alt="First slide">
        </div>
        <div class="scf-carousel carousel-item">
            <img class="scf-galerieItemImage" src="assets\img\jack-finnigan-aEkk0KxvPpg-unsplash.jpg" alt="First slide">
        </div>
        <div class="scf-carousel carousel-item">
            <img class="scf-galerieItemImage" src="assets\img\daniel-schludi-23Jlm7eBsxA-unsplash.jpg" alt="First slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<!-- Carousel End -->

<!-- reseaux NE MARCHE PASSSS !!!! -->
<!-- reseaux NE MARCHE PASSSS !!!! -->
<!-- reseaux NE MARCHE PASSSS !!!! -->

<!-- Social media START -->
<div class="container_reseaux" id="container_reseaux">
    <div class="reseaux">

        <a href=""><img src="assets\img\logo_Instagram.png" alt=""></a>

        <a href="">
            <img src="assets\img\logo_facebook.png" alt="">
        </a>

        <a href="">
            <img src="assets\img\Logo_tiktok.png" alt="">
        </a>

        <a href="">
            <img id="discordLogo" src="assets\img\logo_discord.png" alt="">
        </a>

        <a href="">
            <img src="assets\img\logo_twitch.png" alt="">
        </a>

        <a href="">
            <img src="assets\img\logo_twitter.png" alt="">
        </a>

        <a href="">
            <img src="assets\img\logo_youtube.png" alt="">
        </a>
    </div>
</div>

<div class="logoDiscord2">
    <img id="logoDiscord2" src="assets\img\logo_discord.png" alt="">
</div>
<!-- Social media END -->

<?php require_once 'inc/footer.inc.php';          ?>