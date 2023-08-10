<!doctype html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>STARISLAND</title>
    <link rel="stylesheet" href="assets\bootstrap\scss\bootstrap.css">

    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous"> -->

    <link rel="stylesheet" type="text/css" href="assets/slick-1.8.1/slick/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="assets/slick-1.8.1/slick/slick.css">
    <link rel="stylesheet" href="assets\css\commun.css">

    <link rel="stylesheet" href="assets\css\connexion.css">
    <link rel="stylesheet" href="assets\css\rating-component.css">
    <link rel="stylesheet" href="assets\css\header.css">
    <link rel="stylesheet" href="assets\css\footer.css">
    <link rel="stylesheet" href="assets\css\reseaux.css">
    <link rel="stylesheet" href="assets\css\galerie.css">
    <link rel="stylesheet" href="assets\css\vip.css">
    <link rel="stylesheet" href="assets\css\equipe.css">
    <link rel="stylesheet" href="assets\css\event.css">
    <link rel="stylesheet" href="assets\css\compteur.css">
</head>

<body class="bg-dark">

    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark p-1">

            <a class="navbar-brand p-0" href=""><img id="logo" src="assets\img\starisland.png"></a>
            <button class="navbar-toggler test" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarColor01">
                <ul id="ul-nav" class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="<?= BASE_PATH; ?>">
                            <img id="home" src="assets\img\Vector.png" alt="">
                            <!-- <span class="visually-hidden">(current)</span> -->
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="crud\galerie.php">GALLERIE</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">VIP</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="<?= BASE_PATH . 'equipe.php'; ?>">SERVEUR</a>
                    </li>

                    
                    <?php if (empty($_SESSION)) { ?>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="<?php BASE_PATH . 'connexion.php'; ?>"><img style="height : 20px" ; src="assets\img\images.svg"></a>
                        </li>
                    <?php } ?>
                    <?php if (isset($_SESSION) && (!empty($_SESSION))) { ?>
                        <li class="nav-item">
                            <a class="nav-link text-red" href="<?= BASE_PATH . 'back/media_type.php'; ?>">GESTION</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-red" href="<?= BASE_PATH . 'deconnexion.php'; ?>">DECONNEXION</a>
                        </li>
                    <?php } ?>
                </ul>

                <div id="tutoEvent">
                    <a class="nav-link text-white tutoEvent align-items-center" id="nav-link" href="#">
                        <img class="m-1" id="home" src="assets\img\tuto.png" alt="">
                        <p class="m-1">TUTORIELS</p>
                    </a>
                    <a class="nav-link text-white tutoEvent" href="#">
                        <img class="m-1" id="home" src="assets\img\event.png" alt="">
                        <p class="m-1">EVENT</p>
                    </a>
                </div>
            </div>
        </nav>
    </header>



    <main>
        <!-- <?php if (isset($_SESSION['messages']) && !empty($_SESSION['messages'])) :           ?>
            <?php foreach ($_SESSION['messages'] as $type => $messages) :
            ?>
                <?php foreach ($messages as $key => $message) :           ?>
                    <div class="alert alert-<?= $type; ?> text-center w-50 mx-auto">
                        <p><?= $message; ?></p>
                    </div>

        <?php unset($_SESSION['messages'][$type][$key]);
                        endforeach;
                    endforeach;
                endif;           ?> -->