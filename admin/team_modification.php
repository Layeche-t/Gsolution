<?php
require_once('../inc_config.php');

/*objet*/
$user = new User();

if (isset($_GET['id']) && $_GET['id'] != '') {
    $team = $user->findOneBy(['id' => $_GET['id']], $user::TABLE);
}
?>

<?php include('inc_header.php'); ?>

<!-- Le coeur dashbord -->
<div class='dashboard-app'>
    <header class='dashboard-toolbar'>
        <a href="#" class="menu-toggle"><i class="fas fa-bars"></i></a>
    </header>

    <!-- Le contenu du dashbord-->
    <div class='dashboard-content'>
        <div class='container'>
            <div class='card d-flex'>
                <!--titre du dashbord -->
                <div class='card-header'>
                    <!-- title of dashbord -->
                    <h1>Modification</h1>

                </div>


                <div class="card-body">
                    <!-- le formuliare d'envoie -->
                    <form action="../controllers/update_team.php" method="POST">
                        <div class="input-group mb-3 w-50 d-flex ">
                            <span class="input-group-text w-25">Nom :</span>
                            <input type="text" aria-label="First name" class="form-control" name="firstname" value=<?= $team->firstname ?> required>
                        </div>

                        <div class="input-group mb-3 w-50">
                            <span class="input-group-text w-25">Prénom :</span>
                            <input type="text" aria-label="First name" class="form-control" name="lastname" value=<?= $team->lastname ?> required>
                        </div>

                        <div class="input-group mb-3 w-50">
                            <span class="input-group-text w-25">Fonction :</span>
                            <input type="text" aria-label="First name" class="form-control" name="function" value=<?= $team->function ?> required>
                        </div>

                        <div class="input-group mb-3 w-50">
                            <span class="input-group-text w-25">Linkedin :</span>
                            <input type="text" aria-label="First name" class="form-control" name="link_social" value=<?= $team->link_social ?> required>
                        </div>

                        <div class="col-12">
                            <input type="text" aria-label="First name" class="form-control" name="id" value=<?= $team->id ?> hidden>
                            <button class="btn btn-success submit-modification" type="submit" name="modification">Modifier</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<?php include('inc_footer.php'); ?>
</div>