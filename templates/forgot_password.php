<?php include 'inc_header.php'; ?>

<div class="container padding-bottom-3x mb-2 mt-5">
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

    <div class="row justify-content-center">
        <div class="col-lg-8 col-md-10">
            <div class="forgot">
                <h2>Forgot your password?</h2>
                <p>Change your password in three easy steps. This will help you to secure your password!</p>
                <ol class="list-unstyled">
                    <li><span class="text-primary text-medium">1. </span>Enter your email address below.</li>
                    <li><span class="text-primary text-medium">2. </span>Our system will send you a temporary link</li>
                    <li><span class="text-primary text-medium">3. </span>Use the link to reset your password</li>
                </ol>
            </div>
            <form action="../controllers/forgot.php" class="card mt-4" method="POST">
                <div class="card-body">
                    <div class="form-group"> <label for="email-for-pass">Enter your email address</label> <input class="form-control" type="text" name="email" required=""><small class="form-text text-muted">Enter the email address you used during the registration on BBBootstrap.com. Then we'll email a link to this address.</small> </div>
                </div>
                <div class="card-footer"> <button class="btn btn-success" type="submit" name="envoyer">Get New Password</button> <button class="btn btn-danger" type="submit">Back to Login</button> </div>
            </form>
        </div>
    </div>
</div>

<?php include 'inc_footer.php'; ?>