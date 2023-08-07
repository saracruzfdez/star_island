<?php require_once '../config/function.php';


if (!empty($_POST)) {

    if (empty($_POST['rating_comment']) | empty($_POST['comment_text']) | empty($_POST['publish_date_comment']) | empty($_POST['nickname_comment']) | empty($_POST['activated']) | empty($_POST['id_media'])) {
        $error = 'Ce champs est obligatoire';
    }

    if (!isset($error)) {

        if (empty($_POST['id_comment'])) {

            execute("INSERT INTO comment (rating_comment, comment_text, publish_date_comment, nickname_comment, activated, id_media) VALUES (:rating_comment, :comment_text, :publish_date_comment, :nickname_comment, :activated, :id_media)", array(
                ':rating_comment' => $_POST['rating_comment'],
                ':comment_text' => $_POST['comment_text'],
                ':publish_date_comment' => $_POST['publish_date_comment'],
                ':nickname_comment' => $_POST['nickname_comment'],
                ':activated' => $_POST['activated'],
                ':id_media' => $_POST['id_media'],
            ),);

            $_SESSION['messages']['success'][] = 'Comment ajouté';
            header('Location: comment.php');
            exit();
        } // fin soumission en insert

        else {

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
    } // fin si pas d'erreur

} // fin !empty $_POST

// read et affiche dans table html plus bas :
$comments = execute("SELECT * FROM comment")->fetchAll(PDO::FETCH_ASSOC);
// read de media :
$medias = execute("SELECT * FROM media")->fetchAll(PDO::FETCH_ASSOC);
// debug($medias);


if (!empty($_GET) && isset($_GET['id']) && isset($_GET['a']) && $_GET['a'] == 'edit') {

    $comment = execute("SELECT * FROM comment WHERE id_comment=:id", array(
        ':id' => $_GET['id']
    ))->fetch(PDO::FETCH_ASSOC);
    // debug($comment);
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


<form action="" method="post" class="w-75 mx-auto mt-5 mb-5">

    <div class="form-group">
        <small class="text-danger">*</small>
        <label for="rating" class="form-label">Rating du commentaire</label>
        <input name="rating_comment" id="rating" placeholder="Rating du commentaire" type="int" value="<?= $comment['rating_comment'] ?? ''; ?>" class="form-control">
        <small class="text-danger"><?= $error ?? ''; ?></small>
    </div>

    <div class="form-group">
        <small class="text-danger">*</small>
        <label for="text" class="form-label">Texte du commentaire</label>
        <input name="comment_text" id="text" placeholder="Texte du commentaire" type="text" value="<?= $comment['comment_text'] ?? ''; ?>" class="form-control">
        <small class="text-danger"><?= $error ?? ''; ?></small>
    </div>

    <div class="form-group">
        <small class="text-danger">*</small>
        <label for="date" class="form-label">Date du commentaire</label>
        <input name="publish_date_comment" id="date" placeholder="Date du commentaire" type="date" value="<?= $comment['publish_date_comment'] ?? ''; ?>" class="form-control">
        <small class="text-danger"><?= $error ?? ''; ?></small>
    </div>

    <div class="form-group">
        <small class="text-danger">*</small>
        <label for="nickname" class="form-label">Nickname de l'utilisateur</label>
        <input name="nickname_comment" id="nickname" placeholder="Nickname de l'utilisateur" type="text" value="<?= $comment['nickname_comment'] ?? ''; ?>" class="form-control">
        <small class="text-danger"><?= $error ?? ''; ?></small>
    </div>

    <div class="form-group">
        <small class="text-danger">*</small>
        <label for="status" class="form-label">Status du commentaire</label>
        <input name="activated" id="status" placeholder="Status du commentaire" type="number" value="<?= $comment['activated'] ?? ''; ?>" class="form-control">
        <small class="text-danger"><?= $error ?? ''; ?></small>
    </div>

    <div class="form-group">
        <small class="text-danger">*</small>
        <label for="opcion">Media :</label>
        <select name="id_media" id="opcion">
            <?php
            // Recorremos las opciones y las mostramos en el select
            foreach ($medias as $mediaOption) {
                $valor = $mediaOption['title_media'];

                $selected = '';
                if (isset($comment['id_media']) && $comment['id_media'] == $mediaOption['id_media']) {
                    $selected = 'selected';
                }

                echo "<option value='{$mediaOption['id_media']}' $selected>$valor</option>";
            }
            ?>
        </select>

        <div>
            <small class="text-danger"><?= $error ?? ''; ?></small>
        </div>
    </div>

    <input type="hidden" name="id_comment" value="<?= $comment['id_comment'] ?? ''; ?>">

    <button type="submit" class="btn btn-primary mt-2">Valider</button>

</form>

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
            <tr>

                <td><?= $comment['rating_comment']; ?></td>
                <td><?= $comment['comment_text']; ?></td>
                <td><?= $comment['publish_date_comment']; ?></td>
                <td><?= $comment['nickname_comment']; ?></td>
                <td><?= $comment['activated']; ?></td>
                <td>
                    <?php
                    // Recorremos las opciones y buscamos la página asociada al contenido actual
                    foreach ($medias as $mediaOption) {
                        if ($comment['id_media'] == $mediaOption['id_media']) {
                            echo $mediaOption['title_media'];
                            break; // Salimos del bucle interno una vez encontrada la página asociada
                        }
                    }
                    ?>
                </td>

                <td class="text-center">

                    <a href="?id=<?= $comment['id_comment']; ?>&a=edit" class="btn btn-outline-info">Modifier</a>

                    <a href="?id=<?= $comment['id_comment']; ?>&a=del" onclick="return confirm('Etes-vous sûr?')" class="btn btn-outline-danger">Supprimer</a>

                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>


<?php require_once '../inc/backfooter.inc.php'; ?>