<?php require_once 'config/function.php';
require_once 'inc/header.inc.php';

$teams = execute("SELECT * FROM team")

?>

<div class="fondStaff">


    <div class="titre">
        <h1 id="titre">
            L'EQUIPE
        </h1>
    </div>

    <!-- navBarEquipe -->
    <section class="navBarStaff">
        <h3>Tous</h3>
        <div class="red"></div>
        <h3>Admin</h3>
        <div class="red"></div>
        <h3>Modérateur</h3>
        <div class="red"></div>
        <h3>Développeur</h3>
        <div class="red"></div>
        <h3>Mapper</h3>
        <div class="red"></div>
        <h3>Helper</h3>
    </section>

    <!-- equipe Section -->
    <section class="equipe">

<?php foreach ($teams as $team) { ?>

        <div class="equipeItem">
            <div>
                <img src="assets\img\profil2.jpg" alt="">
            </div>
            <div style="padding-left: 25%; color: white;">
                <?= $team['nickname_team']?>
            </div>
            <div class="equipeItemReseaux">
                <div>
                    <img src="assets\img\logo_twitch.png" alt="">
                </div>
                <div>
                    <img src="assets\img\discord.png" alt="">
                </div>
            </div>
        </div>

        <?php } ?>
        
    </section>

</div>
<!-- Social media START -->
<?php require_once 'inc/reseaux.inc.php' ?>
<!-- Social media END -->

<?php require_once 'inc/footer.inc.php' ?>