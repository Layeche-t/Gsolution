<?php
require_once('../inc_config.php');

if (!isset($_SESSION['user'])) {
    header('Location: ../admin/login_backOffice.php');
    exit;
}

?>

<!doctype html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/5da465d417.js" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../styles/styleOffice.css">
    <title>BackOffice</title>
</head>

<body>

    <div class="container-fluid div-container">
        <div class='dashboard'>
            <div class="dashboard-nav">
                <header>
                    <a href="#" class="brand-logo"><i class="fas fa-anchor"></i><span>Gilles</span></a>
                </header>
                <!--Menu-->
                <nav class="dashboard-nav-list">

                    <a href="home.php" class="dashboard-nav-item active"><i class="fas fa-home"></i>Accueil </a>
                    <a href="slide_disply.php" class="dashboard-nav-item "><i class="fas fa-tachometer-alt"></i> Slide</a>
                    <a href="service_disply.php" class="dashboard-nav-item"><i class="fas fa-archive"></i> Services </a>
                    <a href="training_disply.php" class="dashboard-nav-item"><i class="fas fa-graduation-cap"></i> Formations</a>
                    <a href="training_disply.php" class="dashboard-nav-item"><i class="fas fa-blog"></i> Blog</a>
                    <a href="training_disply.php" class="dashboard-nav-item"><i class="fas fa-calendar-plus"></i> Planning</a>
                    <a href="team_disply.php" class="dashboard-nav-item"><i class="fas fa-user-plus"></i> Equipe</a>
                    <a href="users_disply.php" class="dashboard-nav-item"><i class="fas fa-user-friends"></i> Utilisateurs</a>

                    <!-- Vertical bar -->
                    <div class="nav-item-divider"></div>
                    <a href="#" class="dashboard-nav-item"><i class="fas fa-sign-out-alt"></i> Déconnexion </a>
                </nav>

                <!-- The heart of the dashboard -->
            </div>
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
                                <h1>Slide</h1>
                            </div>

                            <!--contenu du tableau -->
                            <div class='card-body'>
                                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                    <a href="slide_add.php"> <button type="button" class="btn btn-success btn-slide">Ajouter</button></a>
                                </div>
                                <table class="table">
                                    <thead class="table-dark">
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Titre</th>
                                            <th scope="col">Description</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>
                                                <a href="slide_modification.php"> <button type="button" class="btn btn-success">Modifier</button></a>
                                                <button type="button" class="btn btn-danger">Supprimer</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>
                                                <a href="slide_modification.php"><button type="button" class="btn btn-success">Modifier</button></a>
                                                <button type="button" class="btn btn-danger">Supprimer</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>
                                                <a href="slide_modification.php"><button type="button" class="btn btn-success">Modifier</button></a>
                                                <button type="button" class="btn btn-danger">Supprimer</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>