<?php
require_once('../inc_config.php');

if (!isset($_SESSION['admi'])) {
    header('Location: ../admin/login_backOffice.php');
    exit;
}
?>

<?php include('inc_header.php'); ?>

<div class='dashboard-app'>
    <header class='dashboard-toolbar'>
        <a href="#!" class="menu-toggle"><i class="fas fa-bars"></i></a>
    </header>
    <!-- Le contenu du dashbord-->
    <div class='dashboard-content'>
        <div class='container'>
            <div class='card'>
                <!--titre du dashbord -->
                <div class='card-header'>
                    <h1>Accueil</h1>
                </div>

                <!--contenu du tableau -->
                <div class='card-body'>
                    <div class="container mt-5 mb-3">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card  p-3 mb-2">
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex flex-row align-items-center">
                                            <div class="icon"> <i class="bx bxl-mailchimp"></i> </div>
                                            <div class="ms-2 c-details">
                                                <h6 class="mb-0">Slide</h6> <span>Depuis 1 jour</span>
                                            </div>
                                        </div>
                                        <div class="badge"> <span>Prodect</span> </div>
                                    </div>
                                    <div class="mt-5">
                                        <h3 class="heading">Slide<br>Designer-Singapore</h3>
                                        <div class="mt-5">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <div class="mt-3"> <span class="text1">32 Applied <span class="text2">of 50 capacity</span></span> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card p-3 mb-2">
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex flex-row align-items-center">
                                            <div class="icon"> <i class="bx bxl-dribbble"></i> </div>
                                            <div class="ms-2 c-details">
                                                <h6 class="mb-0">Dribbble</h6> <span>4 days ago</span>
                                            </div>
                                        </div>
                                        <div class="badge"> <span>Product</span> </div>
                                    </div>
                                    <div class="mt-5">
                                        <h3 class="heading">Junior Product<br>Designer-Singapore</h3>
                                        <div class="mt-5">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <div class="mt-3"> <span class="text1">42 Applied <span class="text2">of 70 capacity</span></span> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card p-3 mb-2">
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex flex-row align-items-center">
                                            <div class="icon"> <i class="bx bxl-reddit"></i> </div>
                                            <div class="ms-2 c-details">
                                                <h6 class="mb-0">Reddit</h6> <span>2 days ago</span>
                                            </div>
                                        </div>
                                        <div class="badge"> <span>Design</span> </div>
                                    </div>
                                    <div class="mt-5">
                                        <h3 class="heading">Software Architect <br>Java - USA</h3>
                                        <div class="mt-5">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <div class="mt-3"> <span class="text1">52 Applied <span class="text2">of 100 capacity</span></span> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </div>
    </div>
    <?php include('inc_footer.php'); ?>
</div>