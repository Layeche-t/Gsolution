<!--Header + menu-->
<?php
include_once '../inc_config.php';

$post = new Post();

$blogs = $post->findBy(['type' => 'blog'], 1000, $post::TABLE);

//count the number
$count = $bdd->query("SELECT count(id) AS fa FROM posts WHERE type = 'blog' ");
$count->setFetchMode(PDO::FETCH_ASSOC);
$count->execute();

//le résultat dans un tableau
$tcount = $count->fetchAll();



//pagination 
@$page = $_GET['page'];
// if (empty($page)) {
// 	$page = 1;
// }

$nbr_element_par_page = 6;
$nbr_page = ceil($tcount[0]['fa'] / $nbr_element_par_page);
$debut = ($page - 1) * $nbr_element_par_page;



// récup data
$sel = $bdd->query("SELECT * FROM posts WHERE type= 'blog' LIMIT $debut, $nbr_element_par_page");
$sel->setFetchMode(PDO::FETCH_ASSOC);
$sel->execute();

$resultats = $sel->fetchAll();


// if (count($resultats) == 0) {
// 	header("Location: blog.php");
// }
?>







<?php include 'inc_header.php'; ?>





<section class="mt-4" id="gallery">
	<div class="container">
		<div class="row">

			<h1 class="card-title mb-3"> Blog </h1>

			<?php foreach ($resultats as $resultat) : ?>

				<div class="col-lg-4 mb-4">
					<div class="card">
						<img src="https://images.unsplash.com/photo-1516214104703-d870798883c5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=700&q=60" alt="" class="card-img-top">
						<div class="card-body">
							<h5 class="card-title"> <?= $resultat['titel'] ?> </h5>
							<p class="card-text"><?= $resultat['description'] ?></p>
							<a href="" class="btn btn-outline-success btn-sm">Read More</a>
							<a href="" class="btn btn-outline-danger btn-sm"><i class="far fa-heart"></i></a>
						</div>
					</div>
				</div>
			<?php endforeach ?>

			<!-- pagination -->
			<nav aria-label="Page navigation example">
				<ul class="pagination justify-content-center">
					<li class="page-item">
						<a class="page-link" href="#" tabindex="-1">Précédent</a>
					</li>

					<?php for ($i = 1; $i <= $nbr_page; $i++) : ?>
						<?php if ($page != $i) : ?>

							<li class="page-item"><a class="page-link" href="?page=<?= $i ?>"><?= $i; ?></a></li>

						<?php else : ?>
							<li class="page-item active"><a class="page-link" href="?page=<?= $i ?>"><?= $i; ?></a></li>

						<?php endif ?>

					<?php endfor ?>

					<li class="page-item">
						<a class="page-link" href="#">Suivant</a>
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