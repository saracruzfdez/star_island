<?php require_once 'config/function.php';
require_once 'inc/header.inc.php';


if (!empty($_POST)) {

    $error = array();

    if (empty($_POST['nickname'])) {

        $error['nickname'] = 'Pseudo obligatoire';
    }

    if (empty($_POST['password_user'])) {

        $error['password_user'] = 'Password obligatoire';
    }

    if (empty($error)) {

        $result = execute("SELECT * FROM user");

            $user = $result->fetch(PDO::FETCH_ASSOC);

            var_dump($user);
            die();

            $_SESSION['user'] = $user;
            header('location:./');
            exit();
        }
    }


?>

<div class="fondStaff">
    <div class="titre">
        <h1 id="titre">
            CONNEXION
        </h1>
    </div>

    <div>
        <!-- Formulaire : -->
        <form class="w-50 mx-auto scf-connexion" ; method="post" action="">
            <div class="form-group">
                <label for="pseudo" class="form-label"></label>
                <input name="nickname" class="form-control" id="nickname" type="text" placeholder="Ecrivez votre nickname">
                <small class="text-danger"><?= $error['nickname'] ?? ''; ?></small>

            </div>
            <div class="form-group">
                <label for="password" class="form-label"></label>
                <input name="password_user" class="form-control" id="password_user" type="password_user" placeholder="Ecrivez votre mot de passe">
                <small class="text-danger"><?= $error['password_user'] ?? ''; ?></small>
            </div>
            <button type="submit" class="btn btn-warning mt-3 justify-content-center">Envoyer</button>
        </form>
    </div>
</div>

<!-- <?php require_once 'inc/footer.inc.php';          ?> -->