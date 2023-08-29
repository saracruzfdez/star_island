<?php require_once 'config/function.php';
require_once 'inc/header.inc.php';

$contentVip1 = execute("SELECT description_content FROM `content` WHERE title_content = 'Présentation VIP'")->fetch(PDO::FETCH_ASSOC);

$contentVip2 = execute("SELECT description_content FROM `content` WHERE title_content = 'Présentation VIP 2'")->fetch(PDO::FETCH_ASSOC);

?>
<div class="fond">
    <div class="titre">
        <h1 id="titre">
            DEVENIR VIP
        </h1>
    </div>
    <!-- VIP Section -->
    <div class="vip">
        <div class="vip1">
            <p class="scf-textVip1">
            <?= $contentVip1['description_content'] ?>
            </p>
            <img class="pl-4 scf-imgVip1" src="assets\img\Group 6.png" alt="">
        </div>
    </div>

    <div class="vip">
        <div class="vip2">
            <img class="pr-4 scf-imgVip2" src="assets\img\Group 5.png" alt="">
            <p class="scf-textVip2">
            <?= $contentVip2['description_content'] ?>
            </p>
        </div>
    </div>
</div>

<!-- Social media START -->
<?php require_once 'inc/reseaux.inc.php' ?>
<!-- Social media END -->

<?php require_once 'inc/footer.inc.php';          ?>