<?php

// Database connection
require_once('../inc_config.php');

// instanciation 
$post = new Post();
$user = new User();
$file = new File();

// data recovery for posts and users 
$allPost = $post->findAll($post::TABLE);
$postDate = $allPost[0]['createdAt'];
$allUser = $user->findAll($user::TABLE);
$userDate = $allUser[0]['createdAt'];
$allFile = $file->findAll($file::TABLE);
$fileDate = $allFile[0]['createdAt'];



//count number of data (allPost)
$countB = 0;
$countSl = 0;
$countSr = 0;
$countT = 0;
$countTr = 0;
$countU = 0;
$countL = 0;
$countPt = 0;

foreach ($allPost as $casePost) {
    if ($casePost['type'] == 'blog') {
        $countB++;
    }
    if ($casePost['type'] == 'slider') {
        $countSl++;
    }
    if ($casePost['type'] == 'training') {
        $countT++;
    }
    if ($casePost['type'] == 'service') {
        $countSr++;
    }
    if ($casePost['type'] == 'library') {
        $countL++;
    }
    if ($casePost['type'] == 'partenariat') {
        $countPt++;
    }
}

//count number of data (allUsers)
$countU = 0;
$countA = 0;
$countTm = 0;
$countD = 0;

foreach ($allUser as $caseUser) {

    if ($caseUser['function']) {
        $countTm++;
    }
    if ($caseUser['role'] == 'user') {
        $countU++;
    }
    if ($caseUser['role'] == 'admin') {
        $countA++;
    }
    if ($caseUser['accepted'] == '0') {
        $countD++;
    }
}

$countAll = $countU + $countA;

//count number of data (allUsers)

$countF = 0;

foreach ($allFile as $caseFile) {
    $countF++;
}



// start session
if ($_SESSION['autoriser'] != 'oui') {
    header('Location: ../admin/login_backOffice.php');
    exit();
}


?>

<!-- header -->
<?php include('inc_header.php'); ?>

<!-- start dashoard -->
<div class='dashboard-app'>
    <header class='dashboard-toolbar'>
        <a href="#!" class="menu-toggle"><i class="fas fa-bars"></i></a>
    </header>
    <!-- dashboard content-->
    <div class='dashboard-content'>
        <div class='container'>
            <div class='card'>
                <!--dashbord titel -->
                <div class='card-header'>
                    <h1>Accueil</h1>
                </div>

                <!--table content -->
                <div class='card-body'>
                    <div class="container mt-5 mb-3">
                        <div class="row">
                            <!-- news -->
                            <div class="col-md-4">
                                <div class="card p-3 mb-2">
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex flex-row align-items-center">
                                            <div class="icon">
                                                <i class="fab fa-slideshare"></i>
                                            </div>
                                            <div class="ms-2 c-details">
                                                <h6 class="mb-0">Actualités</h6>
                                                <span>4 days ago</span>
                                            </div>
                                        </div>
                                        <div class="badge"> <span>Publicité</span> </div>
                                    </div>
                                    <div class="mt-5">
                                        <a href="slide_disply.php" class="link-dashbord">
                                            <h3 class="heading">Actualités</h3>
                                        </a>
                                        <h3>Simo </h3>
                                        <div class="mt-5">
                                            <div class="progress">
                                                <div class="progress-bar back-color-green3" role="progressbar" style="width:<?= $countSl / 4 * 100 ?>%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="4"></div>
                                            </div>
                                            <div class="mt-3"> <span class="text1"><?= $countSl ?> actualités <span class="text2">sur une limite de 4</span></span> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- services -->
                            <div class="col-md-4">
                                <div class="card p-3 mb-2">
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex flex-row align-items-center">
                                            <div class="icon">
                                                <i class="fas fa-server"></i>
                                            </div>
                                            <div class="ms-2 c-details">
                                                <h6 class="mb-0">Services</h6>
                                                <span>4 days ago</span>
                                            </div>
                                        </div>
                                        <div class="badge"> <span>Publicité</span> </div>
                                    </div>
                                    <div class="mt-5">
                                        <a href="services_disply.php" class="link-dashbord">
                                            <h3 class="heading">Services </h3>
                                        </a>
                                        <h3>Designer-Singapore</h3>
                                        <div class="mt-5">
                                            <div class="progress">
                                                <div class="progress-bar back-color-green3" role="progressbar" style="width:<?= $countSr / 6 * 100 ?>%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="6"></div>
                                            </div>
                                            <div class="mt-3"> <span class="text1"> <?= $countSr ?> services <span class="text2">sur une limite de 6</span></span> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Partenarait  -->
                            <div class="col-md-4">
                                <div class="card p-3 mb-2">
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex flex-row align-items-center">
                                            <div class="icon">
                                                <i class="fas fa-server"></i>
                                            </div>
                                            <div class="ms-2 c-details">
                                                <h6 class="mb-0">Partenariat</h6>
                                                <span>4 days ago</span>
                                            </div>
                                        </div>
                                        <div class="badge"> <span>Organisation</span> </div>
                                    </div>
                                    <div class="mt-5">
                                        <a href="partnership_disply.php" class="link-dashbord">
                                            <h3 class="heading">Partenariat</h3>
                                        </a>
                                        <h3>Designer-Singapore</h3>
                                        <div class="mt-5">
                                            <div class="progress">
                                                <div class="progress-bar back-color-green3" role="progressbar" style="width:<?= $countPt / 100 * 100 ?>%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="6"></div>
                                            </div>
                                            <div class="mt-3"> <span class="text1"> <?= $countPt ?> partenariat <span class="text2">sur une limite de 100</span></span> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- training -->
                            <div class="col-md-4">
                                <div class="card p-3 mb-2">
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex flex-row align-items-center">
                                            <div class="icon">
                                                <i class="fas fa-graduation-cap"></i>
                                            </div>
                                            <div class="ms-2 c-details">
                                                <h6 class="mb-0">Formations</h6>
                                                <span>2 days ago</span>
                                            </div>
                                        </div>
                                        <div class="badge"> <span>Publicité</span> </div>
                                    </div>
                                    <div class="mt-5">
                                        <a href="services_backOffice.php" class="link-dashbord">
                                            <h3 class="heading">Formations </h3>
                                        </a>
                                        <h3> - USA</h3>
                                        <div class="mt-5">
                                            <div class="progress">
                                                <div class="progress-bar back-color-green3" role="progressbar" style="width:<?= $countT / 6 * 100 ?>%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="6"></div>
                                            </div>
                                            <div class="mt-3"> <span class="text1"><?= $countT ?> formations <span class="text2">sur une limite de 6</span></span> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- blog -->
                            <div class="col-md-4">
                                <div class="card p-3 mb-2">
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex flex-row align-items-center">

                                            <div class="icon">
                                                <i class="fab fa-blogger"></i>
                                            </div>
                                            <div class="ms-2 c-details">
                                                <h6 class="mb-0">Blog</h6>
                                                <span>2 days ago</span>
                                            </div>
                                        </div>
                                        <div class="badge"> <span>Informations</span> </div>
                                    </div>
                                    <div class="mt-5">
                                        <a href="blog_disply.php" class="link-dashbord">
                                            <h3 class="heading">Blog </h3>
                                        </a>


                                        <h3>Java - USA</h3>
                                        <div class="mt-5">
                                            <div class="progress">
                                                <div class="progress-bar back-color-green3" role="progressbar" style="width:<?= $countT / 30 * 100 ?>%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="30"></div>
                                            </div>
                                            <div class="mt-3"> <span class="text1"><?= $countB ?> blogs <span class="text2">sur une limite de 30</span></span> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- accepted -->
                            <div class="col-md-4">
                                <div class="card p-3 mb-2">
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex flex-row align-items-center">
                                            <div class="icon">
                                                <i class="fas fas fa-plus"></i>
                                            </div>
                                            <div class="ms-2 c-details">
                                                <h6 class="mb-0">Demandes</h6>
                                                <span>2 days ago</span>
                                            </div>
                                        </div>
                                        <div class="badge"> <span>Organisation</span> </div>
                                    </div>
                                    <div class="mt-5">
                                        <a href="planning_disply.php" class="link-dashbord">
                                            <h3 class="heading">Demandes </h3>
                                        </a>
                                        <h3> Java - USA</h3>
                                        <div class="mt-5">
                                            <div class="progress">
                                                <div class="progress-bar back-color-green3" role="progressbar" style="width:<?= $countD / 100 * 100 ?>%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <div class="mt-3"> <span class="text1"><?= $countD ?> demandes <span class="text2">sur une limite de 100</span></span> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- team -->
                            <div class="col-md-4">
                                <div class="card p-3 mb-2">
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex flex-row align-items-center">
                                            <div class="icon">
                                                <i class="fas fa-users"></i>
                                            </div>
                                            <div class="ms-2 c-details">
                                                <h6 class="mb-0">Equipe</h6>
                                                <span>2 days ago</span>
                                            </div>
                                        </div>
                                        <div class="badge"> <span>Informations</span> </div>
                                    </div>
                                    <div class="mt-5">
                                        <a href="team_disply.php" class="link-dashbord">
                                            <h3 class="heading">Equipe </h3>
                                        </a>
                                        <h3>Java - USA</h3>
                                        <div class="mt-5">
                                            <div class="progress">
                                                <div class="progress-bar back-color-green3" role="progressbar" style="width:<?= $countTm / 30 * 100 ?>%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="30"></div>
                                            </div>
                                            <div class="mt-3"> <span class="text1"><?= $countTm; ?> personnes <span class="text2">sur une limite de 30</span></span> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- users -->
                            <div class="col-md-4">
                                <div class="card p-3 mb-2">
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex flex-row align-items-center">
                                            <div class="icon">
                                                <i class="fas fa-user-plus"></i>
                                            </div>
                                            <div class="ms-2 c-details">
                                                <h6 class="mb-0">Utilisateurs</h6>
                                                <span><?= $userDate ?></span>
                                            </div>
                                        </div>
                                        <div class="badge"> <span>Organisation</span> </div>
                                    </div>
                                    <div class="mt-5">
                                        <a href="users_disply.php" class="link-dashbord">
                                            <h3 class="heading">Utilisateurs </h3>
                                        </a>
                                        <h3>Java - USA</h3>
                                        <div class="mt-5">
                                            <div class="progress">
                                                <div class="progress-bar back-color-green3" role="progressbar" style="width:<?= $countAll / 20 * 100 ?>%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="20"></div>
                                            </div>
                                            <div class="mt-3"> <span class="text1"> <?= $countAll; ?> utilisateurs <span class="text2">sur une limite de 20</span></span> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- files -->
                            <div class="col-md-4">
                                <div class="card p-3 mb-2">
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex flex-row align-items-center">
                                            <div class="icon">
                                                <i class="fas fa-folder-plus"></i>
                                            </div>
                                            <div class="ms-2 c-details">
                                                <h6 class="mb-0">Fichier</h6>
                                                <span>2 days ago</span>
                                            </div>
                                        </div>
                                        <div class="badge "> <span class="back-color-green3">Organisation</span> </div>
                                    </div>
                                    <div class="mt-5">
                                        <a href="users_disply.php" class="link-dashbord">
                                            <h3 class="heading">Fichiers </h3>
                                        </a>
                                        <h3>Java - USA</h3>
                                        <div class="mt-5">
                                            <div class="mt-5">
                                                <div class="progress">
                                                    <div class="progress-bar back-color-green3" role="progressbar" style="width:<?= $countF / 20 * 100 ?>%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="20"></div>
                                                </div>
                                                <div class="mt-3"> <span class="text1"> <?= $countF; ?> utilisateurs <span class="text2">sur une limite de 20</span></span> </div>
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

    </div>

</div>


</div>
<?php include('inc_footer.php'); ?>
</div>