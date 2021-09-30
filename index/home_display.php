<?php
require_once('../inc_config.php');
?>

<!--Header + menu-->
<?php include '../templates/inc_header.php'; ?>

<div class="container">
    <div class="row caroussel mt-4 mb-2">
        <?php include '../templates/carossel.php'; ?>
    </div>

    <div class="row services">
        <?php include '../templates/carossel_services.php'; ?>
    </div>

    <div class="row formation">
        <?php include '../templates/carossel_training.php'; ?>
    </div>

    <div class="row realisations">
        <?php include '../templates/realization.php'; ?>
    </div>

    <div class="row avis">
        <?php include '../templates/opinion.php'; ?>
    </div>
</div>

<!-- footer -->
<?php include '../templates/inc_footer.php'; ?>