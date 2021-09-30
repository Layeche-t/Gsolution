<?php
// connexion to database
require_once('../inc_config.php');
// header
include 'inc_header.php';

?>

<!-- main title -->
<h1 class="titel-pages font-weight-bold">Connexion</h1>



<div class="container px-5 py-5 mx-auto">
    <!-- error -->
    <?php if (isset($_GET['error']) && $_GET['error'] == 'eml') : ?>
        <div class="alert alert-danger text-center font-weight-bold" role="alert">
            Votre email ou mot de passe incorrect !
        </div>
    <?php endif ?>
    <!-- success -->
    <?php if (isset($_GET['secs'])) : ?>
        <div class="alert alert-success text-center font-weight-bold" role="alert">
            Votre mot de passe a été changé avec succès !
        </div>
    <?php endif ?>
    <!-- error -->
    <?php if (isset($_GET['error']) && $_GET['error'] == 'mdp') : ?>
        <div class="alert alert-danger text-center font-weight-bold" role="alert">
            Votre email ou mot de passe incorrect !
        </div>
    <?php endif ?>
    <!-- error -->
    <?php if (isset($_GET['error']) && $_GET['error'] == 'empty') : ?>
        <div class="alert alert-danger text-center font-weight-bold" role="alert">
            Merci de saisir vos données !
        </div>
    <?php endif ?>
    <!-- waiting -->
    <?php if (isset($_GET['error']) && $_GET['error'] == 'atp') : ?>
        <div class="alert alert-danger text-center font-weight-bold" role="alert">
            Votre inscription est toujours en attent de validation !
        </div>
    <?php endif ?>
    <!-- success -->
    <?php if (isset($_GET['success'])) : ?>
        <div class="alert alert-success text-center font-weight-bold" role="alert">
            Les données sont bien été insérées
        </div>
    <?php endif; ?>

    <!-- start form -->
    <div class="card card0">
        <div class="d-flex flex-lg-row flex-column-reverse">
            <!-- first part -->
            <div class="card card1">
                <div class="row justify-content-center my-auto">
                    <div class="col-md-8 col-10 my-5">
                        <h2 class="mb-2 text-center font-weight-bold heading">Bienvenu !</h2>
                        <h3 class="mb-5 text-center heading">Vous êtes déja inscrit</h3>
                        <form action="../controllers/authontification.php" method="POST">
                            <div class="form-group"> <label class="form-control-label text-muted ">E-mail</label> <input type="text" name="email" placeholder="Votre e-mail" class="form-control"> </div>
                            <div class="form-group"> <label class="form-control-label text-muted">Mot de passe</label> <input type="password" name="password" placeholder="Mot de passe" class="form-control"> </div>
                            <div class="row justify-content-center my-3 px-3">
                                <button class="btn-block btn-color" type="submit">Connexion</button>
                            </div>
                        </form>
                        <div class="row justify-content-center my-1">
                            <a class="forogt-pass" href="forgot_password.php">
                                <small class="text-dark-green forogt-pass">
                                    <h6>Mot de passe oublié ? </h6>
                                </small>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- last part -->
            <div class="card card2">
                <div class="my-auto mx-md-5 px-md-2 right" style="margin: 0px;">
                    <h3 class="text-body font-weight-bold text-center mb-3">G7solution</h3>
                    <small class="font-weight-bold">Votre partenaire en conseil et formation, vous accompagne du diagnostic à la réalisation de vos projets de développement, compétences et ressources : G7 Solution !</small><br><br>
                    <small class="text-center font-weight-bold">Adresse : 32 rue Riquet / 53 rue de la Colombette 31000 Toulouse</small>
                    <small class="text-center font-weight-bold">Téléphone : 06 19 44 53 34</small><br>
                    <small class="font-weight-bold">Email : contact@g7solution.fr</small>
                </div>

                <!-- link inscription -->
                <div class=" text-center mb-5">
                    <p href="#" class="sm-text mx-auto mb-1 font-weight-bold">Vous n'avez pas encore de compte ?<a href="registrationForm.php"><button class="btn btn-white ml-2"> S'inscrire </button></a></p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'inc_footer.php'; ?>