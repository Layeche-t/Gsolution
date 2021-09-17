<?php

//connxion to database
require_once('../inc_config.php');

//l'object
$post = new Post();

//méthode by select 
$trainings = $post->findBy(['type' => 'training'], 1000, $post::TABLE);

//remove an element from the array
if (isset($_GET['id'])) {

    $post->deleteById($_GET['id'], $post::TABLE);
    header('Location: ../admin/training_disply.php?delete');
    exit();
}

// start session
if (isset($_SESSION['info'])) {
    unset($_SESSION['info']);
}
$_SESSION['info']['redirect'] = 'training_disply';
$_SESSION['info']['table'] = $post::TABLE;
?>

<!-- header -->
<?php include('inc_header.php'); ?>

<!-- The content of the dashboard-->
<div class='dashboard-app'>
    <header class='dashboard-toolbar'>
        <a href="#" class="menu-toggle"><i class="fas fa-bars"></i></a>
    </header>

    <div class='dashboard-content'>
        <div class='container'>
            <div class='card'>

                <!--dashbord title -->
                <div class='card-header'>
                    <h1>Le contenu de votre formation</h1>

                    <?php

                    // recover nbr du table 
                    $count = $bdd->query("SELECT count(id) AS fa FROM posts WHERE type = 'training' ");
                    $count->setFetchMode(PDO::FETCH_ASSOC);
                    $count->execute();
                    $tcount = $count->fetchAll();


                    //paging 
                    @$page = $_GET['page'];
                    if (empty($page)) {
                        $page = 1;
                    }
                    $nbr_element_par_page = 5;
                    $nbr_page = ceil($tcount[0]['fa'] / $nbr_element_par_page);
                    $debut = ($page - 1) * $nbr_element_par_page;


                    // recover data
                    $sel = $bdd->query("SELECT * FROM posts WHERE type= 'training' LIMIT $debut, $nbr_element_par_page");

                    $sel->setFetchMode(PDO::FETCH_ASSOC);
                    $sel->execute();
                    $resultats = $sel->fetchAll();
                    if (count($resultats) == 0) {
                        header("Location: training_disply.php");
                    }

                    ?>



                    <!--success add-->
                    <?php if (isset($_GET['success'])) : ?>
                        <div class="alert alert-success" role="alert">
                            Votre formation vient d'être ajouté
                        </div>
                    <?php endif ?>

                    <!--success delete-->
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

                    <!--error store-->
                    <?php if (isset($_GET['error']) && $_GET['error'] == 'siz') : ?>
                        <div class="alert alert-danger text-center font-weight-bold" role="alert">
                            Le fichier est trop volumineux !
                        </div>
                    <?php endif ?>

                    <!--error type file-->
                    <?php if (isset($_GET['error']) && $_GET['error'] == 'ext') : ?>
                        <div class="alert alert-danger text-center font-weight-bold" role="alert">
                            Merci d'importer un fichier pdf !
                        </div>
                    <?php endif ?>



                    <div class='card-body'>
                        <!-- (pop up) -->
                        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                            <button type="button" class="btn btn-primary submit-ajout" data-bs-toggle="modal" data-bs-target="#exampleModal">Ajouter </button>
                        </div>

                        <!--table content -->
                        <table class="table">
                            <!-- header table-->
                            <thead class="table-dark">
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Titre de la formation</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                <!--  loop foreach for display -->
                                <?php
                                $num = 0;
                                foreach ($resultats as $resultat) :
                                    $num = $num + 1;
                                ?>

                                    <tr>
                                        <th scope="row"> <?= $num ?> </th>
                                        <td> <?= $resultat['titel'] ?> </td>
                                        <td>
                                            <a href="training_modification.php?id= <?= $resultat['id'] ?>"><button type="button" class="btn btn-success">Modifier</button></a>
                                            <a href="?id= <?= $resultat['id'] ?>"> <button type="button" class="btn btn-danger">Supprimer</button>
                                        </td>
                                    </tr>

                                <?php endforeach ?>
                            </tbody>
                        </table>
                        <!-- end table -->
                    </div>
                </div>
            </div>
        </div>

        <!--add pop up  -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!--title of table -->
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Nouveau contenu</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <!-- submission form-->
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
                                <label for="recipient-name" class="col-form-label">Entrez le code de votre formation :</label>
                                <input type="text" class="form-control w-25" id="recipient-name" name="code" required>
                            </div>

                            <div class="mb-3">
                                <label for="message-text" class="col-form-label">La description : </label>
                                <textarea class="form-control" id="message-text" rows="5" cols="33" name="description" required></textarea>
                            </div>

                            <div class="mb-3">
                                <label for="message-text" class="col-form-label">Le texte : </label>
                                <textarea class="form-control" id="message-text" rows="5" cols="33" name="text" required></textarea>
                            </div>

                            <!-- type hidden -->
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

        <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!--title  -->
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel1">Suppression</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <!-- submission form-->
                    <div class="modal-body">
                        <div>
                            <p class="font-weight-bolder text-danger text-center ">Est-vous sûr de vouloir supprimer cet élement</p>
                        </div>
                        <div class="modal-footer text-center">
                            <a href="?id= <?= $resultat['id'] ?>"><button type="button " class="btn btn-danger">Supprimer</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- paging -->
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                <li class="page-item">
                    <a class="page-link" href="#" tabindex="-1">Précédent</a>
                </li>

                <?php for ($i = 1; $i <= $nbr_page; $i++) : ?>
                    <?php if ($page != $i) : ?>

                        <li class="page-item"><a class="page-link" href="?page=<?= $i ?>"><?= $i; ?></a></li>

                    <?php else : ?>
                        <li class="page-item active"><a class="page-link" href="?page=<?= $i ?>"><?= $i; ?></a></li>

                    <?php endif ?>

                <?php endfor ?>

                <li class="page-item">
                    <a class="page-link" href="#">Suivant</a>
                </li>
            </ul>
        </nav>


    </div>
</div>
</div>
</div>
<!-- footer -->
<?php include('inc_footer.php'); ?>