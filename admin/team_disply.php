<?php

//connxion to database
require_once('../inc_config.php');

//object
$user = new User();

//methode by select 
$teams = $user->findBy(['role' => 'team'], 1000, $user::TABLE);

//remove an element from the array
if (isset($_GET['id'])) {
    $user->deleteById($_GET['id'], $user::TABLE);
    header('Location: ../admin/team_disply.php?delete');
    exit();
}
if (isset($_SESSION['info'])) {
    unset($_SESSION['info']);
}
// start session
$_SESSION['info']['redirect'] = 'team_disply';
$_SESSION['info']['table'] = $user::TABLE;
?>

<!-- header -->
<?php include('inc_header.php'); ?>

<!-- content of the dashboard-->
<div class='dashboard-app'>
    <header class='dashboard-toolbar'>
        <a href="#" class="menu-toggle"><i class="fas fa-bars"></i></a>
    </header>

    <div class='dashboard-content'>
        <div class='container'>
            <div class='card'>

                <!--title of dashbord -->
                <div class='card-header'>
                    <h1>Votre équipe</h1>

                    <!-- message success add -->
                    <?php if (isset($_GET['success'])) : ?>
                        <div class="alert alert-success bold-text" role="alert">
                            Un membre de votre équipe vient d'être ajouté.
                        </div>
                    <?php endif ?>

                    <!--message success delete-->
                    <?php if (isset($_GET['delete'])) : ?>
                        <div class="alert alert-success bold-text" role="alert">
                            Un membre de votre équipe vient d'être supprimé.
                        </div>
                    <?php endif ?>

                    <!--message success modification-->
                    <?php if (isset($_GET['modif'])) : ?>
                        <div class="alert alert-success bold-text" role="alert">
                            Un membre de votre équipe vient d'être modifié.
                        </div>
                    <?php endif ?>

                    <!-- error message -->
                    <?php if (isset($_GET['error']) && $_GET['error'] == 'non') : ?>
                        <div class="alert alert-danger text-center font-weight-bold" role="alert">
                            Votre image est volumineuse
                        </div>
                    <?php endif ?>



                    <div class='card-body'>
                        <!-- pop up send -->
                        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                            <button type="button" class="btn btn-primary submit-ajout" data-bs-toggle="modal" data-bs-target="#exampleModal">Ajouter </button>
                        </div>

                        <!--content of table -->
                        <table class="table">
                            <!--  header of table -->
                            <thead class="table-dark">
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Nom</th>
                                    <th scope="col">Prénom</th>
                                    <th scope="col">Fonction</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                <!-- la boucle foreach for display -->
                                <?php
                                $num = 0;
                                foreach ($teams as $team) :
                                    $num = $num + 1;
                                ?>

                                    <tr>
                                        <th scope="row"> <?= $num ?> </th>
                                        <td> <?= $team['firstname'] ?> </td>
                                        <td> <?= $team['lastname'] ?> </td>
                                        <td> <?= $team['function'] ?> </td>
                                        <td>
                                            <a href="team_modification.php?id= <?= $team['id'] ?>"><button type="button" class="btn btn-success">Modifier</button></a>
                                            <a href="?id= <?= $team['id'] ?>"><button type="button" class="btn btn-danger">Supprimer</button>
                                        </td>
                                    </tr>

                                <?php endforeach ?>
                            </tbody>
                        </table>
                        <!-- end -->

                    </div>
                </div>
            </div>
        </div>

        <!-- pop up add -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!--form title -->
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Nouveau membre</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <!-- send form-->
                    <div class="modal-body">
                        <form action="../controllers/add_team.php" method="POST" enctype="multipart/form-data">

                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Nom :</label>
                                <input type="text" class="form-control" id="recipient-name" name="firstname" required>
                            </div>

                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Prénom :</label>
                                <input type="text" class="form-control" id="recipient-name" name="lastname" required>
                            </div>

                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Fonction :</label>
                                <input type="text" class="form-control" id="recipient-name" name="function" required>
                            </div>

                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Lien linkedin :</label>
                                <input type="text" class="form-control" id="recipient-name" name="link_social" required>
                            </div>

                            <div class="input-group mb-3">
                                <input type="file" class="form-control input-file" id="inputGroupFile02" accept="image/*" name="image">
                            </div>


                            <!-- the type for the database call -->
                            <input name="role" value="team" hidden>

                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary" name="validation">Valider</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- end -->
            </div>
        </div>



    </div>
</div>
</div>
</div>
<!--footer-->

<?php include('inc_footer.php'); ?>