<?php
require_once('../inc_config.php');

$post = new Post();

$all = $post->findAll($post::TABLE);
$countB = 0;
$countSl = 0;
$countP = 0;
$countSr = 0;
$countT = 0;
$countTr = 0;
$countU = 0;
$countL = 0;

foreach ($all as $case) {
    if ($case['type'] == 'blog') {
        $countB++;
    }
    if ($case['type'] == 'slider') {
        $countS++;
    }
    if ($case['type'] == 'planning') {
        $countP++;
    }
    if ($case['type'] == 'training') {
        $countT++;
    }
    if ($case['type'] == 'services') {
        $countSr++;
    }
    if ($case['type'] == 'library') {
        $countL++;
    }
}


$sql = "SELECT 'type' FROM `posts` ";

$query = $bdd->prepare($sql);
$query->execute();
$articles = $query->fetchAll(PDO::FETCH_ASSOC);





if ($_SESSION['autoriser'] != 'oui') {
    header('Location: ../admin/login_backOffice.php');
    exit();
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

                            <!-- Slider -->
                            <div class="col-md-4">
                                <div class="card p-3 mb-2">
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex flex-row align-items-center">
                                            <div class="icon">
                                                <i class="fab fa-slideshare"></i>
                                            </div>
                                            <div class="ms-2 c-details">
                                                <h6 class="mb-0">Slider</h6>
                                                <span>4 days ago</span>
                                            </div>
                                        </div>
                                        <div class="badge"> <span>Publicité</span> </div>
                                    </div>
                                    <div class="mt-5">
                                        <a href="slide_disply.php" class="link-dashbord">
                                            <h3 class="heading">Sliders</h3>
                                        </a>


                                        <h3>Simo </h3>







                                        <div class="mt-5">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <div class="mt-3"> <span class="text1"><?= $countS ?> Applied <span class="text2">of 70 capacity</span></span> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Services -->
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
                                        <div class="badge"> <span>Aide</span> </div>
                                    </div>
                                    <div class="mt-5">
                                        <a href="services_disply.php" class="link-dashbord">
                                            <h3 class="heading">Services </h3>
                                        </a>

                                        <h3>Designer-Singapore</h3>
                                        <div class="mt-5">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <div class="mt-3"> <span class="text1"><?= $countS ?><span class="text2">of 70 capacity</span></span> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Formations -->
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
                                        <div class="badge"> <span>Excellence</span> </div>
                                    </div>
                                    <div class="mt-5">
                                        <a href="services_backOffice.php" class="link-dashbord">
                                            <h3 class="heading">Formations </h3>
                                        </a>
                                        <h3> - USA</h3>
                                        <div class="mt-5">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <div class="mt-3"> <span class="text1"><?= $countTr ?><span class="text2">of 70 capacity</span></span> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Blog -->
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
                                                <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <div class="mt-3"> <span class="text1"><?= $countB ?><span class="text2">of 70 capacity</span></span> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Planning -->
                            <div class="col-md-4">
                                <div class="card p-3 mb-2">
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex flex-row align-items-center">
                                            <div class="icon">
                                                <i class="fas fa-calendar-plus"></i>
                                            </div>
                                            <div class="ms-2 c-details">
                                                <h6 class="mb-0">Planning</h6>
                                                <span>2 days ago</span>
                                            </div>
                                        </div>
                                        <div class="badge"> <span>Organisation</span> </div>
                                    </div>
                                    <div class="mt-5">

                                        <a href="planning_disply.php" class="link-dashbord">
                                            <h3 class="heading">Planning </h3>
                                        </a>

                                        <h3> Java - USA</h3>
                                        <div class="mt-5">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <div class="mt-3"> <span class="text1"><?= $countP ?><span class="text2">of 70 capacity</span></span> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Equipe -->
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
                                        <div class="badge"> <span>Solidarité</span> </div>
                                    </div>
                                    <div class="mt-5">
                                        <a href="team_disply.php" class="link-dashbord">
                                            <h3 class="heading">Equipe </h3>
                                        </a>


                                        <h3>Java - USA</h3>
                                        <div class="mt-5">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <div class="mt-3"> <span class="text1">52 Applied <span class="text2">of 100 capacity</span></span> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Utilisateurs -->
                            <div class="col-md-4">
                                <div class="card p-3 mb-2">
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex flex-row align-items-center">
                                            <div class="icon">
                                                <i class="fas fa-user-plus"></i>
                                            </div>
                                            <div class="ms-2 c-details">
                                                <h6 class="mb-0">Utilisateurs</h6>
                                                <span>2 days ago</span>
                                            </div>
                                        </div>
                                        <div class="badge"> <span>Dévloppement</span> </div>
                                    </div>
                                    <div class="mt-5">
                                        <a href="users_disply.php" class="link-dashbord">
                                            <h3 class="heading">Utilisateurs </h3>
                                        </a>
                                        <h3>Java - USA</h3>
                                        <div class="mt-5">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <div class="mt-3"> <span class="text1">52 Applied <span class="text2">of 100 capacity</span></span> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Bibliothèque -->
                            <div class="col-md-4">
                                <div class="card p-3 mb-2">
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex flex-row align-items-center">
                                            <div class="icon">
                                                <i class="fas fa-user-plus"></i>
                                            </div>
                                            <div class="ms-2 c-details">
                                                <h6 class="mb-0">Bibliothèque</h6>
                                                <span>2 days ago</span>
                                            </div>
                                        </div>
                                        <div class="badge"> <span>Dévloppement</span> </div>
                                    </div>
                                    <div class="mt-5">
                                        <a href="users_disply.php" class="link-dashbord">
                                            <h3 class="heading">Bibliothèque </h3>
                                        </a>
                                        <h3>Java - USA</h3>
                                        <div class="mt-5">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <div class="mt-3"> <span class="text1"><?= $countL ?> <span class="text2">of 100 capacity</span></span> </div>
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