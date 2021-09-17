<?php
require_once('../inc_config.php');
?>

<?php include 'inc_header.php'; ?>
<h1 class="titel-pages font-weight-bold">Connexion</h1>



<div class="container px-5 py-5 mx-auto">
    <!--  -->
    <?php if (isset($_GET['error']) && $_GET['error'] == 'eml') : ?>
        <div class="alert alert-danger text-center font-weight-bold" role="alert">
            Votre email ou mot de passe incorrect !
        </div>
    <?php endif ?>

    <?php if (isset($_GET['secs'])) : ?>
        <div class="alert alert-success text-center font-weight-bold" role="alert">
            Votre mot de passe a été changé avec succès !
        </div>
    <?php endif ?>
    <!--  -->
    <?php if (isset($_GET['error']) && $_GET['error'] == 'mdp') : ?>
        <div class="alert alert-danger text-center font-weight-bold" role="alert">
            Votre email ou mot de passe incorrect !
        </div>
    <?php endif ?>

    <?php if (isset($_GET['error']) && $_GET['error'] == 'empty') : ?>
        <div class="alert alert-danger text-center font-weight-bold" role="alert">
            Merci de saisir vos données !
        </div>
    <?php endif ?>

    <?php if (isset($_GET['error']) && $_GET['error'] == 'atp') : ?>
        <div class="alert alert-danger text-center font-weight-bold" role="alert">
            Votre inscription est toujours en attent de validation !
        </div>
    <?php endif ?>
    <?php if (isset($_GET['success'])) : ?>
        <div class="alert alert-success text-center font-weight-bold" role="alert">
            Les données sont bien été insérées
        </div>
    <?php endif; ?>


    <div class="card card0">
        <div class="d-flex flex-lg-row flex-column-reverse">
            <div class="card card1">
                <div class="row justify-content-center my-auto">
                    <div class="col-md-8 col-10 my-5">
                        <h2 class="mb-2 text-center font-weight-bold heading">Bienvenu !</h2>
                        <h3 class="mb-5 text-center heading">Vous êtes déja inscrit</h3>
                        <form action="../controllers/authontification.php" method="POST">
                            <div class="form-group"> <label class="form-control-label text-muted ">E-mail</label> <input type="text" name="email" placeholder="Votre e-mail" class="form-control"> </div>
                            <div class="form-group"> <label class="form-control-label text-muted">Mot de passe</label> <input type="password" name="password" placeholder="Mot de passe" class="form-control"> </div>
                            <div class="row justify-content-center my-3 px-3"> <button class="btn-block btn-color" name="" type="submit">Connexion</button> </div>
                        </form>
                        <div class="row justify-content-center my-1"> <a href="forgot_password.php"><small class="text-body">Mot de passe oblié</small></a> </div>
                    </div>
                </div>
            </div>
            <div class="card card2">
                <div class="my-auto mx-md-5 px-md-2 right">
                    <h3 class="text-body font-weight-bold">We are more than just a company</h3> <small class="text-body font-weight-bold">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</small>
                </div>

                <div class=" text-center mb-5">
                    <p href="#" class="sm-text mx-auto mb-1 font-weight-bold">Vous n'avez pas de compte ?<a href="registrationForm.php"><button class="btn btn-white ml-2">Créer un compte</button></a></p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'inc_footer.php'; ?>