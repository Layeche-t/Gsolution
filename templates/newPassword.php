<?php
require_once('../inc_config.php');
$user = new User();







include 'inc_header.php';



?>


<div class="container padding-bottom-3x mb-5 mt-5">

    <div class="row justify-content-center ">
        <div class="col-lg-7 col-md-10 px-0 color-forgot1 border">
            <h2 class="text-center font-weight-bold color-forgot card-header"> Changement de mot de passe </h2>
            <?php if (isset($_GET['error']) && $_GET['error'] == 'empwd') : ?>
                <div class="alert alert-danger text-center font-weight-bold" role="alert">
                    Merci de remplir les données !
                </div>
            <?php endif ?>

            <?php if (isset($_GET['error']) && $_GET['error'] == 'noid') : ?>
                <div class="alert alert-danger text-center font-weight-bold" role="alert">
                    Les deux mots de passe ne sont pas indentiques !
                </div>
            <?php endif ?>
            <?php if (isset($_GET['error']) && $_GET['error'] == 'ntkn') : ?>
                <div class="alert alert-danger text-center font-weight-bold" role="alert">
                    Aucun lien n'a été trouvé !
                </div>
            <?php endif ?>

            <form action="../controllers/password_change.php" class=" mt-4" method="POST">
                <div class="card-body">
                    <div class="form-group"> <input class="form-control" type="hidden" name="token" value="<?= @$_GET['token']; ?>"> <small class="form-text text-muted"></small> </div>
                    <div class="form-group"> <label for="email-for-pass">Entrez votre nouveau mot passe : </label> <input class="form-control" type="Password" name="newPassword" required=""><small class="form-text text-muted"></small> </div>
                    <div class="form-group"> <label for="email-for-pass">Confimez votre mot de passe : </label> <input class="form-control" type="password" name="confPassword" required=""><small class="form-text text-muted"></small> </div>
                </div>
                <div class="text-center mb-4">
                    <button class="btn btn-success" type="submit" name="envoyer">Changer le mot de passe</button>
                    <button class="btn btn-danger" type="submit">ABANDONNER</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include 'inc_footer.php'; ?>