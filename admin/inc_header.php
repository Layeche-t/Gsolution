<!doctype html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/styleOffice.css">
    <title>BackOffice</title>
</head>

<body>
    <div class="container-fluid div-container">
        <div class='dashboard'>
            <div class="dashboard-nav">

                <!--menu-->
                <nav class="dashboard-nav-list" style="color: chocolate !important;">
                    <header>
                        <a href="#" class="brand-logo"><i class="fas fa-anchor"></i><span> <?= $_SESSION['admi']['firstname'] ?></span></a>
                    </header>
                    <a href="home.php" class="dashboard-nav-item "><i class="fas fa-home"></i>Accueil </a>
                    <a href="slide_disply.php" class="dashboard-nav-item "><i class="fas fa-tachometer-alt"></i> Actualités</a>
                    <a href="services_disply.php" class="dashboard-nav-item"><i class="fas fa-archive"></i> Services </a>
                    <a href="training_disply.php" class="dashboard-nav-item"><i class="fas fa-graduation-cap"></i>
                        Formations</a>
                    <a href="blog_disply.php" class="dashboard-nav-item"><i class="fas fa-blog"></i> Blog</a>
                    <a href="team_disply.php" class="dashboard-nav-item"><i class="fas fa-user-plus"></i> Equipe</a>
                    <a href="users_disply.php" class="dashboard-nav-item"><i class="fas fa-user-friends"></i>
                        Utilisateurs</a>
                    <a href="accepted_display.php" class="dashboard-nav-item"><i class="fas fa-plus"></i>
                        Demandes</a>
                    <a href="filesDisplay.php" class="dashboard-nav-item"><i class="fas fa-folder-plus"></i>
                        Fichiers </a>

                    <!-- Vertical bar -->
                    <div class="nav-item-divider"></div>
                    <a href="logout_backOffice.php" class="dashboard-nav-item"><i class="fas fa-sign-out-alt"></i> Déconnexion </a>
                </nav>
            </div>