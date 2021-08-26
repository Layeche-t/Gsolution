<?php
require_once('../inc_config.php');
?>

<!--Header + menu-->
<?php include 'inc_header.php'; ?>

<div class="container">
    <div class="row caroussel mt-4 mb-2">
        <?php include 'carossel.php'; ?>
    </div>

    <div class="row services">
        <?php include 'carossel_services.php'; ?>
    </div>

    <div class="row formation">
        <?php include 'carossel_training.php'; ?>

    </div>

    <div class="row realisations">
        <?php include 'realization.php'; ?>
    </div>

    <div class="row avis">
        <?php include 'opinion.php'; ?>
    </div>
</div>

<!-- footer -->
<?php include 'inc_footer.php'; ?>