<?php

//connxion à la base de données
require_once('../inc_config.php');
//l'objet
$user = new User();

$count = $bdd->query("SELECT *  FROM users WHERE role ='admin' OR role ='trainee'");
$count->setFetchMode(PDO::FETCH_ASSOC);
$count->execute();
$tcounts = $count->fetchAll();



//méthode select par




//supprimer un élement du tableau
if (isset($_GET['id'])) {
    $user->deleteById($_GET['id'], $user::TABLE);
    header('Location: ../admin/users_disply.php?delete');
    exit();
}

if (isset($_SESSION['info'])) {
    unset($_SESSION['info']);
}
$_SESSION['info']['redirect'] = 'user_disply';
$_SESSION['info']['table'] = $user::TABLE;
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
                    <div class="d-flex justify-content-center">
                        <div class="mb-2">
                            <h1>Utilisateurs</h1>
                        </div>
                    </div>

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
                        <div class="pb-3 text-center" role="group" aria-label="Basic mixed styles example">
                            <button type="button" class="btn back-color-green3 text-light  " data-bs-toggle="modal" data-bs-target="#exampleModal">Ajouter </button>
                        </div>
                        <!--contenu du tableau -->
                        <table class="table">
                            <!-- le header du tableau -->
                            <thead class="table-dark">
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Nom</th>
                                    <th scope="col">Prénom</th>
                                    <th scope="col">Fonction</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                <!-- la boucle foreach pour l'affichage -->
                                <?php
                                $num = 0;
                                foreach ($tcounts as $tcount) :
                                    $num = $num + 1;
                                ?>

                                    <tr>
                                        <th scope="row"> <?= $num ?> </th>
                                        <td class="bold-text w-25"> <?= $tcount['firstname'] ?> </td>
                                        <td class="bold-text w-25"> <?= $tcount['lastname'] ?> </td>
                                        <td class="bold-text w-25"> <?= $tcount['role'] ?> </td>
                                        <td class="bold-text w-25">
                                            <a href="users_modification.php?id= <?= $tcount['id'] ?>"><button type="button" class="btn btn-success">Modifier</button></a>
                                            <a href="?id= <?= $tcount['id'] ?>"><button type="button" class="btn btn-danger" onclick="return confirm('Vous êtes sûr de vouloir supprimer élément ?');">Supprimer</button>
                                        </td>
                                    </tr>

                                <?php endforeach ?>
                            </tbody>
                        </table>
                        <!-- fin du tableau -->
                    </div>
                </div>
                <div class="card-footer">
                    <p class="text-center pt-2">CREAT BY LAYECHE TORKI</p>
                </div>

            </div>
        </div>

        <!-- pop up d'ajout -->
        <div class=" modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                <label class="" for="exampleFormControlSelect1">Fonction</label>
                                <select class="form-control mt-2" id="exampleFormControlSelect1" name="role" required>
                                    <option value="user">Stagaire</option>
                                    <option value="admin">Administrateur</option>
                                </select>
                            </div>

                            <div class="form-check-inline">
                                <input type="hidden" name="sexe" value="0">
                            </div>
                            <div class="form-check-inline">
                                <input type="hidden" name="accepted" value="0">
                            </div>

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
                            <a href="?id= <?= $team['id'] ?>"><button type="button " class="btn btn-danger">Supprimer</button></a>
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