<?php

require_once('../inc_config.php');

?>


<?php include 'inc_header.php'; ?>
<h1 class="titel-pages font-weight-bold">Créer un compte</h1>





<div class="container px-5 py-5 mx-auto">
    <?php if (isset($_GET['success'])) : ?>
        <div class="alert alert-success" role="alert">
            Les données sont bien été insérées
        </div>
    <?php endif; ?>

    <?php if (isset($_GET['error']) && $_GET['error'] == 'pw') : ?>
        <div class="alert alert-danger text-center font-weight-bold" role="alert">
            Les mot de passes ne sont pas identiques !
        </div>
    <?php endif ?>

    <?php if (isset($_GET['error']) && $_GET['error'] == 'em') : ?>
        <div class="alert alert-danger text-center font-weight-bold" role="alert">
            Cet email existe déja ! Veuillez saisir un nouvel email
        </div>
    <?php endif ?>

    <div class="card card0">
        <div class="d-flex flex-lg-row flex-column-reverse">
            <div class="card card1">
                <div class="row justify-content-center my-auto">
                    <div class="col-md-9 col-10 my-5">
                        <h2 class="mb-2 text-center font-weight-bold heading">Bienvenu !</h2>
                        <h3 class="mb-5 text-center heading">Vous n'êtes pas encore inscrit</h3>

                        <form method="POST" action="../controllers/add.php">

                            <div class="my-3">
                                <label class="form-check-label py-1 mr-2 ml-2 "> Votre sexe </label>
                                <div class="form-check-inline py-1 px-2">
                                    <input type="radio" class="form-check-input" name="sexe" value="0" checked> <label class="form-check-label">M
                                    </label>
                                </div>
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="sexe" value="1"> <label class="form-check-label">F
                                    </label>
                                </div>
                            </div>

                            <div class="my-3">
                                <label class="form-check-label py-1 mr-2 ml-2 "> Vous êtes ? </label>
                                <div class="form-check-inline py-1 ">
                                    <input type="radio" class="form-check-input" name="role" value="stagaire" checked> <label class="form-check-label">Stagiaire
                                    </label>
                                </div>
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="role" value="client"> <label class="form-check-label">Client
                                    </label>
                                </div>
                            </div>


                            <div class="form-group"> <label class="form-control-label  ">Nom</label> <input type="text" id="email" name="firstname" placeholder="Nom" class="form-control" required> </div>
                            <div class="form-group"> <label class="form-control-label ">Prénom</label> <input type="text" id="psw" name="lastname" placeholder="Prénom" class="form-control" required> </div>
                            <div class="form-group"> <label class="form-control-label ">E-mail</label> <input type="email" id="email" name="email" placeholder="E-mail" class="form-control" required> </div>
                            <div class="form-group"> <label class="form-control-label ">Mot de passe</label> <input type="password" name="password" placeholder="Mot de passe" class="form-control" required> </div>
                            <div class="form-group"> <label class="form-control-label ">Confirmation de mot de passe</label> <input type="password" name="confirmPassword" placeholder="Mot de passe" class="form-control" required> </div>




                            <div class="row justify-content-center my-3 px-3"> <button class="btn-block btn-color" type="submit" name="validation">Enregistrer</button> </div>
                            <div class="row justify-content-center my-1"> <a class="a-color" href="#">Lire les conditions générales</a> </div>
                        </form>
                    </div>
                </div>
            </div>


            <div class="card card2">
                <div class="my-auto mx-md-5 px-md-2 right" style="margin: 0px;">
                    <h3 class="text-body font-weight-bold">We are more than just a company</h3> <small class="text-body font-weight-bold">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</small>
                </div>

                <div class=" text-center mb-5">
                    <p href="#" class="sm-text mx-auto mb-1 font-weight-bold">Vous avez déja un compte ?<button class="btn btn-white ml-2">Se connecter </button></p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'inc_footer.php'; ?>