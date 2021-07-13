<?php
require_once('../inc_config.php');
?>

<?php include 'header.php'; ?>
<h1 class="titre-blog"> <span class="span-blog">CONNEXION</span></h1>

<?php if (isset($_GET['success'])) : ?>
    <div class="alert">
        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
        <strong>Attetion ! les mots de passes inserés sont ne sont pas identiques ! </strong>
    </div>
<?php endif; ?>

<div class="contenaire-connexion">

    <form class="form-connexion" method="POST" action="../controllers/authontification.php">
        <h1>Déja inscrit !</h1>

        <!-- gestion des erreurs -->
        <?php if (isset($_GET['error']) && $_GET['error'] == 'nok') : ?>
            <div class="yes"><span> Email ou mot de passe incorrect </span></div>
        <?php endif ?>

        <div class="social-container">
            <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
            <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
        </div>

        <p class="normal">Ou par votre compte</p>
        <input class="input-connexion" type="text" name="email" placeholder="E-mail">
        <input class="input-connexion" type="password" name="password" placeholder="Mot de passe">
        <a class="mot-passe" href="#">Mot de passe oublié ? </a>
        <button class="button-connexion" name="valider">Connexion</button>
    </form>


    <div class="infos-connexion">
        <h1 class="titre-visiteur">Cher visiteur,</h1>
        <p class="p-connexion">Vous n'êtes pas encore inscrit vous pouvez le faire en cliquant sur le bouton s'inscrire</p>
        <button class="connexion-inscription"><a class="direction" href="../templates/registrationForm.php"> S'inscrire </a></button>
    </div>


</div>
<div class="info-connexion">

    <?php include 'footer.php'; ?>