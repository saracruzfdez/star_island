<?php require_once 'config/function.php';
require_once 'inc/header.inc.php';

$comments = execute("SELECT comment.*, media.name_media FROM `comment` INNER JOIN `media` ON comment.id_media = media.id_media")->fetchAll(PDO::FETCH_ASSOC);

function isActivated($comment)
{
    if ($comment['activated'] == 0)
        return FALSE;
    else
        return TRUE;
}

$filteredComments = array_filter($comments, "isActivated");

$content = execute("SELECT description_content FROM `content` WHERE title_content = 'Présentation accueil'")->fetch(PDO::FETCH_ASSOC);

?>

<div class="fond">

    <div class="titre">
        <h1 id="titre">
            BIENVENUE SUR STAR'ISLAND
        </h1>
    </div>

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
                    <?= $content['description_content'] ?>
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
    </div>
</div>
<!-- Carousel End -->

<div class="fond2">

    <!-- Social media START -->
    <?php require_once 'inc/reseaux.inc.php' ?>
    <!-- Social media END -->

    <!-- Comment -->
    <section class="comments">


        <?php foreach ($filteredComments as $comment) { ?>


            <div class="commentItem">
                <div>
                    <img class="commentItem__image" src="<?= BASE_PATH . 'assets/img/' . $comment['name_media'] ?>" alt="">
                </div>
                <div>
                    <div class="commentItem__rating ratingFront">
                        <img class="ratingFront__etoile" src="assets\img\yellowStar.png" alt="">
                        <img class="ratingFront__etoile" src="assets\img\yellowStar.png" alt="">
                        <img class="ratingFront__etoile" src="assets\img\yellowStar.png" alt="">
                        <img class="ratingFront__etoile" src="assets\img\blackStar.png" alt="">
                        <img class="ratingFront__etoile" src="assets\img\blackStar.png" alt="">
                    </div>
                    <div class="commentItem__text">
                        <p><?= $comment['comment_text'] ?></p>
                    </div>
                </div>
            </div>


        <?php } ?>
    </section>
    <!-- Comment END -->

    <!-- Form -->
    <section class="form">
        <form action="<?= BASE_PATH . 'back/comment.php'; ?>" method="post" class="scf-form">

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

                <input name="nickname_comment" id="nickname_comment
                " placeholder="Ecrivez votre nickname" type="text" class="form-control">

                <input name="comment_text" id="text" placeholder="Ecrivez votre commentaire" type="text" class="form-control mt-4">
            </div>

            <div>
                <button type="submit" class="btn btn-warning">Publier</button>
            </div>
        </form>
    </section>
</div>

<!-- Form END -->

<!-- <?php require_once 'inc/footer.inc.php';          ?> -->