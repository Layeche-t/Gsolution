<!--Header + menu-->
<?php
include_once '../inc_config.php';

$post = new Post();

$blogs = $post->findBy(['type' => 'blog'], 1000, $post::TABLE);
?>

<?php include 'inc_header.php'; ?>


<section class="mt-4" id="gallery">
	<div class="container">
		<div class="row">

			<h1 class="card-title mb-3"> Blog </h1>

			<?php foreach ($blogs as $blog) : ?>

				<div class="col-lg-4 mb-4">
					<div class="card">
						<img src="https://images.unsplash.com/photo-1516214104703-d870798883c5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=700&q=60" alt="" class="card-img-top">
						<div class="card-body">
							<h5 class="card-title"> <?= $blog['titel'] ?> </h5>
							<p class="card-text"><?= $blog['description'] ?></p>
							<a href="" class="btn btn-outline-success btn-sm">Read More</a>
							<a href="" class="btn btn-outline-danger btn-sm"><i class="far fa-heart"></i></a>
						</div>
					</div>
				</div>

			<?php endforeach ?>

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