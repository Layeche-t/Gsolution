<!--Header + menu-->
<?php include 'inc_header.php'; ?>
<h1 class="titel-pages font-weight-bold">Créer un compte</h1>


<!-- formulaire d'inscription -->
<div class="container px-5 py-5 mx-auto">




	<div class="card card0">
		<div class="d-flex flex-lg-row flex-column-reverse">
			<div class="card card1">
				<div class="row justify-content-center my-auto">
					<div class="col-md-12 col-10 my-5">
						<h2 class="mb-2 text-center font-weight-bold heading">Nous contacter !</h2>
						<h3 class="mb-5 text-center heading ">Merci de compléter le formulaire</h3>
						<?php if (isset($_GET['success'])) : ?>
							<div class="alert alert-success" role="alert">
								Les données sont bien été envoyés
							</div>
						<?php endif; ?>

						<form method="POST" action="../controllers/contact.php">
							<div class="form-group pr-5"> <label class="form-control-label  ">Nom</label> <input type="text" name="firstname" placeholder="Dupon" class="form-control" required> </div>
							<div class="form-group pr-5"> <label class="form-control-label ">Prénom</label> <input type="text" name="lastname" placeholder="Michel" class="form-control" required> </div>
							<div class="form-group pr-5"> <label class="form-control-label ">E-mail</label> <input type="email" name="email" placeholder="michel.dupon@gmail.com" class="form-control" required> </div>
							<div class="form-group pr-5"> <label class="form-control-label ">Téléphone</label> <input type="tel" name="number" placeholder="0622303030" maxlength="10" class="form-control" required> </div>

							<div class="input-group mt-5 mb-4 pr-5">
								<div class="input-group-prepend">
									<button class="btn btn-outline-secondary" type="button">Votre sujet</button>
								</div>
								<select name="subject" class="custom-select" aria-label="Example select with button addon" required>
									<option value="Renseignement" selected>Renseignement</option>
									<option value="Commande">Commande</option>
									<option value="Réclamation">Réclamation</option>
								</select>
							</div>
							<div class="mb-3 pr-5">
								<?php $message = ''; ?>

								<label for="exampleFormControlTextarea1" class="form-label ml-2">Message</label>
								<textarea class="form-control" id="exampleFormControlTextarea1" name="message" rows="4" maxlength="250" required>
								</textarea>


							</div>

							<div class="row form-group pr-5  my-3 px-3">
								<button class=" w-100 btn-color" type="submit" name="validation">Envoyer</button>
							</div>
							<div class="row justify-content-center my-1">
								<a class="forogt-pass" href="#">
									<small class="text-dark-green forogt-pass">
										<h6>Lire les conditions générales</h6>
									</small>
								</a>
							</div>
						</form>
					</div>
				</div>
			</div>


			<div class="card card2">
				<div class="my-auto mx-md-5 px-md-2 right" style="margin: 0px;">
					<h3 class="text-body font-weight-bold text-center mb-3">G7solution</h3>
					<small class="font-weight-bold">Votre partenaire en conseil et formation, vous accompagne du diagnostic à la réalisation de vos projets de développement, compétences et ressources : G7 Solution !</small><br><br>
					<small class="text-center font-weight-bold">Adresse : 32 rue Riquet / 53 rue de la Colombette 31000 Toulouse</small>
					<small class="text-center font-weight-bold">Téléphone : 06 19 44 53 34</small><br>
					<small class="font-weight-bold">Email : contact@g7solution.fr</small>
				</div>

				<div class=" text-center mb-5">
					<p href="#" class="sm-text mx-auto mb-1 font-weight-bold">Vous n'avez pas de compte ?
						<a href="form_autho.php">
							<button class="btn btn-white ml-2"> S'inscrire </button>
						</a>
					</p>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Pied de page -->
<?php include 'inc_footer.php'; ?>