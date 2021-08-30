<?php
require_once('../inc_config.php');
?>

<?php include 'inc_header.php'; ?>
<div class="container padding-bottom-3x mb-5 mt-5">

    <div class="row justify-content-center ">
        <div class="col-lg-7 col-md-10 px-0 color-forgot1 border">
            <h2 class="text-center font-weight-bold color-forgot card-header"> Mot de passe oublié </h2>

            <form action="../controllers/forgot.php" class=" mt-4" method="POST">
                <div class="card-body">
                    <div class="form-group"> <label for="email-for-pass">Entrez votre nouveau mot passe : </label> <input class="form-control" type="password" name="password" required=""><small class="form-text text-muted"></small> </div>
                    <div class="form-group"> <label for="email-for-pass">Confimez votre mot de passe : </label> <input class="form-control" type="password" name="confPassword" required=""><small class="form-text text-muted"></small> </div>
                </div>
                <div class="text-center mb-4">
                    <button class="btn btn-success" type="submit" name="envoyer">POURSUIVRE</button>
                    <button class="btn btn-danger" type="submit">ABANDONNER</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include 'inc_footer.php'; ?>