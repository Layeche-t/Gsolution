<!--Header + menu-->
<?php
include_once '../inc_config.php';

$post = new Post();
$blogs = $post->findBy(['type' => 'blog'], 1000, $post::TABLE);



// récup nbr du tableau 
$count = $bdd->query("SELECT count(id) AS fa FROM posts WHERE type = 'blog'");
$count->setFetchMode(PDO::FETCH_ASSOC);
$count->execute();
$tcount = $count->fetchAll();


//pagination 
@$page = $_GET['page'];
if (empty($page)) {
	$page = 1;
}
$nbr_element_par_page = 5;
$nbr_page = ceil($tcount[0]['fa'] / $nbr_element_par_page);
$debut = ($page - 1) * $nbr_element_par_page;


// récup data
$sel = $bdd->query("SELECT * FROM posts WHERE type= 'blog' LIMIT $debut, $nbr_element_par_page");


$sel->setFetchMode(PDO::FETCH_ASSOC);
$sel->execute();
$resultats = $sel->fetchAll();
// if (count($resultats) == 0) {
// 	header("Location: ");
// }

?>

<!-- Header -->
<?php include 'inc_header.php'; ?>


<div class="container" style="margin-top:50px;">
	<h3 class="mt-3 ml-1 mb-0 font-weight-bold titel ">Blog </h3>

	<div class="row">
		<div class="btn-group btn-breadcrumb ml-1 mb-4">
			<a href="#" class="btn btn-default "><i class="fas fa-home"></i></a>
			<a href="#" class="btn btn-default font-weight-bold a-color">Blog <i class="fas fa-chevron-right"></i></a>
		</div>
	</div>

	<div class="row">
		<?php foreach ($resultats as $resultat) : ?>
			<div class="col-md-3 mb-4">

				<div class="card-sl">
					<?php
					echo  "<img src='../upload/" . $resultat['picture'] . "'width='100%' height='200px'>";
					?>

					<div class="color-forgot1 d-flex justify-content-center " style="height: 40px !important;">
						<p class="mt-2 font-weight-bold"> <?= $resultat['titel'] ?></p>
					</div>
					<div class="card-text text-center color-forgot1 border border-top-0" style="height: 160px !important;">
						<p class="mt-0"> <?= $resultat['description'] ?></p>
					</div>
					<a href="page_blog.php?id= <?= $resultat['id'] ?>" class="card-button font-weight-bold"> Lire plus..</a>
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

<?php include 'inc_footer.php'; ?>