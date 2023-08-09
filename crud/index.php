<?php require_once 'config/function.php';
require_once 'inc/header.inc.php';

// if (isset($_GET['a']) && $_GET['a']=='dis'){

//     unset($_SESSION['user']);
//     $_SESSION['messages']['info'][]='A bientôt !!';
//     header('location:./');
//     exit();
// }
?>

<div class="fond">

    <div class="titre">
        <h1 id="titre">
            BIENVENUE SUR STAR'ISLAND
        </h1>
    </div>

    <!-- <img class="scf-city" src="assets\img\decor3.png" alt="">
    <img class="scf-city" src="assets\img\decor2.png" alt=""> -->

    <!-- Carousel -->
    <div id="carouselExampleIndicators" data-pause="true" class="carousel slide">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="scf-carousel carousel-item active">
                <p class="press">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmoris enim ad minim veniam, quis nostrud exercitation u exeris nisi ut aliquip ex ea com dolor sit amet, consectetur adipiscing elit, sed do eiusmoris enim ad minim veniam, quis minim veniam, quis consectetur adipiscingexercitation u exeris nisi ut aliquip exea commodo onsequscing consectetur adipiscingexercitation u exeris nisi ut aliquip exea commodo onsequscing exercitation u exeri consectetur adipiscingexercitation u exeris nisi ut aliquip ex ea commodo onsequscing exercitation u exeris nisi ut aliquip ex ea commodo consequat.
                </p>
            </div>

            <div class="scf-carousel carousel-item">
                <!-- slick carousel -->
                <div class="w-50 mx-auto" style=>
                    <div class="multiple-items ">
                        <div class="" style="height: 300px; width: 750px;">
                            <img class="d-block h-75" src="assets\img\koke-mayayo-thevisualkiller-I7UyY4EgFSk-unsplash.jpg" alt="First slide">
                        </div>
                        <div class="" style="height: 300px; width: 750px;">
                            <img class="d-block h-75" src="assets\img\kenny-eliason-JXg7Yq5b1wE-unsplash.jpg" alt="Third slide">
                        </div>
                        <div class="" style="height: 300px; width: 750px;">
                            <img class="d-block h-75" src="assets\img\jack-finnigan-aEkk0KxvPpg-unsplash.jpg">
                        </div>
                        <div class="" style="height: 300px; width: 750px;">
                            <img class="d-block h-75" src="assets\img\lala-miklos-qxstzQ__HMk-unsplash.jpg">
                        </div>
                        <div class="" style="height: 300px; width: 750px;">
                            <img class="d-block h-75" src="assets\img\nathan-dumlao-xxzeV1aiSY8-unsplash.jpg">
                        </div>
                        <div class="" style="height: 300px; width: 750px;">
                            <img class="d-block h-75" src="assets\img\roberto-nickson-wdCkqK1oRIc-unsplash.jpg" alt="Third slide">
                        </div>
                    </div>
                </div>
                <!-- Slick carousel END -->
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
                <button type="submit" class="btn btn-warning">Publier</button>
            </div>
        </form>
    </div>
</div>

<!-- Carousel End -->

<div class="fond2">

    <!-- Social media START -->
    <?php require_once 'inc/reseaux.inc.php' ?>
    <!-- Social media END -->

    <!-- Avatars -->
    <section class="avatars">
        <div class="avatarItem" id="avatarItem1">
            <img class="avatarItemImage" id="avatarItemImage1" src="assets\img\portrait1.jpg" alt="">
            <div id="avatarContent1">
                <div>
                    <img class="etoile" src="assets\img\yellowStar.png" alt="">
                    <img class="etoile" src="assets\img\yellowStar.png" alt="">
                    <img class="etoile" src="assets\img\yellowStar.png" alt="">
                    <img class="etoile" src="assets\img\blackStar.png" alt="">
                    <img class="etoile" src="assets\img\blackStar.png" alt="">
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
        </div>
        <div class="avatarItem" id="avatarItem4">
            <img class="avatarItemImage" id="avatarItemImage4" src="assets\img\portrait4.jpg" alt="">
            <div id="avatarContent4">
                <div>
                    <img class="etoile" src="assets\img\yellowStar.png" alt="">
                    <img class="etoile" src="assets\img\yellowStar.png" alt="">
                    <img class="etoile" src="assets\img\yellowStar.png" alt="">
                    <img class="etoile" src="assets\img\yellowStar.png" alt="">
                    <img class="etoile" src="assets\img\blackStar.png" alt="">
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
        </div>
        <div class="avatarItem" id="avatarItem3">
            <img class="avatarItemImage" id="avatarItemImage3" src="assets\img\portrait3.jpg" alt="">
            <div id="avatarContent3">
                <div>
                    <img class="etoile" src="assets\img\yellowStar.png" alt="">
                    <img class="etoile" src="assets\img\yellowStar.png" alt="">
                    <img class="etoile" src="assets\img\yellowStar.png" alt="">
                    <img class="etoile" src="assets\img\yellowStar.png" alt="">
                    <img class="etoile" src="assets\img\yellowStar.png" alt="">
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
        </div>
        <div class="avatarItem" id="avatarItem2">
            <img class="avatarItemImage" id="avatarItemImage2" src="assets\img\portrait2.jpg" alt="">
            <div id="avatarContent2">
                <div>
                    <img class="etoile" src="assets\img\yellowStar.png" alt="">
                    <img class="etoile" src="assets\img\yellowStar.png" alt="">
                    <img class="etoile" src="assets\img\yellowStar.png" alt="">
                    <img class="etoile" src="assets\img\yellowStar.png" alt="">
                    <img class="etoile" src="assets\img\blackStar.png" alt="">
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
        </div>


    </section>
    <!-- Avatars END -->

    <!-- Form -->
    <section class="form">
        <form action="<?=  BASE_PATH.'back/comment.php'; ?>" method="post" class="scf-form">

            <div class="form-group">
                <label for="text">VOTRE AVIS NOUS INTERESSE !</label>
                
                <div class="rating">
                    <div class="rating__star"><span class="rating__starOff">&#x2606;</span><span class="rating__starOn">&#x2605;</span></div>
                    <div class="rating__star"><span class="rating__starOff">&#x2606;</span><span class="rating__starOn">&#x2605;</span></div>
                    <div class="rating__star"><span class="rating__starOff">&#x2606;</span><span class="rating__starOn">&#x2605;</span></div>
                    <div class="rating__star"><span class="rating__starOff">&#x2606;</span><span class="rating__starOn">&#x2605;</span></div>
                    <div class="rating__star"><span class="rating__starOff">&#x2606;</span><span class="rating__starOn">&#x2605;</span></div>
                    <input name="rating_comment" type="hidden" class="rating__input" value=0>
                </div>

                <input name="nickname_comment" id="nickname" placeholder="Ecrivez votre nickname" type="text" class="form-control">

                <input name="comment_text" id="text" placeholder="Ecrivez votre commentaire" type="text" class="form-control">
            </div>

            <div>
                <button type="submit" class="btn btn-warning">Publier</button>
            </div>
        </form>
    </section>
</div>

<!-- Form END -->

<!-- <?php require_once 'inc/footer.inc.php';          ?> -->