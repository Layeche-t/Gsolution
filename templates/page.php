<?php
require_once('../inc_config.php');

$post = new Post();

if (isset($_GET['id']) && $_GET['id'] != '') {
    $slider = $post->findOneBy(['id' => $_GET['id']], $post::TABLE);
}




include 'inc_header.php'; ?>
<div class="container-fluid ">

    <div class="container mb-4 ">
        <h3 class="mt-4 ml-4 mb-0 font-weight-bold titel">
            <?= $slider->titel ?>
        </h3>

        <div class="row">
            <div class="btn-group btn-breadcrumb ml-4 mb-2">
                <a href="index.php" class="btn btn-default "><i class="fas fa-home"></i></a>
                <a href="#" class="btn btn-default font-weight-bold a-color"><?= $slider->type ?> <i class="fas fa-chevron-right"></i></a>
                <a href="#" class="btn btn-default font-weight-bold a-color"><?= $slider->titel ?> <i class="fas fa-chevron-right"></i></a>
            </div>
        </div>

        <div class="row text-secondary ml-4 mb-2">
            <p class="width-element"><?= $slider->description ?></p>
        </div>
        <div class="row ml-4 text-center ">
            <?php
            echo  "<img src='../upload/" . $slider->picture . "'width='80%' height='20%'>";
            ?>
        </div>
        <div class="row  ml-4">
            <h6 class="text-secondary"> Source : <?= $slider->source ?></h6>
        </div>

        <div class="row mt-3 ml-4">
            <p class="width-element"><?= $slider->text ?></p>
        </div>
    </div>

</div>

<!--Header + menu-->
<?php include 'inc_footer.php'; ?>