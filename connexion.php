<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>G7solution</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://kit.fontawesome.com/5da465d417.js" crossorigin="anonymous"></script>
</head>

<body>

    <?php include 'header.php';?>

    <h1 class="titre-blog"> <span class="span-blog">CONNEXION</span></h1>

    <div class="contenaire-connexion">
    
    		<form class="form-connexion">
    			<h1>Déja inscrit ! </h1>
    			<div class="social-container">
					<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
					<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
					<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
				</div>
				<p class="normal">Ou par votre compte</p>
				<input class="input-connexion" type="text" name="" placeholder="E-mail">
				<input class="input-connexion" type="password" name="" placeholder="Mot de passe">
				<a class="mot-passe" href="#">Mot de passe oublié ? </a>
				<button class="button-connexion">Connexion</button>
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

    <?php include 'footer.php';?>


</body>
</html>