<?php
require_once('../inc_config.php');

$post = new Post();
$sliders = $post->findBy(['type' => 'training'], 6, $post::TABLE);

$lent = count($sliders);

for ($i = 0; $i < $lent; $i++) {
    if ($i < 3) {
        $data[0][] = $sliders[$i];
    }
    if ($i >= 3) {
        $data[1][] = $sliders[$i];
    }
}

?>

<?php
include_once '../inc_config.php';

$post = new Post();
$sliders = $post->findBy(['type' => 'slider'], 5, $post::TABLE);
?>

<section class="pt-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h3 class="mb-3 font-weight-bold titel">Services </h3>
            </div>
            <div class="col-6 text-right">
                <a class="btn btn-primary mb-3 mr-1" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                    <i class="fa fa-arrow-left"></i>
                </a>
                <a class="btn btn-primary mb-3 " href="#carouselExampleIndicators2" role="button" data-slide="next">
                    <i class="fa fa-arrow-right"></i>
                </a>
            </div>
            <div class="col-12">
                <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">

                        <div class="carousel-item active">
                            <div class="row">
                                <?php foreach ($data[0] as $slider) : ?>
                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <?php
                                            echo  "<img src='../upload/" . $slider['picture'] . "' \>";
                                            ?>
                                            <div class="card-body">
                                                <h4 class="card-title"><?= $slider['titel'] ?></h4>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="row">
                                <?php foreach ($data[1] as $slider) : ?>
                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <?php
                                            echo  "<img src='../upload/" . $slider['picture'] . "' \>";
                                            ?>
                                            <div class="card-body">
                                                <h4 class="card-title"><?= $slider['titel'] ?></h4>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>


                            </div>
                        </div>




                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</body>

</html>