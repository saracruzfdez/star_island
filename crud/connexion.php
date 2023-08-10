<?php require_once 'config/function.php';
require_once 'inc/header.inc.php';


if (!empty($_POST)) {

    if ((isset($_GET['action']) && $_GET['action']) == "register") { // Condition de traitement de la connexion grace à $_GET['register'] :

        //var_dump($_FILES);
        //die();
        $error = array();

        if (empty($_POST['pseudo'])) {

            $error['pseudo'] = 'Pseudo obligatoire';
        }

        if (empty($_POST['password'])) {

            $error['password'] = 'Password obligatoire';
        }

        if (empty($_FILES['picture_profil']['name'])) {

            $error['picture_profil'] = 'Photo de profil obligatoire';
        }

        if (empty($error)) {

            $mdp = password_hash($_POST['password'], PASSWORD_DEFAULT);

            $result = execute("SELECT * FROM user WHERE pseudo=:pseudo", array(':pseudo' => $_POST['pseudo']));

            // var_dump($result->fetch(PDO::FETCH_ASSOC));
            // die();

            if ($result->rowCount() == 0) {

                $picture = date_format(new DateTime(), 'Y_m_d_i_s') . $_FILES['picture_profil']['name'];
                // var_dump($picture);die();

                if (!file_exists('upload/')) {

                    mkdir('upload', 777);
                }

                copy($_FILES['picture_profil']['tmp_name'], 'upload/' . $picture);
                //unlink('upload/nomimage.png');

                $result = execute("INSERT INTO user (pseudo, picture_profil, password) VALUES (:pseudo, :picture_profil, :password)", array(

                    ':pseudo' => $_POST['pseudo'],
                    ':picture_profil' => 'upload/' . $picture,
                    ':password' => $mdp

                ));

                //Une fois l'inscription faite, on redirige vers la page de login :
                header('location:./authentication.php?action=login');
                exit();
            } else {

                $error['pseudo_existant'] = "Votre pseudo est déjà utilisé";
            }
        } // Fin empty $error
    } // Fin condition de traitement de la connexion grace à $_GET['register']

    // condition de traitement de la connexion grace à $_GET['action'] :
    if ((isset($_GET['action']) && $_GET['action']) == "login") {
        $result = execute("SELECT * FROM user WHERE pseudo=:pseudo", array(':pseudo' => $_POST['pseudo']));

        if ($result->rowCount() == 1) {
            $user = $result->fetch(PDO::FETCH_ASSOC);
            // var_dump($user);
            // die();

            if (password_verify($_POST['password'], $user['password'])) {

                $_SESSION['user'] = $user;
                header('location:./');
                exit();
            } else {

                $error['password'] = 'erreur sur le mot de passe';
            }
        } else {
            $error['pseudo_pas_existant'] = "Aucun compte existe à ce nom";
        }
    }
} // Fin !empty $_POST

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
                <input name="pseudo" class="form-control" id="pseudo" type="text" placeholder="Ecrivez votre pseudo">
            </div>
            <div class="form-group">
                <label for="password" class="form-label"></label>
                <input name="password" class="form-control" id="password" type="password" placeholder="Ecrivez votre mot de passe">
            </div>
            <button type="submit" class="btn btn-warning mt-3 justify-content-center">Envoyer</button>
        </form>
    </div>
</div>


<!-- <?php require_once 'inc/footer.inc.php';          ?> -->