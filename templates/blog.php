<!--Header + menu-->
<?php
include_once '../inc_config.php';

$post = new Post();
$blogs = $post->findBy(['type' => 'blog'], 1000, $post::TABLE);

// pagination
// On détermine sur quelle page on se trouve
if (isset($_GET['page']) && !empty($_GET['page'])) {
	$currentPage = (int) strip_tags($_GET['page']);
} else {
	$currentPage = 1;
}

// On prépare la requête pour le count
$sql = "SELECT COUNT(id) AS nb_articles FROM `posts` WHERE type='blog'";
$query = $bdd->prepare($sql);
$query->execute();
$result = $query->fetch();
$nbArticles = (int) $result['nb_articles'];
// On détermine le nombre d'articles par page
$parPage = 6;
// On calcule le nombre de pages total
$pages = ceil($nbArticles / $parPage);
// Calcul du 1er article de la page
$premier = ($currentPage * $parPage) - $parPage;

// récupération des données 
$sql = "SELECT * FROM `posts` WHERE type='blog' LIMIT $premier, $parPage";
$query = $bdd->prepare($sql);
$query->execute();
$articles = $query->fetchAll(PDO::FETCH_ASSOC);

?>

<!-- Header -->
<?php include 'inc_header.php'; ?>


<section class="mt-4" id="gallery">
	<div class="container">
		<div class="row">
			<!-- Le titre de la page -->
			<h1 class="card-title mb-3"> Blog </h1>
			<!-- L'affichage des résultats par un foreach -->
			<?php foreach ($articles as $article) : ?>

				<div class="col-md-4 mb-4">
					<div class="card">
						<?php
						echo  "<img src='../upload/" . $article['picture'] . "' width='355' height='300'\>";
						?>
						<div class=" card " style=" height: 15rem;">
							<h5 class="card-title "> <?= $article['titel'] ?> </h5>
							<p class="card-text font-weight-bold"><?= $article['description'] ?></p>
							<a href="" class="btn btn-outline-success btn-sm">Lire plus</a>
						</div>
					</div>
				</div>
			<?php endforeach ?>

			<!-- pagination -->
			<nav>
				<ul class="pagination justify-content-center">
					<!-- Lien vers la page précédente (désactivé si on se trouve sur la 1ère page) -->
					<li class="page-item <?= ($currentPage == 1) ? "disabled" : "" ?>">
						<a href="?page=<?= $currentPage - 1 ?>" class="page-link">Précédente</a>
					</li>
					<?php for ($page = 1; $page <= $pages; $page++) : ?>
						<!-- Lien vers chacune des pages (activé si on se trouve sur la page correspondante) -->
						<li class="page-item <?= ($currentPage == $page) ? "active" : "" ?>">
							<a href="?page=<?= $page ?>" class="page-link"><?= $page ?></a>
						</li>
					<?php endfor ?>
					<!-- Lien vers la page suivante (désactivé si on se trouve sur la dernière page) -->
					<li class="page-item <?= ($currentPage == $pages) ? "disabled" : "" ?>">
						<a href="?page=<?= $currentPage + 1 ?>" class="page-link">Suivante</a>
					</li>
				</ul>
			</nav>


			<!-- <div class="col-lg-4 mb-4">
				<div class="card">
					<img src="https://images.unsplash.com/photo-1477862096227-3a1bb3b08330?ixlib=rb-1.2.1&auto=format&fit=crop&w=700&q=60" alt="" class="card-img-top">
					<div class="card-body">
						<h5 class="card-title">Sunset</h5>
						<p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut eum similique repellat a laborum, rerum voluptates ipsam eos quo tempore iusto dolore modi dolorum in pariatur. Incidunt repellendus praesentium quae!</p>
						<a href="" class="btn btn-outline-success btn-sm">Read More</a>
						<a href="" class="btn btn-outline-danger btn-sm"><i class="far fa-heart"></i></a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 mb-4">
				<div class="card">
					<img src="https://images.unsplash.com/photo-1477862096227-3a1bb3b08330?ixlib=rb-1.2.1&auto=format&fit=crop&w=700&q=60" alt="" class="card-img-top">
					<div class="card-body">
						<h5 class="card-title">Sunset</h5>
						<p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut eum similique repellat a laborum, rerum voluptates ipsam eos quo tempore iusto dolore modi dolorum in pariatur. Incidunt repellendus praesentium quae!</p>
						<a href="" class="btn btn-outline-success btn-sm">Read More</a>
						<a href="" class="btn btn-outline-danger btn-sm"><i class="far fa-heart"></i></a>
					</div>
				</div>
			</div> -->
		</div>
	</div>
</section>





</div>



</body>

</html>