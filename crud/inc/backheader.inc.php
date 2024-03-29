<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Star Island ADMIN</title>

    <!-- Custom fonts for this template-->
    <link href="../assets/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <!-- Custom styles for this template-->
    <link href="../assets/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="../assets/css/sb-admin-2.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/comment.css">



</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav  text-white sidebar sidebar-dark accordion" id="accordionSidebar" style="
    background-color: #000000;">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= BASE_PATH . 'back/'; ?>">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Star Island ADMIN</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->


            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                gestion
            </div>
            <li class="nav-item">
                <a class="nav-link collapsed" href=" <?= BASE_PATH . 'back/media_type.php' ?>">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Gestion type média</span>
                </a>
            </li>

            <hr class="sidebar-divider d-none d-md-block">

            <li class="nav-item">
                <a class="nav-link collapsed" href=" <?= BASE_PATH . 'back/pages.php' ?>">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Gestion pages</span>
                </a>
            </li>


            <hr class="sidebar-divider">
            <li class="nav-item">
                <a class="nav-link collapsed" href=" <?= BASE_PATH . 'back/content.php' ?>">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Gestion contenu</span>
                </a>
            </li>


            <hr class="sidebar-divider">
            <li class="nav-item">
                <a class="nav-link collapsed" href=" <?= BASE_PATH . 'back/media.php' ?>">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Gestion media</span>
                </a>
            </li>


            <hr class="sidebar-divider">
            <li class="nav-item">
                <a class="nav-link collapsed" href=" <?= BASE_PATH . 'back/comment.php' ?>">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Gestion commentaires</span>
                </a>
            </li>

            <hr class="sidebar-divider">
            <li class="nav-item">
                <a class="nav-link collapsed" href=" <?= BASE_PATH . 'back/events.php' ?>">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Gestion d'events</span>
                </a>
            </li>

            <hr class="sidebar-divider">
            <li class="nav-item">
                <a class="nav-link collapsed" href=" <?= BASE_PATH . 'back/team.php' ?>">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Gestion de la team</span>
                </a>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light  topbar mb-4 static-top shadow" style="
    background-color: #000000;">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link " href="<?= BASE_PATH; ?>" role="button">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Voir le site</span>
                                <img class="img-profile rounded-circle" src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MjB8fHByb2ZpbGV8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=600&q=60">
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- End of Topbar -->
                <div class="container col-3 ">

                    <div class="alert  text-center">

                    </div>


                </div>


                <div class="container-fluid">

                    <?php if (isset($_SESSION['messages'])) :  ?>

                        <?php foreach ($_SESSION['messages'] as $type => $messages) : ?>
                            <?php foreach ($messages as $message) : ?>
                                <div class=" w-25 rounded  text-center ml-5  alert alert-<?= $type ?>">
                                    <h3><?= $message ?></h3>
                                </div>
                            <?php endforeach; ?>
                        <?php endforeach; ?>
                        <?php unset($_SESSION['messages']); ?>
                    <?php endif; ?>
                    <!-- Page Heading -->