<?php

//connxion à la base de données
require_once('../inc_config.php');
//l'objet
$user = new User();

//méthode select par
$teams = $user->findBy(['role' => 'trainee'],  1000, $user::TABLE);


//supprimer un élement du tableau
if (isset($_GET['id'])) {
    $post->deleteById($_GET['id'], $user::TABLE);
    header('Location: ../admin/users_disply.php?delete');
    exit();
}
?>

<!-- import du header -->
<?php include('inc_header.php'); ?>

<!-- Le contenu du dashbord-->
<div class='dashboard-app'>
    <header class='dashboard-toolbar'>
        <a href="#" class="menu-toggle"><i class="fas fa-bars"></i></a>
    </header>

    <div class='dashboard-content'>
        <div class='container'>
            <div class='card'>

                <!--titre du dashbord -->
                <div class='card-header'>
                    <h1>Vos employés </h1>

                    <!--success ajout-->
                    <?php if (isset($_GET['success'])) : ?>
                        <div class="alert alert-success" role="alert">
                            Un employée vient d'être ajouté
                        </div>
                    <?php endif ?>

                    <!--success suppression-->
                    <?php if (isset($_GET['delete'])) : ?>
                        <div class="alert alert-success" role="alert">
                            Un employée vient d'être supprimé
                        </div>
                    <?php endif ?>

                    <!--success modification-->
                    <?php if (isset($_GET['modif'])) : ?>
                        <div class="alert alert-success" role="alert">
                            Un employée vient vient d'être modifié
                        </div>
                    <?php endif ?>



                    <div class='card-body'>
                        <!-- bouton d'envoie (pop up) -->
                        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                            <button type="button" class="btn btn-primary submit-ajout" data-bs-toggle="modal" data-bs-target="#exampleModal">Ajouter </button>
                        </div>

                        <!--contenu du tableau -->
                        <table class="table">
                            <!-- le header du tableau -->
                            <thead class="table-dark">
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Nom</th>
                                    <th scope="col">Prénom</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Fonction</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                <!-- la boucle foreach pour l'affichage -->
                                <?php
                                $num = 0;
                                foreach ($teams as $team) :
                                    $num = $num + 1;
                                ?>

                                    <tr>
                                        <th scope="row"> <?= $num ?> </th>
                                        <td> <?= $team['firstname'] ?> </td>
                                        <td> <?= $team['lastname'] ?> </td>
                                        <td> <?= $team['email'] ?> </td>
                                        <td> <?= $team['role'] ?> </td>
                                        <td>
                                            <a href="users_modification.php?id= <?= $team['id'] ?>"><button type="button" class="btn btn-success">Modifier</button></a>
                                            <a href="?id= <?= $team['id'] ?>"><button type="button" class="btn btn-danger">Supprimer</button></a>
                                        </td>
                                    </tr>

                                <?php endforeach ?>
                            </tbody>
                        </table>
                        <!-- fin du tableau -->

                    </div>
                </div>
            </div>
        </div>

        <!-- pop up d'ajout -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!--titre du formulaire -->
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Nouveau membre</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <!-- formulaire d'envoie-->
                    <div class="modal-body">
                        <form action="../controllers/add_users.php" method="POST" enctype="multipart/form-data">

                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Nom :</label>
                                <input type="text" class="form-control" id="recipient-name" name="firstname" required>
                            </div>

                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Prénom :</label>
                                <input type="text" class="form-control" id="recipient-name" name="lastname" required>
                            </div>

                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Email :</label>
                                <input type="email" class="form-control" id="recipient-name" name="email" required>
                            </div>

                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Mot de passe :</label>
                                <input type="password" class="form-control" id="recipient-name" name="password" required>
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Fonction</label>
                                <br><select class="form-control" id="exampleFormControlSelect1" name="role" required>
                                    <option value="trainee">Stagaire</option>
                                    <option value="admin">Administrateur</option>
                                </select>
                            </div>

                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary" name="validation">Valider</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- end -->
            </div>
        </div>

        <!--import du footer-->
        <?php include('inc_footer.php'); ?>
    </div>