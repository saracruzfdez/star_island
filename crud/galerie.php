<?php require_once 'config/function.php';
require_once 'inc/header.inc.php';

?>

<div class="fondGalerie">

    <div class="titre">
        <h1 id="titre">
            GALERIE
        </h1>
    </div>

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
</div>

<!-- Social media START -->
<?php require_once 'inc/reseaux.inc.php' ?>
<!-- Social media END -->

<?php require_once 'inc/footer.inc.php';          ?>