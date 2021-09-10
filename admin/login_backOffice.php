<?php
require_once('../inc_config.php');
?>

<!doctype html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/5da465d417.js" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../styles/styleOffice.css">
    <title>Authentification</title>
</head>

<body>
    <div class="registration-form">

        <form action="../controllers/authontification_backOffice.php" method="POST">

            <div class="form-icon">
                <span><i class="far fa-user"></i></span>
            </div>

            <!-- errors -->
            <?php if (isset($_GET['error']) && $_GET['error'] == 'K') : ?>
                <div class="alert alert-danger text-center font-weight-bold" role="alert">
                    Votre email est incorrect !
                </div>
            <?php endif; ?>

            <?php if (isset($_GET['error']) && $_GET['error'] == 'nok') : ?>
                <div class="alert alert-danger text-center font-weight-bold" role="alert">
                    Votre mot de passe est incorrect !
                </div>
            <?php endif; ?>

            <?php if (isset($_GET['error']) && $_GET['error'] == 'role') : ?>
                <div class="alert alert-danger text-center font-weight-bold" role="alert">
                    Vous n'êtes pas administrateur !
                </div>
            <?php endif; ?>

            <div class="form-group">
                <input type="text" class="form-control item" name="email" placeholder="Email">
            </div>
            <div class="form-group">
                <input type="password" class="form-control item" name="password" placeholder="Password">
            </div>

            <button type="" class="btn btn-block create-account">Connexion</button>

        </form>

        <div class="social-media">
            <h1>G7solution</h1>
        </div>
    </div>
</body>

</html>