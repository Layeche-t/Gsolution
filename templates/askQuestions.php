<?php
require_once('../inc_config.php');
?>
<!--Header + menu-->
<?php include 'inc_header.php'; ?>

<h2 class="titel-pages font-weight-bold">FAQ</h2>

<div class="container mt-4 mb-4">
	<div class="row">
		<div class="btn-group btn-breadcrumb ml-1 mb-4">
			<a href="index.php" class="btn btn-default"><i class="fas fa-home"></i></a>
			<a href="#" class="btn btn-default font-weight-bold a-color ">Foire aux questions <i class="fas fa-chevron-right"></i></a>
		</div>
	</div>
	<div id="accordion" role="tablist">

		<!-- start -->
		<div class="card row">
			<div class="card-header color-forgot" role="tab" id="headingOne">
				<h6 class="mb-0 font-weight-bold" data-toggle="collapse" href="#collapseOne" role="button" aria-expanded="true" aria-controls="collapseOne">
					Quels sont les bénéfices de la formation professionnelle ?
				</h6>
			</div>
			<div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
				<div class="card-body card-footer">
					Pour l'entreprise, la formation professionnelle permet d'enrichir le capital humain de son organisation. </div>
			</div>
		</div>

		<div class="card row">
			<div class="card-header color-forgot" role="tab" id="headingTwo">
				<h6 class="mb-0 font-weight-bold" data-toggle="collapse" href="#collapseTwo" role="button" aria-expanded="true" aria-controls="collapseOne">
					Comment accéder aux offres d'apprentissage dans la fonction publique ?
				</h6>
			</div>
			<div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
				<div class="card-body card-footer">
					Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. </div>
			</div>
		</div>

		<div class="card row">
			<div class="card-header color-forgot" role="tab" id="headingThree">
				<h6 class="mb-0 font-weight-bold" data-toggle="collapse" href="#collapseThree" role="button" aria-expanded="true" aria-controls="collapseOne">
					Quelles sont les formations, diplômes et métiers de l'enseignement supérieur Culture ? </h6>
			</div>
			<div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
				<div class="card-body card-footer ">
					Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
				</div>
			</div>
		</div>

		<div class="card row">
			<div class="card-header color-forgot" role="tab" id="headingThree">
				<h6 class="mb-0 font-weight-bold" data-toggle="collapse" href="#collapseFour" role="button" aria-expanded="true" aria-controls="collapseOne">
					Pourquoi suivre une formation ?</h6>
			</div>
			<div id="collapseFour" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
				<div class="card-body card-footer ">
					La formation professionnelle permet de monter en compétences au gré des évolutions technologiques ou sectorielles. </div>
			</div>
		</div>
	</div>
</div>


<?php include 'inc_footer.php'; ?>