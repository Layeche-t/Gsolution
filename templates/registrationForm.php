<?php include 'inc_header.php'; ?>
<h1 class="titel-pages font-weight-bold">Créer un compte</h1>

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
                    <div class="col-md-9 col-10 my-5">
                        <h2 class="mb-2 text-center font-weight-bold heading">Bienvenu !</h2>
                        <h3 class="mb-5 text-center heading">Vous n'êtes pas encore inscrit</h3>

                        <div class="">
                            <label class="form-check-label py-1 mr-2 ml-2 "> Votre sexe </label>
                            <div class="form-check-inline py-1 px-2">
                                <input type="radio" class="form-check-input" name="optradio"> <label class="form-check-label">M
                                </label>
                            </div>
                            <div class="form-check-inline ">
                                <input type="radio" class="form-check-input" name="optradio"> <label class="form-check-label">F
                                </label>
                            </div>
                        </div>

                        <div class=" my-3">
                            <label class="form-check-label py-1 mr-2 ml-2 "> Vous êtes ? </label>
                            <div class="form-check-inline py-1 ">
                                <input type="radio" class="form-check-input" name="optradio"> <label class="form-check-label">Stagiaire
                                </label>
                            </div>
                            <div class="form-check-inline">
                                <input type="radio" class="form-check-input" name="optradio"> <label class="form-check-label">Client
                                </label>
                            </div>
                        </div>


                        <div class="form-group"> <label class="form-control-label text-muted ">Nom</label> <input type="text" id="email" name="Nom" placeholder="Nom" class="form-control"> </div>
                        <div class="form-group"> <label class="form-control-label text-muted">Prénom</label> <input type="password" id="psw" name="psw" placeholder="Prénom" class="form-control"> </div>
                        <div class="form-group"> <label class="form-control-label text-muted ">E-mail</label> <input type="text" id="email" name="email" placeholder="E-mail" class="form-control"> </div>
                        <div class="form-group"> <label class="form-control-label text-muted">Mot de passe</label> <input type="password" id="psw" name="psw" placeholder="Mot de passe" class="form-control"> </div>
                        <div class="form-group"> <label class="form-control-label text-muted">Confirmation de mot de passe</label> <input type="password" id="psw" name="psw" placeholder="Mot de passe" class="form-control"> </div>

                        <div class="border my-3">
                            <div class="form-check-inline">
                                <input type="checkbox" class="form-check-input" value="">
                            </div>
                            <label class="form-check-label "> J'accepte les conditions générales et la politique de confidentialité </label>
                        </div>

                        <div class="row justify-content-center my-3 px-3"> <button class="btn-block btn-color">Enregistrer</button> </div>
                        <div class="row justify-content-center my-1"> <a href="#"><small class="text-body">Lire les conditions générales</small></a> </div>
                    </div>
                </div>
            </div>
            <div class="card card2">
                <div class="my-auto mx-md-5 px-md-2 right" style="margin: 0px;">
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