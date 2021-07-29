<?php
include_once '../inc_config.php';



// pagination
// On détermine sur quelle page on se trouve
if (isset($_GET['page']) && !empty($_GET['page'])) {
	$currentPage = (int) strip_tags($_GET['page']);
} else {
	$currentPage = 1;
}

// On prépare la requête pour le count
$sql = "SELECT COUNT(id) AS nb_articles FROM `users` WHERE role='team'";
$query = $bdd->prepare($sql);
$query->execute();
$result = $query->fetch();
$nbEquipe = (int) $result['nb_articles'];

// On détermine le nombre d'articles par page
$parPage = 6;
// On calcule le nombre de pages total
$pages = ceil($nbEquipe / $parPage);

// Calcul du 1er article de la page
$premier = ($currentPage * $parPage) - $parPage;


// récupération des données 
$sql = "SELECT * FROM `users` WHERE role='team' LIMIT $premier, $parPage";
$query = $bdd->prepare($sql);
$query->execute();

$equipes = $query->fetchAll(PDO::FETCH_ASSOC);


?>

<!--Header + menu-->
<?php include 'inc_header.php'; ?>

<section class="mt-4" id="gallery">
	<div class="container">
		<div class="row">
			<!-- Le titre de la page -->
			<h1 class="card-title mb-3"> L'équipe </h1>
			<?php foreach ($equipes as $equipe) : ?>

				<div class="col-lg-4 mb-4">
					<div class="card">
						<?php
						echo '<img src="../upload/"' . $equipe['image'] . 'alt="Card image cap" class="card-img-top">';

						?>
						<div class="card " style="height: 12rem;">
							<h5 class="card-title mt-3 mr-3 titel-team "> <?= $equipe['firstname'], $equipe['lastname'] ?> </h5>
							<h6 class="card-title"><?= $equipe['function'] ?></h6>
						</div>
					</div>
				</div>
			<?php endforeach ?>

			<!--header-->


			</body>

			</html>