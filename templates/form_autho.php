<?php
require_once('../inc_config.php');
?>

<?php include 'inc_header.php'; ?>
<h1 class="titel-pages font-weight-bold">Connexion</h1>

<?php if (isset($_GET['success'])) : ?>
    <div class="alert">
        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
        <strong>Attetion ! les mots de passes inserés sont ne sont pas identiques ! </strong>
    </div>
<?php endif; ?>

<div class="container px-5 py-5 mx-auto">
    <div class="card card0">
        <div class="d-flex flex-lg-row flex-column-reverse">
            <div class="card card1">
                <div class="row justify-content-center my-auto">
                    <div class="col-md-8 col-10 my-5">
                        <h2 class="mb-2 text-center font-weight-bold heading">Bienvenu !</h2>
                        <h3 class="mb-5 text-center heading">Vous êtes déja inscrit</h3>
                        <div class="form-group"> <label class="form-control-label text-muted ">E-mail</label> <input type="text" id="email" name="email" placeholder="Votre e-mail" class="form-control"> </div>
                        <div class="form-group"> <label class="form-control-label text-muted">Mot de passe</label> <input type="password" id="psw" name="psw" placeholder="Mot de passe" class="form-control"> </div>
                        <div class="row justify-content-center my-3 px-3"> <button class="btn-block btn-color">Connexion</button> </div>
                        <div class="row justify-content-center my-1"> <a href="#"><small class="text-body">Mot de passe oblié</small></a> </div>
                    </div>
                </div>
            </div>
            <div class="card card2">
                <div class="my-auto mx-md-5 px-md-2 right">
                    <h3 class="text-body font-weight-bold">We are more than just a company</h3> <small class="text-body font-weight-bold">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</small>
                </div>

                <div class=" text-center mb-5">
                    <p href="#" class="sm-text mx-auto mb-1 font-weight-bold">Vous avez déja un compte ?<button class="btn btn-white ml-2">Créer un compte</button></p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'inc_footer.php'; ?>