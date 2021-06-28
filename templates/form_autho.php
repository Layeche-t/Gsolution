<?php include 'header.php'; ?>

<h1 class="titre-blog"> <span class="span-blog">CONNEXION</span></h1>

<div class="contenaire-connexion">

    <form class="form-connexion" method="POST" action="../controllers/authontification.php">
        <h1>Déja inscrit ! </h1>
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
        <button class="connexion-inscription"><a class="direction" href="formulaire_inscription.php"> S'inscrire </a></button>
    </div>


</div>
<div class="info-connexion">

</div>



</div>

<?php include 'footer.php'; ?>