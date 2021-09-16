<?php
// connexion to database
require_once('../inc_config.php');

// main header
include 'inc_header.php';
?>
<!-- start of form -->
<div class="container padding-bottom-3x mb-5 mt-5">
    <div class="row justify-content-center ">
        <div class="col-lg-7 col-md-10 px-0 color-forgot1 border">
            <!-- title -->
            <h2 class="text-center font-weight-bold color-forgot card-header"> Mot de passe oublié </h2>

            <!-- return of action -->
            <div class="container  mt-3">
                <?php if (isset($_GET['success'])) : ?>
                    <div class="alert alert-success text-center font-weight-bold" role="alert">
                        Un lien vient d'être envoyé à votre adresse email !
                    </div>
                <?php endif; ?>
                <!-- return of error -->
                <?php if (isset($_GET['error']) && $_GET['error'] == 'vid') : ?>
                    <div class="alert alert-danger text-center font-weight-bold" role="alert">
                        Veuillez saisir votre mail !
                    </div>
                <?php endif ?>
                <!-- return of error -->
                <?php if (isset($_GET['error']) && $_GET['error'] == 'noc') : ?>
                    <div class="alert alert-danger text-center font-weight-bold" role="alert">
                        Cet mail n'exsiste pas!
                    </div>
                <?php endif ?>
                <!-- return of error -->
                <?php if (isset($_GET['error']) && $_GET['error'] == 'notok') : ?>
                    <div class="alert alert-danger text-center font-weight-bold" role="alert">
                        Aucun lien n'a été retrouvé
                    </div>
                <?php endif ?>

                <!-- indications -->
                <p class="">Le changement de votre mot de passe en trois étapes faciles : </p>
                <ol class="list-unstyled font-weight-bold">
                    <li><span class="text-primary text-medium"> </span> 1- Entrez votre adresse mail associé à votre compte ci-dessous</li>
                    <li><span class="text-primary text-medium"></span>2- Notre système vous enverra un lien temporaire</li>
                    <li><span class="text-primary text-medium"></span>3- Utilisez le lien pour réinitialiser votre mot de passe</li>
                </ol>
            </div>
            <!-- form -->
            <form action="../controllers/forgot.php" class=" mt-4" method="POST">
                <div class="card-body">
                    <div class="form-group">
                        <label for="email-for-pass">Entrez votre adresse email : </label>
                        <input class="form-control" type="text" name="email" required="">
                        <small class="form-text text-muted"></small>
                    </div>
                </div>
                <div class=" text-center mb-4">
                    <button class="btn btn-success mr-2" type="submit" name="envoyer">POURSUIVRE</button>
                    <button class="btn btn-danger ml-2" type="submit">ABANDONNER</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- footer -->
<?php include 'inc_footer.php'; ?>