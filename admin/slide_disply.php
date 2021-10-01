<?php
//connxion à la base de données
require_once('../inc_config.php');
//l'objet
$post = new Post();



//méthode select par
$sliders = $post->findBy(['type' => 'slider'], 100, $post::TABLE);


//supprimer un élement du tableau
if (isset($_GET['id'])) {
    $post->deleteById($_GET['id'], $post::TABLE);

    header('Location: ../admin/slide_disply.php?delete');
    exit();
}
if (isset($_SESSION['info'])) {
    unset($_SESSION['info']);
}
$_SESSION['info']['redirect'] = 'slide_disply';
$_SESSION['info']['table'] = $post::TABLE;
?>

<!-- import du header -->
<?php include('inc_header.php'); ?>

<!-- Le contenu du dashbord-->
<div class='dashboard-app'>
    <div class='dashboard-content'>
        <div class='container'>
            <div class='card'>
                <!--titre du dashbord -->
                <div class='card-header'>
                    <h1>Slides</h1>

                    <!--success ajout-->
                    <?php if (isset($_GET['success'])) : ?>
                        <div class="alert alert-success" role="alert">
                            Votre slide vient d'être ajouté
                        </div>
                    <?php endif ?>

                    <!--success suppression-->
                    <?php if (isset($_GET['delete'])) : ?>
                        <div class="alert alert-success" role="alert">
                            Votre slide vient d'être supprimé
                        </div>
                    <?php endif ?>

                </div>

                <div class='card-body'>
                    <!-- bouton d'envoie (pop up) -->
                    <div class="pb-3 text-center" role="group" aria-label="Basic mixed styles example">
                        <button type="button" class="btn back-color-green3 text-light" data-bs-toggle="modal" data-bs-target="#exampleModal">Ajouter </button>
                    </div>

                    <!--contenu du tableau -->
                    <table class="table">
                        <?php if (isset($_GET['error']) && $_GET['error'] == 'ext') : ?>
                            <div class="alert alert-danger text-center font-weight-bold" role="alert">
                                Vous pouvez importer que des fichiers en format 'png', 'jpg', 'jpeg' !
                            </div>
                        <?php endif ?>

                        <?php if (isset($_GET['error']) && $_GET['error'] == 'siz') : ?>
                            <div class="alert alert-danger text-center font-weight-bold" role="alert">
                                Votre fichier dépasse la taille autorisée !
                            </div>
                        <?php endif ?>

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
                            foreach ($sliders as $slider) :
                                $num = $num + 1;
                            ?>

                                <tr>
                                    <th scope="row"> <?= $num ?> </th>
                                    <td class="text-center bold-text"> <?= $slider['titel'] ?> </td>
                                    <td class="bold-text">
                                        <a href="slide_modification.php?id= <?= $slider['id'] ?>"><button type="button" class="btn btn-success">Modifier</button></a>
                                        <a href="?id= <?= $slider['id'] ?>"><button type="button" class="btn btn-danger" type="button" onclick="return confirm('Vous êtes sûr de vouloir supprimer cet élément ?');">Supprimer</button></a>
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
                    <h5 class="modal-title border mr-4" id="exampleModalLabel">Nouveau contenu</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <!-- formulaire d'envoie-->
                <div class="modal-body">
                    <form action="../controllers/add_blog.php" method="POST" enctype="multipart/form-data">


                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Entrez votre titre :</label>
                            <input type="text" class="form-control" id="recipient-name" name="titel" required>
                        </div>

                        <div class="input-group mb-3">
                            <input type="file" class="form-control input-file" id="inputGroupFile02" accept="image/*" name="picture" required>
                        </div>

                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Entrez la source de votre image :</label>
                            <input type="text" class="form-control" id="recipient-name" name="source" required>
                        </div>

                        <div class="mb-3">
                            <label for="message-text" class="col-form-label">La description : </label>
                            <textarea class="form-control" id="message-text" name="description" required></textarea>
                        </div>

                        <input name="type" value="slider" hidden>

                        <div class="modal-footer d-flex justify-content-center">
                            <button type="submit" class="btn back-color-green3 text-light" name="validation">Valider</button>
                        </div>
                    </form>

                </div>
            </div>
            <!-- end -->

        </div>
    </div>


    <!-- pop up d'ajout -->
    <!-- <div class="modal fade" id="exampleModal1" tabindex="1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                   titre du formulaire
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel1">Suppression</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                     formulaire d'envoie
                    <div class="modal-body">
                        <div>
                            <p class="font-weight-bolder text-danger text-center ">Est-vous sûr de vouloir supprimer cet élement</p>
                        </div>
                        <div class="modal-footer text-center">

                            <a href="?id= "><button type="button " class="btn btn-danger">Supprimer</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->


    <!--import du footer-->

</div>
</div>
</div>
</div>
<?php include('inc_footer.php'); ?>