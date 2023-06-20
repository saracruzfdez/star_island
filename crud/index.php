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
        BIENVENUE SUR STAR'ISLAND
    </h1>
</div>

<img class="scf-city" src="assets\img\decor3.png" alt="">
<img class="scf-city" src="assets\img\decor2.png" alt="">

<!-- Carousel -->
<div id="carouselExampleIndicators" data-pause="false" class="carousel slide">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="scf-carousel carousel-item active">
            <p class="press">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incclassclassunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris enim ad minimud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris enim ad minimud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>
        </div>

        <div class="scf-carousel carousel-item">
            <div class="scf-diaporama">
                <div class="scf-imagesDiapo">
                    <img class="imageItem" src="assets\img\koke-mayayo-thevisualkiller-I7UyY4EgFSk-unsplash.jpg" alt="">
                    <img class="imageItem" src="assets\img\venti-views-cHRDevKFDBw-unsplash.jpg" alt="">
                    <img class="imageItem" src="assets\img\kenny-eliason-JXg7Yq5b1wE-unsplash.jpg" alt="">    
                </div>
            </div>
        </div>

        <div class="scf-carousel carousel-item">
            <form class="scf-form">
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">STAR'ISLAND</label>
                    <div>
                        <img id="scf-topServer" src="assets\img\logo-long.png" alt="">
                    </div>
                    <div>
                        <img class="etoile" src="assets\img\yellowStar.png" alt="">
                        <img class="etoile" src="assets\img\yellowStar.png" alt="">
                        <img class="etoile" src="assets\img\yellowStar.png" alt="">
                        <img class="etoile" src="assets\img\yellowStar.png" alt="">
                        <img class="etoile" src="assets\img\blackStar.png" alt="">
                    </div>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Ecrivez votre commentaire"></textarea>
                </div>
                <div>
                    <button type="submit" class="btn btn-warning">Submit</button>
                </div>
            </form>
        </div>
    </div>

    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<!-- reseaux NE MARCHE PASSSS !!!! -->
<!-- reseaux NE MARCHE PASSSS !!!! -->
<!-- reseaux NE MARCHE PASSSS !!!! -->
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

<?php require_once 'inc/footerHome.inc.php';          ?>