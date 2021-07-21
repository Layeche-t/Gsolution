<?php
require_once('../inc_config.php');

/*objet*/
$post = new Post();

if (isset($_GET['id']) && $_GET['id'] != '') {
    $blog = $post->findOneBy(['id' => $_GET['id']], $post::TABLE);
}
?>

<?php include('inc_header.php'); ?>

<!-- Le coeur dashbord -->
<div class='dashboard-app'>
    <header class='dashboard-toolbar'>
        <a href="#" class="menu-toggle"><i class="fas fa-bars"></i></a>
    </header>

    <!-- Le contenu du dashbord-->
    <div class='dashboard-content'>
        <div class='container'>
            <div class='card'>
                <!--titre du dashbord -->
                <div class='card-header'>
                    <h1>Modifier votre blog</h1>
                </div>


                <div class='card-body'>
                    <!-- le formuliare d'envoie -->
                    <form action="../controllers/update_blog.php" method="POST">
                        <div class="input-group">
                            <span class="input-group-text">Entrez votre titre</span>
                            <input type="text" aria-label="First name" class="form-control" name="titel" value=<?= $blog->titel ?>>
                        </div>

                        <div class="form-floating">
                            <textarea class="form-control area-description" id="floatingTextarea2" name="description" rows="5" cols="33"><?= $blog->description  ?></textarea>
                        </div>

                        <div class="form-floating">
                            <textarea class="form-control area-description" id="floatingTextarea2" name="text" rows="10" cols="33"><?= $blog->text  ?></textarea>
                        </div>

                        <div class="col-12">
                            <input type="text" aria-label="First name" class="form-control" name="id" value=<?= $blog->id ?> hidden>
                            <button class="btn btn-success submit-modification" type="submit" name="modification">Modifier</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<?php include('inc_footer.php'); ?>
</div>