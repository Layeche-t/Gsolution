<?php
require_once('../inc_config.php');

$post = new Post();
$services = $post->findBy(['type' => 'service'], 6, $post::TABLE);

$lent = count($services);

for ($i = 0; $i < $lent; $i++) {
    if ($i < 3) {
        $dataSr[0][] = $services[$i];
    }
    if ($i >= 3) {
        $dataSr[1][] = $services[$i];
    }
}

?>

<section class="pt-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-6 ">
                <h3 class="mb-3 font-weight-bold titel">Services </h3>
            </div>

            <div class="col-6 text-right">
                <a class="btn btn-primary mb-3 mr-1" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <i class="fa fa-arrow-left"></i>
                </a>
                <a class="btn btn-primary mb-3 " href="#carouselExampleIndicators" role="button" data-slide="next">
                    <i class="fa fa-arrow-right"></i>
                </a>
            </div>

            <div class="col-12">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">

                        <div class="carousel-item active">
                            <div class="row">
                                <?php foreach ($dataSr[0] as $service) : ?>
                                    <div class="col-md-4 mb-3 ">
                                        <div class="card ">
                                            <?php
                                            echo  "<img src='../upload/" . $service['picture'] . "' style='height: 190px !important;' \>";
                                            ?>
                                            <div class="card-footer color-forgot1" style="height: 50px; height: 50px; border:none;">
                                                <a href="page.php?id= <?= $service['id'] ?>" style="color: black;">
                                                    <h4 class="card-title text-center"><?= $service['titel'] ?></h4>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="row">
                                <?php foreach ($dataSr[1] as $service) : ?>
                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <?php
                                            echo  "<img src='../upload/" . $service['picture'] . "' style='height: 190px !important;' \>";
                                            ?>
                                            <div class="card-footer color-forgot1" style="height: 50px; height: 50px; border:none;">
                                                <a href="page.php?id= <?= $service['id'] ?>" style="color: black;">
                                                    <h4 class="card-title text-center"><?= $service['titel'] ?></h4>
                                                </a>
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