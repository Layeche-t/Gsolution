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
            <div class='card'>
                <!--titre du dashbord -->
                <div class='card-header'>
                    <h1>Modification</h1>
                </div>


                <div class='card-body'>
                    <!-- le formuliare d'envoie -->
                    <form action="../controllers/update_users.php" method="POST">
                        <div class="input-group">
                            <span class="input-group-text">Nom :</span>
                            <input type="text" aria-label="First name" class="form-control" name="firstname" value=<?= $team->firstname ?> required>
                        </div>

                        <div class="input-group">
                            <span class="input-group-text">Prénom :</span>
                            <input type="text" aria-label="First name" class="form-control" name="lastname" value=<?= $team->lastname ?> required>
                        </div>

                        <div class="input-group">
                            <span class="input-group-text">Email :</span>
                            <input type="text" aria-label="First name" class="form-control" name="email" value=<?= $team->email ?> required>
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