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
        DEVENIR VIP
    </h1>
</div>

<img class="scf-city" src="assets\img\decor5.png" alt="">

<!-- VIP Section -->
<div class="vip">
    <div class="vip1">
        <p class="scf-textVip1">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis nesciunt excepturi quae non consectetur voluptas officia, facilis illum tempore odio rem obcaecati quo labore veritatis magnam voluptates maxime accusantium qui? Quis nesciunt excepturi quae non consectetur voluptas officia, facilis illum tempore odio rem obcaecati quo labore veritatis magnam voluptates maxime accusantium qui? Quis nesm obcaecati quo labore veritatis magnam voluptates maxime accusantium qui? Quis nesciunt excepturilabore veritatis magnam voluptates maxime accusantium qui?
        </p>
        <img class="pl-4 scf-imgVip1" src="assets\img\Group 6.png" alt="">
    </div>

    <div class="vip2">
        <img class="pr-4 scf-imgVip2" src="assets\img\Group 5.png" alt="">
        <p class="scf-textVip2">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis nesciunt excepturi quae non consectetur voluptas officia, facilis illum tempore odio rem obcaecati quo labore veritatis magnam voluptates maxime accusantium qui? Quis nesciunt excepturi quae non consectetur voluptas officia, facilis illum tqui? Quis nesciunt excepturi quae non consectetur voluptas officia, facilis illum tempore odio rem obcaecati quo labore veritatis magnam voluptates maxime accusantium qui?
        </p>
    </div>
</div>

<!-- Social media START -->
<?php require_once 'inc/reseaux.inc.php' ?>
<!-- Social media END -->

<?php require_once 'inc/footer.inc.php';          ?>