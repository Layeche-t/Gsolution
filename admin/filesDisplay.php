<?php

//connxion à la base de données
require_once('../inc_config.php');
//l'objet
$file = new File();
$post = new Post();


//methode select par
if (isset($_SESSION['admi']['id'])) {
    $trainings = $post->findBy(['type' => 'training'], 1000, $post::TABLE);
    $services = $post->findBy(['type' => 'service'], 1000, $post::TABLE);
    $partenariats = $post->findBy(['type' => 'partenariat'], 1000, $post::TABLE);
    $files = $file->findAll($file::TABLE);
}





//supprimer un élement du tableau
if (isset($_GET['id'])) {

    $file->deleteById($_GET['id'], $file::TABLE);
    header('Location: ../admin/filesDisplay?delete');
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

    <div class='dashboard-content'>
        <div class='container mb-4'>
            <div class='card'>

                <!--titre du dashbord -->
                <div class='card-header'>
                    <h1>Le contenu de bibliothèque</h1>


                    <!--success ajout-->
                    <?php if (isset($_GET['success'])) : ?>
                        <div class="alert alert-success text-center bold-text" role="alert">
                            Votre ficher vient d'être ajouté
                        </div>
                    <?php endif ?>

                    <!--success suppression-->
                    <?php if (isset($_GET['delete'])) : ?>
                        <div class="alert alert-success text-center bold-text" role="alert">
                            Votre ficher vient d'être supprimé
                        </div>
                    <?php endif ?>

                    <?php if (isset($_GET['size'])) : ?>
                        <div class="alert alert-danger text-center bold-text" role="alert">
                            Votre fichier dépasse la taille autorisée !
                        </div>
                    <?php endif ?>

                </div>

                <div class='card-body'>
                    <!-- bouton d'envoie (pop up) -->
                    <div class="text-center my-2">
                        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                            <button type="button" class="btn back-color-green3 text-light mb-2" data-bs-toggle="modal" data-bs-target="#exampleModal">Ajouter un ficher pour un stagaire </button>
                        </div>
                        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                            <button type="button" class="btn back-color-green3 text-light mb-2" data-bs-toggle="modal" data-bs-target="#exampleModal1">Ajouter un ficher pour un client </button>
                        </div>
                        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                            <button type="button" class="btn back-color-green3 text-light mb-2" data-bs-toggle="modal" data-bs-target="#exampleModal2">Ajouter un ficher pour un partenaire </button>
                        </div>
                    </div>


                    <!--contenu du tableau -->
                    <table class="table">
                        <!-- le header du tableau -->
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">N°</th>
                                <th class="text-center" scope="col">Titre</th>
                                <th class="text-center" scope="col">Type</th>
                                <th class="text-center" scope="col">Action</th>
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
                                    <td class="text-center bold-text"> <?= $filePdf['title'] ?> </td>
                                    <td class="text-center bold-text"> <?= $filePdf['type'] ?> </td>
                                    <td class="text-center bold-text">
                                        <a href="training_modification.php?id= <?= $filePdf['id'] ?>"><button type="button" class="btn btn-success">Modifier</button></a>
                                        <a href="?id= <?= $filePdf['id'] ?>"> <button type="button" class="btn btn-danger">Supprimer</button>
                                    </td>
                                </tr>

                            <?php endforeach ?>
                        </tbody>
                    </table>
                    <!-- fin du tableau -->

                </div>
                <div class="card-footer">
                    <p class="text-center pt-2">CREAT BY LAYECHE TORKI</p>
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
                            <select class="form-control" name="id_post">
                                <?php foreach ($trainings as $training) : ?>
                                    <option value="<?= $training['id'] ?>"><?= $training['titel'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div class=" mb-3">
                            <label for="link" class="col-form-label">Choissiez votre fichier</label>
                            <input type="file" class="form-control input-file" id="inputGroupFile02" accept=".pdf" name="link">
                            <input name="type" type="hidden" value="training">
                        </div>


                        <!-- le type pour l'appel à la base de données -->

                        <div class="modal-footer">
                            <button type="submit" class="btn back-color-green3 text-light" name="validation">Valider</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- end -->
        </div>
    </div>

    <!-- 2222 -->

    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <!--titre du formulaire -->
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel1">Nouveau contenu</h5>
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
                            <label class="py-1 mr-2 ml-2" for="exampleFormControlSelect2">Votre service</label>
                            <select class="form-control" name="id_post">
                                <?php foreach ($services as $service) : ?>
                                    <option value="<?= $service['id'] ?>"><?= $service['titel'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div class=" mb-3">
                            <label for="link" class="col-form-label">Choissiez votre fichier</label>
                            <input type="file" class="form-control input-file" id="inputGroupFile02" accept=".pdf" name="link">
                            <input name="type" type="hidden" value="service">
                        </div>


                        <!-- le type pour l'appel à la base de données -->

                        <div class="modal-footer d-flex justify-content-center">
                            <button type="submit" class="btn back-color-green3 text-light" name="validation">Valider</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- start -->

    <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <!--titre du formulaire -->
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel1">Nouveau contenu</h5>
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
                            <label class="py-1 mr-2 ml-2" for="exampleFormControlSelect2">Votre service</label>
                            <select class="form-control" name="id_post">
                                <?php foreach ($partenariats as $partenariat) : ?>
                                    <option value="<?= $partenariat['id'] ?>"><?= $partenariat['titel'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div class=" mb-3">
                            <label for="link" class="col-form-label">Choissiez votre fichier</label>
                            <input type="file" class="form-control input-file" id="inputGroupFile02" accept=".pdf" name="link">
                            <input name="type" type="hidden" value="partenariat">
                        </div>


                        <!-- le type pour l'appel à la base de données -->

                        <div class="modal-footer d-flex justify-content-center">
                            <button type="submit" class="btn back-color-green3 text-light" name="validation">Valider</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!--import du footer-->
</div>
</div>
</div>
</div>
<?php include('inc_footer.php'); ?>