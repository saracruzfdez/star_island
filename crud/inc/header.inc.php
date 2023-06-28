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
                            <a class="nav-link text-white" href="#">DEVENIR VIP</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">SERVEUR</a>
                        </li>

                        <!--
                        <?php if (admin()) :           ?>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">ADMIN</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="<?= BASE_PATH . 'back/userList.php'; ?>">Gestion utilisateur</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="<?= BASE_PATH . 'back/'; ?>">Accès Back-office</a>
                                </div>
                            </li>
                        <?php endif;
                        ?>
                                  -->

                    </ul>

                    <!-- <?php if (connect()) :           ?>
                        <a href="<?= BASE_PATH . '?a=dis'; ?>" class="btn btn-primary">Déconnexion</a>
                    <?php else :           ?>
                        <a href="<?= BASE_PATH . 'security/login.php'; ?>" class="btn btn-primary">Connexion</a>
                        <a href="<?= BASE_PATH . 'security/register.php'; ?>" class="btn btn-success">Inscription</a>
                    <?php endif;        ?> -->

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