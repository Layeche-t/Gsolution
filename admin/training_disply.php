<?php

//connxion à la base de données
require_once('../inc_config.php');
//l'objet
$post = new Post();

//méthode select par
$trainings = $post->findBy(['type' => 'training'], 1000, $post::TABLE);

//supprimer un élement du tableau
if (isset($_GET['id'])) {
    $post->deleteById($_GET['id'], $post::TABLE);
    header('Location: ../admin/training_disply.php?delete');
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
                    <h1>Le contenu de votre formation</h1>

                    <!--success ajout-->
                    <?php if (isset($_GET['success'])) : ?>
                        <div class="alert alert-success" role="alert">
                            Votre formation vient d'être ajouté
                        </div>
                    <?php endif ?>

                    <!--success suppression-->
                    <?php if (isset($_GET['delete'])) : ?>
                        <div class="alert alert-success" role="alert">
                            Votre formation vient d'être supprimé
                        </div>
                    <?php endif ?>

                    <!--success modification-->
                    <?php if (isset($_GET['modif'])) : ?>
                        <div class="alert alert-success" role="alert">
                            Votre formation vient d'être modifié
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
                                    <th scope="col">Titre de la formation</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                <!-- la boucle foreach pour l'affichage -->
                                <?php
                                $num = 0;
                                foreach ($trainings as $training) :
                                    $num = $num + 1;
                                ?>

                                    <tr>
                                        <th scope="row"> <?= $num ?> </th>
                                        <td> <?= $training['titel'] ?> </td>
                                        <td>
                                            <a href="training_modification.php?id= <?= $training['id'] ?>"><button type="button" class="btn btn-success">Modifier</button></a>
                                            <a href="?id= <?= $training['id'] ?>"><button type="button" class="btn btn-danger">Supprimer</button></a>
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
                        <h5 class="modal-title" id="exampleModalLabel">Nouveau contenu</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <!-- formulaire d'envoie-->
                    <div class="modal-body">
                        <form action="../controllers/add_training.php" method="POST" enctype="multipart/form-data">

                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Entrez le titre de votre service :</label>
                                <input type="text" class="form-control" id="recipient-name" name="titel" required>
                            </div>

                            <div class="input-group mb-3">
                                <input type="file" class="form-control input-file" id="inputGroupFile02" accept="image/*" name="picture">
                            </div>

                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Entrez la source de votre image :</label>
                                <input type="text" class="form-control" id="recipient-name" name="source" required>
                            </div>

                            <div class="mb-3">
                                <label for="message-text" class="col-form-label">La description : </label>
                                <textarea class="form-control" id="message-text" rows="5" cols="33" name="description" required></textarea>
                            </div>

                            <!-- le type pour l'appel à la base de données -->
                            <input name="type" value="training" hidden>

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