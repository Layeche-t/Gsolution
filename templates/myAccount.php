<?php
require_once('../inc_config.php');

if ($_SESSION['autoriser'] != 'oui') {
    header('Location: ../templates/form_autho.php');
    exit();
}

include 'inc_header.php';
?>

<div class="row d-flex justify-content-center mt-5 mb-5">
    <div class="col-lg-8">
        <div class="card">

            <div class="card-header text-center">
                <h4 class="font-weight-bold card-title m-b-0">Mon compte</h4>
            </div>

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
                    <div class="mt-3"> <span class="">Email d'utilisateur : </span> </div>
                    <div class="ml-auto">
                        <button type="button" class="btn btn-primary btn-circle m-1" data-toggle="modal" data-target="#exampleModal1">
                            <i class="fa fa-cog"></i>
                        </button>
                    </div>
                </li>
                <li class="d-flex no-block card-body border-top ">
                    <i class="fas fa-unlock-alt mr-4 mt-3 icon-liste"></i>
                    <div class="mt-3"> <span class="">Mot de passe : </span> </div>
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
                        <form action="../controllers/updateMyAccount.php" method="POST">
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Entrez votre nouveau nom :</label>
                                <input type="text" class="form-control" id="recipient-name" name="lastname" required>
                            </div>
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Entrez votre nouveau prénom :</label>
                                <input type="text" class="form-control" id="recipient-name" name="firsttname" required>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Abandonner</button>
                        <button type="submit" class="btn btn-primary" name="envoyer">Sauvegarder les modifications </button>
                    </div>
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
                        <form action="../controllers/updateMyAccount.php" method="POST">
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Entrez votre nouvel email :</label>
                                <input type="text" class="form-control" id="recipient-name" name="lastname" required>
                                <p class="text-center text-danger mt-2">Attetion votre ancien email ne sera plus valide</p>
                            </div>

                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Abandonner</button>
                        <button type="submit" class="btn btn-primary" name="envoyer">Sauvegarder les modifications </button>
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
                        <form action="../controllers/updateMyAccount.php" method="POST">
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Saisissez votre mot de passe actuel :</label>
                                <input type="password" class="form-control" id="recipient-name" name="oldpwd" required>

                                <label for="recipient-name" class="col-form-label">Saisissez votre nouveau mot de passe : </label>
                                <input type="password" class="form-control" id="recipient-name" name="newpwd" required>

                                <label for="recipient-name" class="col-form-label">Confirmez votre mot de passe :</label>
                                <input type="password" class="form-control" id="recipient-name" name="confpwd" required>
                            </div>

                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Abandonner</button>
                        <button type="submit" class="btn btn-primary" name="envoyer">Sauvegarder les modifications </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


<?php include 'inc_footer.php'; ?>