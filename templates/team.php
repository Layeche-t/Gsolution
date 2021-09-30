<?php
include_once '../inc_config.php';


$user = new User();

$teams = $user->findBy(['role' => 'team'], 30, $user::TABLE);

$crumbs = explode("/", $_SERVER["REQUEST_URI"]);
$i = implode($crumbs);






// récup nbr du tableau 
$count = $bdd->query("SELECT count(id) AS fa FROM users WHERE role = 'team' ");
$count->setFetchMode(PDO::FETCH_ASSOC);
$count->execute();
$tcount = $count->fetchAll();


//pagination 
// @$page = $_GET['page'];
// if (empty($page)) {
// 	$page = 1;
// }
// $nbr_element_par_page = 8;
// $nbr_page = ceil($tcount[0]['fa'] / $nbr_element_par_page);
// $debut = ($page - 1) * $nbr_element_par_page;


// // récup data
// $sel = $bdd->query("SELECT * FROM users WHERE role= 'team' LIMIT $debut, $nbr_element_par_page");

// $sel->setFetchMode(PDO::FETCH_ASSOC);
// $sel->execute();
// $resultats = $sel->fetchAll();
// if (count($resultats) == 0) {
// 	header("Location: team.php");
// }

?>




<!--Header + menu-->
<?php include 'inc_header.php'; ?>




<div class="container">
	<h3 class="mt-3 ml-1 mb-0 font-weight-bold titel ">L'Equipe </h3>

	<div class="row">
		<div class="btn-group btn-breadcrumb ml-1 mb-4">
			<a href="#" class="btn btn-default "><i class="fas fa-home"></i></a>
			<a href="#" class="btn btn-default font-weight-bold a-color">Snippets <i class="fas fa-chevron-right"></i></a>
			<a href="#" class="btn btn-default font-weight-bold a-color">Breadcrumbs <i class="fas fa-chevron-right"></i></a>
			<a href="#" class="btn btn-default font-weight-bold a-color">Default</a>
		</div>
	</div>

	<div class="  row text-center mb-5 ">
		<!-- Team item -->
		<?php foreach ($resultats as $resultat) : ?>
			<div class="col-xl-3 col-sm-6 mb-5 ">
				<div class="color-forgot1 rounded shadow-sm py-5 px-4 coloooor" style="height: 300px;">

					<?php
					echo  "<img src='../upload/" . $resultat['image'] . "'   width='100'  class='img-fluid rounded-circle mb-3 img-thumbnail shadow-sm' \>";
					?>
					<h5 class="mb-0 mx-1 font-weight-bold "><?= $resultat['firstname'] . ' ' . $resultat['lastname'] ?></h5><span class="small text-uppercase text-muted font-weight-bold"><?= $resultat['function'] ?></span>
					<ul class=" mb-0 list-inline mt-3">
						<li class="list-inline-item"><a href="<?= $resultat['link_social'] ?>" class="social-link"><i class="fa fa-linkedin"></i></a></li>
					</ul>
				</div>
			</div>
		<?php endforeach; ?>
	</div>

	<nav aria-label="Page navigation example ">
		<ul class="pagination justify-content-center">
			<li class="page-item ">
				<a class="page-link color-forgot1 text-dark font-weight-bold" href="#" tabindex="-1">Précédent</a>
			</li>

			<?php for ($i = 1; $i <= $nbr_page; $i++) : ?>
				<?php if ($page != $i) : ?>

					<li class="page-item"><a class="page-link bg-white text-dark" href="?page=<?= $i ?>"><?= $i; ?></a></li>

				<?php else : ?>
					<li class="page-item bg-secondary"><a class="page-link bg-secondary text-dark " href="?page=<?= $i ?>"><?= $i; ?></a></li>

				<?php endif ?>

			<?php endfor ?>

			<li class="page-item">
				<a class="page-link color-forgot1 text-dark font-weight-bold" href="#">Suivant</a>
			</li>
		</ul>
	</nav>
</div>
<?php include_once 'inc_footer.php'; ?>

</body>

</html>