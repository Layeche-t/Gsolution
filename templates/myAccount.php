<?php
require_once('../inc_config.php');

// if ($_SESSION['autoriser'] != 'oui') {
//     header('Location: ../templates/form_autho.php');
//     exit();
// }
$user = new User();

if (isset($_SESSION['user']['id'])) {
    $curentuser = $user->findOneBy(['id' => $_SESSION['user']['id']], $user::TABLE);
}

$_SESSION['info']['redirect'] = 'templates/myAccount';








include 'inc_header.php';
?>

<div class="row d-flex justify-content-center mt-5 mb-5">
    <div class="col-lg-8">
        <div class="card">

            <div class="card-header text-center">
                <h4 class="font-weight-bold card-title m-b-0">Mon compte</h4>
            </div>
            <!-- Gestion des erreurs -->
            <?php if (isset($_GET['error']) && $_GET['error'] == 'idmod') : ?>
                <div class="alert alert-danger text-center mt-3 " role="alert">
                    Ce mot de passe n'existe pas !
                </div>
            <?php endif; ?>

            <?php if (isset($_GET['error']) && $_GET['error'] == 'vidmod') : ?>
                <div class="alert alert-danger text-center mt-3" role="alert">
                    Les deux nouveaux mots de passe ne sont pas identiques !
                </div>
            <?php endif; ?>

            <?php if (isset($_GET['error']) && $_GET['error'] == 'vid') : ?>
                <div class="alert alert-danger" role="alert">
                    Les champs sont vides !
                </div>
            <?php endif; ?>

            <?php if (isset($_GET['yes'])) : ?>
                <div class="alert alert-success" role="alert">
                    Votre mot de passe a bien été changé
                </div>
            <?php endif; ?>

            <ul class="list-style-none">
                <li class="d-flex no-block card-body ">

                    <i class="fas fa-id-card  mr-4 mt-3 icon-liste"></i>
                    <div class="mt-3"> <span class="">Consulter et modifier mes coordonnées </span> </div>
                    <div class="ml-auto">
                        <button type="button" class="btn btn-primary btn-circle m-1" data-toggle="modal" data-target="#exampleModal">
                            <i class="fa fa-cog"></i>
                        </button>
                    </div>
                </li>
                <li class="d-flex no-block card-body border-top ">
                    <i class="fas fa-user-cog mr-4 mt-3 icon-liste"></i>
                    <div class="mt-3"> <span class="">Email d'utilisateur : <?= $curentuser->email; ?> </span> </div>
                    <div class="ml-auto">
                        <button type="button" class="btn btn-primary btn-circle m-1" data-toggle="modal" data-target="#exampleModal1">
                            <i class="fa fa-cog"></i>
                        </button>
                    </div>
                </li>
                <li class="d-flex no-block card-body border-top ">
                    <i class="fas fa-unlock-alt mr-4 mt-3 icon-liste"></i>
                    <div class="mt-3"> <span class="">Mot de passe : <?= $curentuser->password; ?> </span> </div>
                    <div class="ml-auto">
                        <button type="button" class="btn btn-primary btn-circle m-1" data-toggle="modal" data-target="#exampleModal2">
                            <i class="fa fa-cog"></i>
                        </button>
                    </div>
                </li>
            </ul>
        </div>



        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title " id="exampleModalLabel">Modification mes coordonnées</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="../controllers/update_users" method="POST">
                            <div class="mt-1 text-center"> <span class="">Nom: <?= $curentuser->lastname; ?> </span> </div>
                            <div class="mt-1 text-center"> <span class="">Prénom: <?= $curentuser->firstname; ?> </span> </div>
                            <div class="mt-1 text-center"> <span class="">Statut: <?= $curentuser->role;; ?> </span> </div>

                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Entrez votre nouveau nom :</label>
                                <input type="text" class="form-control" name="firstname" required>
                            </div>
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Entrez votre nouveau prénom :</label>
                                <input type="text" class="form-control" name="lastname" required>
                                <input type="text" class="form-control" name="id" value=<?= $curentuser->id; ?> hidden>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Abandonner</button>
                        <button type="submit" class="btn btn-primary submit-modification" name="modification">Sauvegarder les modifications </button>
                    </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- seconde -->
        <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title " id="exampleModal1Label">Modification mon email</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="../controllers/update_users.php" method="POST">
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Entrez votre nouvel email :</label>
                                <input type="text" class="form-control" id="recipient-name" name="email" required>
                                <input type="text" class="form-control" name="id" value=<?= $curentuser->id; ?> hidden>
                                <p class="text-center text-danger mt-2">Attetion votre ancien email ne sera plus valide</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Abandonner</button>
                                <button type="submit" class="btn btn-primary submit-modification" name="modification">Sauvegarder les modifications </button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>

        <!-- le troisième -->
        <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title " id="exampleModal2Label">Modifier mon mot de passe</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="../controllers/update_password.php" method="POST">
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Saisissez votre mot de passe actuel :</label>
                                <input type="password" class="form-control" id="recipient-name" name="oldpwd" required>

                                <label for="recipient-name" class="col-form-label">Saisissez votre nouveau mot de passe : </label>
                                <input type="password" class="form-control" id="recipient-name" name="password" required>

                                <label for="recipient-name" class="col-form-label">Confirmez votre mot de passe :</label>
                                <input type="password" class="form-control" id="recipient-name" name="confpwd" required>
                                <input type="text" class="form-control" name="id" value=<?= $curentuser->id; ?> hidden>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Abandonner</button>
                                <button type="submit" class="btn btn-primary submit-modification" name="modification">Sauvegarder les modifications </button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>

</div>


<?php include 'inc_footer.php'; ?>