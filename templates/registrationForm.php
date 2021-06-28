<?php  

 
   session_start();
    include 'database.php';
   @$firstname = $_POST["firstname"];
   @$lastname = $_POST["lastname"];
   @$email = $_POST["email"];
   @$password= $_POST["password"];
   @$submit= $_POST["submit"];

   if( isset($submit)){
     
         
         $select=$bdd->prepare("SELECT id_user FROM users WHERE email=? LIMIT 1");
         $select->execute(array($email));
         $tab=$select->fetchAll();
         var_dump( $tab);

         if(count($tab)>0)
            $erreur="Login existe déjà!";
   		 }
         else{
            $ins = $bdd->prepare('INSERT INTO users (firstname, lastname, email, password) VALUES(?,?,?,?)');
        	$ins->execute(array($firstname,$lastname,$email,md5($password)));
              echo "Youy"; }  
      
?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>G7solution</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>

	<!--Header + menu-->
		<?php include 'header.php';?>

		<!-- formulaire d'inscription -->

		<h1 class="titre-blog"> <span class="span-blog">Inscription</span></h1>

   			<div class="contenaire-inscritpion">
    
    		<form class="form-inscription"  method="POST" action="">
    			<h1 class="titre-form-inscription">Créer un compte </h1>

    			<div class="checkbox-inscription">
    				<label class="label-checkbok-sex"> Votre sexe </label>
   					<input type="checkbox" name=""  checked> <label>M</label>
   					<input type="checkbox" name="" > <label>F</label>
   				</div>

   				<div class="checkbox-inscription">
   					<label class="label-checkbok">Vous êtes ? </label>
   					<input type="checkbox" name=""  checked="checked"> <label>Stagiaire</label>
   					<input type="checkbox" name="" > <label>Client</label>
   				</div>

   				<div class="div-inscription">
					<label>Nom :</label> <input class="input-inscription" type="text" name="firstname" placeholder="Nom">
				</div>

				<div class="div-inscription">
					<label>Prénom :</label><input class="input-inscription" type="text" name="lastname" placeholder="Prénom">
				</div>

				<div class="div-inscription">
					<label>E-mail :</label><input class="input-inscription" type="text" name="email" placeholder="E-mail">
				</div>

				<div class="div-inscription">
					<label>Mot de passe :</label><input class="input-inscription" type="password" name="password" placeholder="Mot de passe">
				</div>

				<div class="checkbox-inscription">
   				<input type="checkbox" name=""> <span class="conditinos"> J'accepte les conditions générales et la politique de confidentialité </span>
   				</div>
				
				<button class="retour-connexion" name="submit">ENREGISTRER</button>
    		</form>

<!-- seconde partie -->
    		<div class="infos-inscription">
    			<h1 class="titre-visiteur">Cher visiteur</h1>
    			<p class="p-connexion">Si vous êtes inscrit vous pouvez revenir sur le formulaire de connexion</p>
    			<button class="connexion-inscription"><a class="direction" href="formulaire_inscription.php"> CONNEXION </a></button>
    		</div>


    	</div>
    	<!-- Pied de page -->
	<?php include 'footer.php';?>

</body>
</html>