<?php

//connxion à la base de données
require_once('../inc_config.php');
//l'objet
$post = new Post();

//methode select par
$services = $post->findBy(['type' => 'service'], 1000, $post::TABLE);

//supprimer un élement du tableau
if (isset($_GET['id'])) {
    $post->deleteById($_GET['id'], $post::TABLE);
    header('Location: ../admin/services_disply.php?delete');
    exit();
}

if (isset($_SESSION['info'])) {
    unset($_SESSION['info']);
}
$_SESSION['info']['redirect'] = 'services_disply';
$_SESSION['info']['table'] = $post::TABLE;

?>
<!--  header -->
<?php include('inc_header.php'); ?>

<!-- Le contenu du dashbord-->
<div class='dashboard-app'>

    <div class='dashboard-content'>
        <div class='container'>
            <div class='card'>
                <!--titre du dashbord -->
                <div class='card-header'>
                    <div class="d-flex justify-content-center">
                        <div class="mb-2">
                            <h1>Services</h1>
                        </div>
                    </div>

                    <!--success ajout-->
                    <?php if (isset($_GET['success'])) : ?>
                        <div class="alert alert-success bold-text" role="alert">
                            Votre service vient d'être ajouté
                        </div>
                    <?php endif ?>

                    <?php if (isset($_GET['successModi'])) : ?>
                        <div class="alert alert-success bold-text" role="alert">
                            Les modifications ont été apportées
                        </div>
                    <?php endif ?>

                    <!--success suppression-->
                    <?php if (isset($_GET['delete'])) : ?>
                        <div class="alert alert-success bold-text" role="alert">
                            Votre service vient d'être supprimé
                        </div>
                    <?php endif ?>
                </div>

                <div class='card-body'>
                    <!-- bouton d'envoie (pop up) -->
                    <div class="pb-3 text-center" role="group" aria-label="Basic mixed styles example">
                        <button type="button" class="btn back-color-green3 text-light  " data-bs-toggle="modal" data-bs-target="#exampleModal">Ajouter </button>
                    </div>

                    <!--contenu du tableau -->
                    <table class="table">
                        <!-- le header du tableau -->
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">N°</th>
                                <th class="text-center" scope="col">Titre</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            <!-- la boucle foreach pour l'affichage -->
                            <?php
                            $num = 0;
                            foreach ($services as $service) :
                                $num = $num + 1;
                            ?>

                                <tr>
                                    <th scope="row"> <?= $num ?> </th>
                                    <td class="bold-text text-center "> <?= $service['titel'] ?> </td>
                                    <td class="bold-text w-25">
                                        <a href=" services_modification.php?id=<?= $service['id'] ?>"><button type="button" class="btn btn-success">Modifier</button></a>
                                        <a href="?id= <?= $service['id'] ?>">
                                            <button type="button" class="btn btn-danger" onclick="return confirm('Vous êtes sûr de vouloir supprimer élément ?');">Supprimer</button>
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
                    <form action="../controllers/add_blog.php" method="POST" enctype="multipart/form-data">

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
                            <label for="recipient-name" class="col-form-label">Entrez le code de votre service :</label>
                            <input type="text" class="form-control w-25" id="recipient-name" name="code" required>
                        </div>

                        <div class="mb-3">
                            <label for="message-text" class="col-form-label">La description : </label>
                            <textarea class="form-control" id="message-text" rows="5" cols="33" name="description" required></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="message-text" class="col-form-label">Le text : </label>
                            <textarea class="form-control" id="message-text" rows="5" cols="33" name="text" required></textarea>
                        </div>

                        <!-- le type pour l'appel à la base de données -->
                        <input name="type" value="service" hidden>

                        <div class="modal-footer d-flex justify-content-center">
                            <button type="submit" class="btn back-color-green3 text-light" name="validation">Valider</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- end -->
        </div>
    </div>

    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <!--titre du formulaire -->
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel1">Suppression</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <!-- formulaire d'envoie-->
                <div class="modal-body">
                    <div>
                        <p class="font-weight-bolder text-danger text-center ">Est-vous sûr de vouloir supprimer cet élement</p>
                    </div>
                    <div class="modal-footer text-center">
                        <a href="?id= <?= $service['id'] ?>"><button type="button " class="btn btn-danger">Supprimer</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>



</div>
</div>
</div>
</div>
<!--footer-->
<?php include('inc_footer.php'); ?>