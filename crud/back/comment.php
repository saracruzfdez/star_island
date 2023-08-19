<?php require_once '../config/function.php';


if (!empty($_POST)) {

    if (empty($_POST['id_comment'])) {

        if (empty($_POST['rating_comment']) | empty($_POST['comment_text']) | empty($_POST['nickname_comment'])) {
            $error = 'Ce champs est obligatoire';
        }

        // liste des avatars
        $medias_images_avatar = execute("SELECT * FROM media")->fetchAll(PDO::FETCH_ASSOC);

        $randomizeAvatar = rand(0, count($medias_images_avatar) - 1);

        execute("INSERT INTO comment (rating_comment, comment_text, publish_date_comment, nickname_comment, activated, id_media) VALUES (:rating_comment, :comment_text, :publish_date_comment, :nickname_comment, :activated, :id_media)", array(

            ':rating_comment' => $_POST['rating_comment'],
            ':comment_text' => $_POST['comment_text'],
            ':publish_date_comment' => date("Y-m-d H:i:s"),
            ':nickname_comment' => $_POST['nickname_comment'],
            ':activated' => 0,
            ':id_media' => $medias_images_avatar[$randomizeAvatar]['id_media'],

        ),);

        $_SESSION['messages']['success'][] = 'Comment ajouté';
        header('Location: ' . BASE_PATH);
        exit();
    } // fin soumission en insert

    else {

        if (empty($_POST['rating_comment']) | empty($_POST['comment_text']) | empty($_POST['publish_date_comment']) | empty($_POST['nickname_comment']) | empty($_POST['activated']) | empty($_POST['id_media'])) {
            $error = 'Ce champs est obligatoire';
        }

        execute("UPDATE comment SET rating_comment=:rating, comment_text=:text, publish_date_comment=:date, nickname_comment=:nickname, activated=:status, id_media=:option WHERE id_comment=:id", array(

            ':id' => $_POST['id_comment'],
            ':rating' => $_POST['rating_comment'],
            ':text' => $_POST['comment_text'],
            ':date' => $_POST['publish_date_comment'],
            ':nickname' => $_POST['nickname_comment'],
            ':status' => $_POST['activated'],
            ':option' => $_POST['id_media'],

        ));

        $_SESSION['messages']['success'][] = 'Comment modifié';
        header('Location: comment.php');
        exit();
    } // fin soumission modification

} // fin !empty $_POST

// read et affiche dans table html plus bas :
$comments = execute("SELECT comment.*, media.name_media FROM `comment` INNER JOIN `media` ON comment.id_media = media.id_media")->fetchAll(PDO::FETCH_ASSOC);

if (!empty($_GET) && isset($_GET['id']) && isset($_GET['a']) && $_GET['a'] == 'activate') {

    execute("UPDATE comment SET activated=:activated WHERE id_comment=:id", array(
        ':id' => $_GET['id'],
        ':activated' => 1,
    ));

    $_SESSION['messages']['success'][] = 'Comment activé';
    header('Location: comment.php');
    exit;
}


if (!empty($_GET) && isset($_GET['id']) && isset($_GET['a']) && $_GET['a'] == 'del') {

    $success = execute("DELETE FROM comment WHERE id_comment=:id", array(
        ':id' => $_GET['id']
    ));

    if ($success) {
        $_SESSION['messages']['success'][] = 'Comment supprimé';
        header('Location: comment.php');
        exit;
    } else {
        $_SESSION['messages']['danger'][] = 'Problème de traitement, veuillez réitérer';
        header('Location: comment.php');
        exit;
    }
}

require_once '../inc/backheader.inc.php';
?>



<table class="table table-dark table-striped w-75 mx-auto">
    <thead>
        <tr>
            <th>Rating</th>
            <th>Contenu</th>
            <th>Date</th>
            <th>Alias</th>
            <th>Status</th>
            <th>Media</th>
            <th class="text-center">Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($comments as $comment) : ?>
            <tr class="comment">

                <td><?= $comment['rating_comment']; ?></td>
                <td><?= $comment['comment_text']; ?></td>
                <td><?= $comment['publish_date_comment']; ?></td>
                <td><?= $comment['nickname_comment']; ?></td>
                <td><?= $comment['activated'] == 1 ? "Activated" : "Deactivated"; ?></td>
                <td>
                    <div class="comment__image">
                        <img src="<?= BASE_PATH.'assets/img/'.$comment['name_media'] ?>" alt="">
                    </div>
                </td>

                <td class="text-center">

                    <?php if ($comment['activated'] == 0) { ?>
                        <a href="?a=activate&id=<?= $comment['id_comment']; ?>" class="btn btn-outline-info">Activer</a>
                    <?php } ?>


                    <a href="?id=<?= $comment['id_comment']; ?>&a=del" onclick="return confirm('Etes-vous sûr?')" class="btn btn-outline-danger">Supprimer</a>

                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>


<?php require_once '../inc/backfooter.inc.php'; ?>