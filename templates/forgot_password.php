<?php include 'inc_header.php'; ?>

<div class="container padding-bottom-3x mb-5 mt-5">
    <?php if (isset($_GET['success'])) : ?>
        <div class="alert alert-success" role="alert">
            Un nouveau mot de passe vient d'être envoyé à votre adresse email !
        </div>
    <?php endif; ?>

    <?php if (isset($_GET['error']) && $_GET['error'] == 'no') : ?>
        <div class="alert alert-danger text-center font-weight-bold" role="alert">
            Votre mot de passe n'est pas
        </div>
    <?php endif ?>

    <div class="row justify-content-center ">
        <div class="col-lg-7 col-md-10 px-0 color-forgot1 border">
            <h2 class="text-center font-weight-bold color-forgot card-header"> Mot de passe oublié </h2>
            <div class="container mt-3">

                <p class="">Changez votre mot de passe en trois étapes faciles : </p>
                <ol class="list-unstyled font-weight-bold">
                    <li><span class="text-primary text-medium"> </span> 1- Entrez votre adresse mail associé à votre compte ci-dessous.</li>
                    <li><span class="text-primary text-medium"></span>2- Notre système vous enverra un lien temporaire.</li>
                    <li><span class="text-primary text-medium"></span>3- Utilisez le lien pour réinitialiser votre mot de passe.</li>
                </ol>
            </div>

            <form action="../controllers/forgot.php" class=" mt-4" method="POST">
                <div class="card-body">
                    <div class="form-group"> <label for="email-for-pass">Entrez votre adresse email : </label> <input class="form-control" type="text" name="email" required=""><small class="form-text text-muted"></small> </div>
                </div>
                <div class="card-footer text-center color-forgot">
                    <button class="btn btn-success" type="submit" name="envoyer">POURSUIVRE</button>
                    <button class="btn btn-danger" type="submit">ABANDONNER</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include 'inc_footer.php'; ?>