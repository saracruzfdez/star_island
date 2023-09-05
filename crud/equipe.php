<?php require_once 'config/function.php';
require_once 'inc/header.inc.php';

$teams = execute("SELECT * FROM team");
?>

<div class="fondStaff">
    <div class="titre">
        <h1 id="titre">
            L'EQUIPE
        </h1>
    </div>

    <!-- navBarEquipe -->
    <section class="navBarStaff">
        <button class="rolButton btn btn-light" type="button" data-rol="Tous">Tous</button>

        <?php
        $addedRoles = array(); // Un array para mantener un registro de los roles agregados
        foreach ($teams as $team) {

            $rol = $team['role_team'];
            // Verifica si el rol ya ha sido agregado antes
            if (!in_array($rol, $addedRoles)) {                 
                // Agrega el botón solo si el rol no está en el array de roles agregados
                ?>
                <button class="rolButton btn btn-light" type="button" data-rol="<?= $rol ?>"><?= $rol ?></button>
        <?php
                // Agrega el rol al array de roles agregados
                $addedRoles[] = $rol;
            }
        } ?>
        <!-- <button class="rolButton btn btn-light" type="button" data-rol="Invitado">Modérateur</button>
        <button class="rolButton btn btn-light" type="button" data-rol="Invitado">Dév</button>
        <button class="rolButton btn btn-light" type="button" data-rol="Invitado">Mapper</button>
        <button class="rolButton btn btn-light" type="button" data-rol="Invitado">Helper</button> -->
    </section>

    <!-- equipe Section -->
    <section class="equipe">
        <?php foreach ($teams as $team) { ?>

            <div class="equipeItem usuario">
                <div style="text-align: center;">
                    <div>
                        <img src="assets\img\profil2.jpg" alt="">
                    </div>
                    <div style="color:cornsilk; text-align:center">
                        <?= $team['nickname_team'] ?> | <?= $team['role_team'] ?>
                    </div>
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