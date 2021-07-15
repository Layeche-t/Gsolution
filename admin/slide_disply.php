
<?php
require_once('../inc_config.php');
$post = new Post();

if (isset($_GET['id']) and $_GET['id'] != '') {

    $affichages= $post->findAll($post::TABLE);
}
?>

<!-- import du header -->
<?php include('inc_header.php'); ?>



<!-- Le contenu du dashbord-->
<div class='dashboard-app'>
    <header class='dashboard-toolbar'>
        <a href="#!" class="menu-toggle"><i class="fas fa-bars"></i></a>
    </header>

    <div class='dashboard-content'>
        <div class='container'>
            <div class='card'>

                <!--titre du dashbord -->
                <div class='card-header'>
                    <h1>Le contenu de votre slide</h1>
                    if (isset($_GET['id']) 




                <div class='card-body'>

                    <!-- bouton d'envoie (pop up) -->
                    <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                        <button type="button" class="btn btn-primary submit-ajout" data-bs-toggle="modal" data-bs-target="#exampleModal" >Ajouter </button>
                    </div>

                    <!--contenu du tableau -->





                    <table class="table">

                        <thead class="table-dark">
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Titre</th>
                            <th scope="col">Description</th>
                            <th scope="col">Source de l'image</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>

                        <tbody>

                        <?php foreach( (array) $affichages as $affichage) : ?>

                        <tr>
                            <th scope="row"> <?= $affichage['id'] ?> </th>
                            <td> <?= $affichage['titel'] ?> </td>
                            <td> <?= $affichage['description'] ?> </td>
                            <td> <?= $affichage['text'] ?> </td>
                            <td>
                                <a href="slide_modification.php"><button type="button" class="btn btn-success">Modifier</button></a>
                                <button type="button" class="btn btn-danger">Supprimer</button>
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
                    <form action="../controllers/add_backOffice.php" method="POST">

                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Entrez votre titre :</label>
                            <input type="text" class="form-control" id="recipient-name" name="titel" required>
                        </div>

                        <div class="input-group mb-3">
                                <input type="file" class="form-control input-file" id="inputGroupFile02" accept="image/*" name="picture">
                        </div>

                        <div class="mb-3">
                            <label for="message-text" class="col-form-label">La description : </label>
                            <textarea class="form-control" id="message-text" name="description" required ></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="message-text" class="col-form-label">Votre contenu : </label>
                            <textarea class="form-control" id="message-text" rows="5" cols="33" name="text" required></textarea>
                        </div>

                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" name="validation">Valider</button>
                        </div>

                    </form>
                </div>

                <!-- bouton d'envoie -->


            </div>
            <!-- end -->
        </div>
    </div>

    <!--import du footer-->
    <?php include ('inc_footer.php'); ?>


</div>