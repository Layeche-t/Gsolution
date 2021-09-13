<?php

//connxion à la base de données
require_once('../inc_config.php');
//l'objet
$user = new User();


//methode select par
if (isset($_SESSION['admi']['id'])) {
    $accepteds = $user->findAll($user::TABLE);
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
$_SESSION['info']['table'] = $user::TABLE;


// accepter un user
if (isset($_GET['accept']) && $_GET['accept'] !== '') {

    $updeat = $user->updateById(['accepted' => 1, 'id' => $_GET['accept']], $user::TABLE);
    header('Location: ../admin/accepted_display.php?ok');
    exit();
}

if (isset($_GET['cancel']) && $_GET['cancel'] !== '') {

    $updeat = $user->updateById(['accepted' => 0, 'id' => $_GET['cancel']], $user::TABLE);
    header('Location: ../admin/accepted_display.php?ok');
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
        <div class='container mb-4'>
            <div class='card'>

                <!--titre du dashbord -->
                <div class='card-header'>
                    <h1>Le contenu de bibliothèque</h1>

                    <!--success ajout-->
                    <?php if (isset($_GET['success'])) : ?>
                        <div class="alert alert-success text-center font-weight-bold" role="alert">
                            Votre ficher vient d'être ajouté
                        </div>
                    <?php endif ?>

                    <!--success suppression-->
                    <?php if (isset($_GET['delete'])) : ?>
                        <div class="alert alert-success text-center font-weight-bold" role="alert">
                            Votre ficher vient d'être supprimé
                        </div>
                    <?php endif ?>

                    <?php if (isset($_GET['ok'])) : ?>
                        <div class="alert alert-success text-center font-weight-bold" role="alert">
                            La modification a bien été prise en compte
                        </div>
                    <?php endif ?>

                    <div class='card-body'>
                        <input type="text" class="search" id="search1" placeholder="Chercher un client "></input>

                        <!--contenu du tableau -->
                        <table id="tableUsers" class="table">
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
                                foreach ($accepteds as  $accepted) :
                                    $num = $num + 1;
                                ?>

                                    <tr>
                                        <th scope="row"> <?= $num ?> </th>
                                        <td> <?= $accepted['firstname'] ?> </td>
                                        <td> <?= $accepted['lastname'] ?> </td>
                                        <td>
                                            <?php if ($accepted['accepted'] == 0) { ?>
                                                <a type="button" class="btn btn-success" href="?accept=<?= $accepted['id'] ?>">Accepter</a>
                                            <?php } else { ?>
                                                <a type="button" class="btn btn-danger" href="?cancel=<?= $accepted['id'] ?>">Désactiver</a>

                                            <?php } ?>
                                        </td>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                        <!-- fin du tableau -->
                        <?php include('java.html'); ?>

                    </div>
                </div>
            </div>
        </div>


        <!--import du footer-->
    </div>
    <?php include('inc_footer.php'); ?>