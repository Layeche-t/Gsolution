<?php

//connxion à la base de données
require_once('../inc_config.php');
//l'objet
$file = new File();
$post = new Post();


//methode select par
if (isset($_SESSION['admi']['id'])) {
    $trainings = $post->findBy(['type' => 'training'], 1000, $post::TABLE);
    $files = $file->findAll($file::TABLE);
}





//supprimer un élement du tableau
if (isset($_GET['id'])) {
    $post->deleteById($_GET['id'], $post::TABLE);
    header('Location: ../admin/libraryDisplay?delete');
    exit();
}

if (isset($_SESSION['info'])) {
    unset($_SESSION['info']);
}
$_SESSION['info']['redirect'] = 'filesDisplay';
$_SESSION['info']['table'] = $file::TABLE;

?>
<!-- import du header -->
<?php include('inc_header.php'); ?>

<!-- Le contenu du dashbord-->
<div class='dashboard-app'>
    <header class='dashboard-toolbar'>
        <a href="#" class="menu-toggle"><i class="fas fa-bars"></i></a>
    </header>

    <div class='dashboard-content'>
        <div class='container mb-4'>
            <div class='card'>

                <!--titre du dashbord -->
                <div class='card-header'>
                    <h1>Le contenu de bibliothèque</h1>

                    <!--success ajout-->
                    <?php if (isset($_GET['success'])) : ?>
                        <div class="alert alert-success" role="alert">
                            Votre bibliothèque vient d'être ajouté
                        </div>
                    <?php endif ?>

                    <!--success suppression-->
                    <?php if (isset($_GET['delete'])) : ?>
                        <div class="alert alert-success" role="alert">
                            Votre bibliothèque vient d'être supprimé
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
                                    <th scope="col">Titre</th>
                                    <th scope="col">Fichier</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                <!-- la boucle foreach pour l'affichage -->
                                <?php
                                $num = 0;
                                foreach ($files as $filePdf) :
                                    $num = $num + 1;
                                ?>

                                    <tr>
                                        <th scope="row"> <?= $num ?> </th>
                                        <td> <?= $filePdf['title'] ?> </td>
                                        <td> <?= $filePdf['link'] ?> </td>
                                        <td>
                                            <a href="services_modification.php?id= <?= $filePdf['id'] ?>"><button type="button" class="btn btn-success">Modifier</button></a>
                                            <a href="?id= <?= $filePdf['id'] ?>"><button type="button" class="btn btn-danger">Supprimer</button></a>
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
                        <form action="../controllers/add_pdf.php" method="POST" enctype="multipart/form-data">

                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Entrez le titre de votre fichier :</label>
                                <input type="text" class="form-control" name="title" required>
                            </div>

                            <div class="form-group div">
                                <label class="py-1 mr-2 ml-2" for="exampleFormControlSelect2">Votre formation</label>
                                <select class="form-control" name="id_posts">
                                    <?php foreach ($trainings as $training) : ?>
                                        <option value="<?= $training['id'] ?>"><?= $training['titel'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <div class=" mb-3">
                                <label for="link" class="col-form-label">Choissiez votre fichier</label>
                                <input type="file" class="form-control input-file" id="inputGroupFile02" accept=".pdf" name="link">
                            </div>


                            <!-- le type pour l'appel à la base de données -->

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
    </div>
    <?php include('inc_footer.php'); ?>