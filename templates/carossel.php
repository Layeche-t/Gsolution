<?php
include_once 'inc_config.php';

$post = new Post();
$sliders = $post->findBy(['type' => 'slider'], 5, $post::TABLE);
?>




<div class="container">
    <h3 class="mb-3 font-weight-bold titel">Actualités </h3>
    <div id="demo" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->
        <ul class="carousel-indicators">
            <?php
            $i = 0;
            foreach ($sliders as $row) {
                $actives = '';
                if ($i == 0) {
                    $actives = 'active';
                }

            ?>
                <li data-target="#demo" data-slide-to="<?= $i; ?>" class="<?= $actives; ?>"></li>
            <?php $i++;
            } ?>

        </ul>


        <!-- The slideshow -->
        <div class="carousel-inner">
            <?php
            $i = 0;
            foreach ($sliders as $slider) {
                $actives = '';
                if ($i == 0) {
                    $actives = 'active';
                }
            ?>
                <div class="carousel-item <?= $actives; ?>">
                    <?php
                    echo  "<img src='upload/" . $slider['picture'] . "' width='1100' height='500'\>";
                    ?>

                    <div class="carousel-caption">
                        <h3 class="font-weight-bold"><?= $slider['titel'] ?></h3>
                        <p class="font-weight-bold"><?= $slider['description'] ?></p>
                    </div>
                </div>
            <?php $i++;
            } ?>
        </div>


        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
</div>