<?php

//connxion to database
require_once('../inc_config.php');
//object 
$user = new User();

//methode by select 
if (isset($_SESSION['admi']['id'])) {
    $accepteds = $user->findAll($user::TABLE);
}

//delete element of table
if (isset($_GET['id'])) {
    $post->deleteById($_GET['id'], $post::TABLE);
    header('Location: ../admin/libraryDisplay?delete');
    exit();
}

// verificat session
if (isset($_SESSION['info'])) {
    unset($_SESSION['info']);
}
// creat session
$_SESSION['info']['redirect'] = 'filesDisplay';
$_SESSION['info']['table'] = $user::TABLE;


// accepe a user
if (isset($_GET['accept']) && $_GET['accept'] !== '') {

    $updeat = $user->updateById(['accepted' => 1, 'id' => $_GET['accept']], $user::TABLE);
    header('Location: ../admin/accepted_display.php?ok');
    exit();
}

// deactivate a user
if (isset($_GET['cancel']) && $_GET['cancel'] !== '') {

    $updeat = $user->updateById(['accepted' => 0, 'id' => $_GET['cancel']], $user::TABLE);
    header('Location: ../admin/accepted_display.php?ok');
    exit();
}

?>

<!-- header -->
<?php include('inc_header.php'); ?>

<!-- content dashbord-->
<div class='dashboard-app'>
    <header class='dashboard-toolbar'>
        <a href="#" class="menu-toggle"><i class="fas fa-bars"></i></a>
    </header>

    <div class='dashboard-content'>
        <div class='container mb-4'>
            <div class='card'>

                <!--title of dashbord -->
                <div class='card-header'>
                    <h1>Les demandes</h1>

                    <!--success add-->
                    <?php if (isset($_GET['success'])) : ?>
                        <div class="alert alert-success text-center font-weight-bold" role="alert">
                            Votre ficher vient d'être ajouté.
                        </div>
                    <?php endif ?>

                    <!--success delet-->
                    <?php if (isset($_GET['delete'])) : ?>
                        <div class="alert alert-success text-center font-weight-bold" role="alert">
                            Votre ficher vient d'être supprimé.
                        </div>
                    <?php endif ?>

                    <!--success modification -->
                    <?php if (isset($_GET['ok'])) : ?>
                        <div class="alert alert-success text-center font-weight-bold" role="alert">
                            La modification a bien été prise en compte.
                        </div>
                    <?php endif ?>

                    <div class='card-body'>
                        <!-- search bar -->
                        <input type="text" class="search mb-2 justify-content" id="search1" placeholder="Chercher un client "></input>

                        <!--content of table -->
                        <table id="tableUsers" class="table">

                            <!--  header of table-->
                            <thead class="table-dark">
                                <tr>
                                    <th scope="col">N°</th>
                                    <th scope="col">Nom</th>
                                    <th scope="col">Prénom</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>

                            <!-- body of table -->
                            <tbody>
                                <!-- la boucle foreach for display -->
                                <?php
                                $num = 0;
                                foreach ($accepteds as  $accepted) :
                                    $num = $num + 1;
                                ?>
                                    <!-- display data -->
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
                            <!-- end table -->
                        </table>

                        <!-- javaScript -->
                        <?php include('java.html'); ?>
                    </div>
                </div>
            </div>
        </div>


        <!--footer-->
    </div>
    <?php include('inc_footer.php'); ?>