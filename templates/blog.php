<!--Header + menu-->
<?php
include_once '../inc_config.php';

$post = new Post();
$blogs = $post->findBy(['type' => 'blog'], 1000, $post::TABLE);



// récup nbr du tableau 
$count = $bdd->query("SELECT count(id) AS fa FROM posts WHERE type = 'blog' ");
$count->setFetchMode(PDO::FETCH_ASSOC);
$count->execute();
$tcount = $count->fetchAll();


//pagination 
@$page = $_GET['page'];
if (empty($page)) {
	$page = 1;
}
$nbr_element_par_page = 8;
$nbr_page = ceil($tcount[0]['fa'] / $nbr_element_par_page);
$debut = ($page - 1) * $nbr_element_par_page;


// récup data
$sel = $bdd->query("SELECT * FROM users WHERE role= 'team' LIMIT $debut, $nbr_element_par_page");

$sel->setFetchMode(PDO::FETCH_ASSOC);
$sel->execute();
$resultats = $sel->fetchAll();
if (count($resultats) == 0) {
	header("Location: blog.php");
}

?>

<!-- Header -->
<?php include 'inc_header.php'; ?>


<div class="container" style="margin-top:50px;">
	<h3 class="mt-3 ml-1 mb-0 font-weight-bold titel ">Blog </h3>

	<div class="row">
		<div class="btn-group btn-breadcrumb ml-1 mb-4">
			<a href="#" class="btn btn-default "><i class="fas fa-home"></i></a>
			<a href="#" class="btn btn-default font-weight-bold a-color">Snippets <i class="fas fa-chevron-right"></i></a>
			<a href="#" class="btn btn-default font-weight-bold a-color">Breadcrumbs <i class="fas fa-chevron-right"></i></a>
			<a href="#" class="btn btn-default font-weight-bold a-color">Default</a>
		</div>
	</div>

	<div class="row">
		<?php foreach ($blogs as $blog) : ?>
			<div class="col-md-3 mb-4">

				<div class="card-sl">
					<div class="card-image">
						<img src="https://images.pexels.com/photos/1149831/pexels-photo-1149831.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" />
					</div>

					<div class="card-heading text-center color-forgot1 border border-bottom-0 " style="height: 55px !important;">
						<?= $blog['titel'] ?>
					</div>
					<div class="card-text text-center color-forgot1 border border-top-0" style="height: 120px !important;">
						<?= $blog['description'] ?> </div>
					<a href=" #" class="card-button font-weight-bold"> Purchase</a>
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