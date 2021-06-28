<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>G7solution</title>
	<script src="https://kit.fontawesome.com/5da465d417.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<!--Header + menu-->
	<?php include 'header.php'; ?>

	<!-- formulaire d'inscription -->

	<h1 class="titre-blog"> <span class="span-blog">Contactez-nous</span></h1>

	<div class="contenaire-contact">

		<form class="form-contact">
			<h1 class="titre-form-inscription">Contactez-nous </h1>

			<div class="div-inscription">
				<label>Choisissez votre sujet :</label>
				<select class="liste-deroulante">
					<option>Recrutement</option>
					<option>Formations</option>
					<option>Conseils</option>
					<option>Autres</option>
				</select>
			</div>

			<div class="div-inscription">
				<label>Nom :</label><input class="input-inscription" type="password" name="" placeholder="Prénom">
			</div>

			<div class="div-inscription">
				<label>Prénom :</label><input class="input-inscription" type="password" name="" placeholder="E-mail">
			</div>

			<div class="div-inscription">
				<label>E-mail :</label><input class="input-inscription" type="password" name="" placeholder="Mot de passe">
			</div>

			<div class="div-inscription">
				<label>Message :</label> <textarea class="message" placeholder="message"></textarea>
			</div>


			<button class="retour-connexion">ENVOYER</button>
		</form>

		<div class="infos-contact">
			<h1 class="titre-visiteur">Informations</h1>
			<p class="p-connexion">Adress : 32 rue Riquet / 53 rue de la Colombette 31000 Toulouse <br><br> Adress e-mail : contact@g7solution.fr <br><br> Numéro de téléphone : 06 19 44 53 34 </p>
		</div>


	</div>
	<!-- Pied de page -->
	<?php include 'footer.php'; ?>




</body>