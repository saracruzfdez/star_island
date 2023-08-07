<?php require_once '../config/function.php';


if (!empty($_POST)) {

    if (empty($_POST['title_media']) | empty($_POST['name_media']) | empty($_POST['id_page']) | empty($_POST['id_media_type'])) {
        $error = 'Ce champs est obligatoire';
    }

    if (!isset($error)) {

        if (empty($_POST['id_media'])) {

            execute("INSERT INTO media (title_media, name_media, id_page, id_media_type) VALUES (:title_media, :name_media, :id_page, :id_media_type)", array(
                ':title_media' => $_POST['title_media'],
                ':name_media' => $_POST['name_media'],
                ':id_page' => $_POST['id_page'],
                ':id_media_type' => $_POST['id_media_type'],
            ),);

            $_SESSION['messages']['success'][] = 'Media ajouté';
            header('Location: media.php');
            exit();
        } // fin soumission en insert

        else {

            execute("UPDATE media SET title_media=:title, name_media=:name, id_page=:option, id_media_type=:opcionMediaType WHERE id_media=:id", array(

                ':id' => $_POST['id_media'],
                ':title' => $_POST['title_media'],
                ':name' => $_POST['name_media'],
                ':option' => $_POST['id_page'],
                ':opcionMediaType' => $_POST['id_media_type']
            ));

            $_SESSION['messages']['success'][] = 'Media modifié';
            header('Location: media.php');
            exit();
        } // fin soumission modification
    } // fin si pas d'erreur

} // fin !empty $_POST

// read et affiche dans table html plus bas :
$medias = execute("SELECT * FROM media")->fetchAll(PDO::FETCH_ASSOC);
// read pages :
$pages = execute("SELECT * FROM page")->fetchAll(PDO::FETCH_ASSOC);
// read type de media :
$mediaTypes = execute("SELECT * FROM media_type")->fetchAll(PDO::FETCH_ASSOC);
// debug($mediaTypes);


if (!empty($_GET) && isset($_GET['id']) && isset($_GET['a']) && $_GET['a'] == 'edit') {

    $media = execute("SELECT * FROM media WHERE id_media=:id", array(
        ':id' => $_GET['id']
    ))->fetch(PDO::FETCH_ASSOC);
    // debug($media);
}


if (!empty($_GET) && isset($_GET['id']) && isset($_GET['a']) && $_GET['a'] == 'del') {

    $success = execute("DELETE FROM media WHERE id_media=:id", array(
        ':id' => $_GET['id']
    ));

    if ($success) {
        $_SESSION['messages']['success'][] = 'Media supprimé';
        header('Location: media.php');
        exit;
    } else {
        $_SESSION['messages']['danger'][] = 'Problème de traitement, veuillez réitérer';
        header('Location: media.php');
        exit;
    }
}


require_once '../inc/backheader.inc.php';
?>

<form action="" method="post" class="w-75 mx-auto mt-5 mb-5">

    <div class="form-group">
        <small class="text-danger">*</small>
        <label for="name" class="form-label">Nom du media</label>
        <input name="name_media" id="name" placeholder="Nom du media" type="text" value="<?= $media['name_media'] ?? ''; ?>" class="form-control">
        <small class="text-danger"><?= $error ?? ''; ?></small>
    </div>
    <div class="form-group">
        <small class="text-danger">*</small>

        <label for="title" class="form-label">Titre du media</label>
        <input name="title_media" id="title" placeholder="Titre du media" type="text" value="<?= $media['title_media'] ?? ''; ?>" class="form-control">
        <small class="text-danger"><?= $error ?? ''; ?></small>
    </div>

    <div class="form-group">
        <small class="text-danger">*</small>
        <label for="opcion">Page :</label>
        <select name="id_page" id="opcion">
            <?php
            // Recorremos las opciones y las mostramos en el select
            foreach ($pages as $pageOption) {
                $valor = $pageOption['title_page'];

                $selected = '';
                if (isset($media['id_page']) && $media['id_page'] == $pageOption['id_page']) {
                    $selected = 'selected';
                }

                echo "<option value='{$pageOption['id_page']}' $selected>$valor</option>";
            }
            ?>
        </select>
        <div>
            <small class="text-danger"><?= $error ?? ''; ?></small>

        </div>
    </div>

    <div class="form-group">
        <small class="text-danger">*</small>
        <label for="opcionMediaType">Type de média :</label>
        <select name="id_media_type" id="opcionMediaType">
            <?php
            // Recorremos las opciones y las mostramos en el select
            foreach ($mediaTypes as $mediaTypeOption) {
                $valorOption = $mediaTypeOption['title_media_type'];

                $selected = '';
                if (isset($media['id_media_type']) && $media['id_media_type'] == $mediaTypeOption['id_media_type']) {
                    $selected = 'selected';
                }

                echo "<option value='{$mediaTypeOption['id_media_type']}' $selected>$valorOption</option>";
            }
            ?>
        </select>
        <div>
            <small class="text-danger"><?= $error ?? ''; ?></small>

        </div>
    </div>

    <input type="hidden" name="id_media" value="<?= $media['id_media'] ?? ''; ?>">

    <button type="submit" class="btn btn-primary mt-2">Valider</button>
</form>

<table class="table table-dark table-striped w-75 mx-auto">
    <thead>
        <tr>
            <th>Nom du media</th>
            <th>Titre du media</th>
            <th>Page</th>
            <th>Type de média</th>
            <th class="text-center">Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($medias as $media) : ?>
            <tr>

                <td><?= $media['name_media']; ?></td>
                <td><?= $media['title_media']; ?></td>
                <td>
                    <?php
                    // Recorremos las opciones y buscamos la página asociada al contenido actual
                    foreach ($pages as $pageOption) {
                        if ($media['id_page'] == $pageOption['id_page']) {
                            echo $pageOption['title_page'];
                            break; // Salimos del bucle interno una vez encontrada la página asociada
                        }
                    }
                    ?>
                </td>

                <td>
                    <?php
                    // Recorremos las opciones y buscamos la página asociada al contenido actual
                    foreach ($mediaTypes as $mediaTypeOption) {
                        if ($media['id_media_type'] == $mediaTypeOption['id_media_type']) {
                            echo $mediaTypeOption['title_media_type'];
                            break; // Salimos del bucle interno una vez encontrada la página asociada
                        }
                    }
                    ?>
                </td>

                <td class="text-center">

                    <a href="?id=<?= $media['id_media']; ?>&a=edit" class="btn btn-outline-info">Modifier</a>

                    <a href="?id=<?= $media['id_media']; ?>&a=del" onclick="return confirm('Etes-vous sûr?')" class="btn btn-outline-danger">Supprimer</a>

                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>


<?php require_once '../inc/backfooter.inc.php'; ?>