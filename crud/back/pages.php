<?php require_once '../config/function.php';
require_once '../inc/backheader.inc.php'; ?>


<?php
// Traitement du formulaire, submit and send to bdd : 

if (!empty($_POST)) {

    // var_dump($_POST);

    $pagesError = array();

    if (empty($_POST['title_page'])) {

        $pagesError['title_page'] = "Ce champs est obligatoire";
    }

    if (empty($_POST['url'])) {

        $pagesError['url'] = "Ce champs est obligatoire";
    }

    if (empty($pagesError)) {

        // Vérifie si je suis en update ou en insert avec get id rempli ou vide :

        if (empty($_GET['id_page'])) {

            $result = execute(
                "INSERT INTO page (title_page, url)
    VALUES (:title_page, :url)",
                array(

                    ':title_page' => $_POST['title_page'],
                    ':url' => $_POST['url']
                )
            );
        } else {
//die("coucou");
            execute("UPDATE page
    SET title_page=:title_page, url=:url
    WHERE id_page=:id_page",
                array(

                    ':id_page' => $_POST['id_page'],
                    ':title_page' => $_POST['title_page'],
                    ':url' => $_POST['url']

                )
            );

            // header

        } // Fin vérification si je suis en update ou en insertion

    } // Fin verif $error pages

} // Fin vérification !empty $_POST

// Vérifie si je recois les paramettres id et action en GET :
// var_dump($_GET);


// Verifie que je recois en get les parametres au click sur modifier et select cette entrée de la bdd (avec input id hidden) pour la modifier plus tard :

if(!empty($_GET) && isset($_GET['id_page']) && isset($_GET['action']) && $_GET['action'] == "update") {

$currentPage = execute(
    
    "SELECT * 
FROM page 
WHERE id_page=:id_page", array(

':id_page' => $_GET['id_page']

))->fetch(PDO::FETCH_ASSOC);

// var_dump($currentPage);

}

?>



<!-- Ici le formulaire : -->
<form action="" method="post" class="w-75 mx-auto mt-5 mb-5">

    <div class="form-group">
        <small class="text-danger">*</small>

        <label for="title_page" class="form-label">Nom de la page</label>
        <input name="title_page" class="form-control" id="title_page" type="text" value="<?= $currentPage['title_page'] ?? '' ?>" placeholder="Nom de la page">

        <small><?= $pagesError['title_page'] ?? ''?></small>
    </div>

    <div class="form-group">
        <small class="text-danger">*</small>

        <label for="url" class="form-label">Adress URL</label>
        <input name="url" class="form-control" id="url" type="text" value="<?= $currentPage['url'] ?? '' ?>" placeholder="Adresse URL">

        <small><?= $pagesError['url'] ?? '' ?></small>
    </div>

    <div class="form-group">

        <label for="id_page" class="form-label"></label>
        <input name="id_page" class="form-control" type="hidden" value="<?= $currentPage['id_page'] ?? '' ?>">

    </div>

    <button type="submit" class="btn btn-primary mt-2">Valider</button>
</form>



<!-- Ici affichage des données : -->
<!-- Je recupere les données de la bd avec SELECT : -->
<?php $pages = execute('SELECT * FROM page')->fetchAll(PDO::FETCH_ASSOC);
// var_dump($pages);

if ($pages) { ?>

    <table class="table table-dark table-striped w-75 mx-auto">

        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Titre</th>
                <th scope="col">URL</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>

        <tbody>

            <?php foreach ($pages as $page) { ?>
                <tr>
                    <td><?= $page['id_page'] ?></td>
                    <td><?= $page['title_page'] ?></td>
                    <td><?= $page['url'] ?></td>

                    <td>
                        <a class="btn btn-outline-info" href="<?= "?action=update&id_page=".$page['id_page']; ?>">Modifier</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>

    </table>

<?php }
// fin if $_pages 
?>


<?php require_once '../inc/backfooter.inc.php'; ?>