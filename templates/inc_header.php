<?php
if (file_exists('inc_config.php')) {
    require_once('inc_config.php');
} else {
    require_once('../inc_config.php');
}

$post = new Post();
$menuFr =  $post->findBy(['type' => 'training'], 1000, $post::TABLE);
$menuSr =  $post->findBy(['type' => 'service'], 1000, $post::TABLE);

?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>G7solution</title>

    <?php
    if (file_exists('inc_config.php')) : ?>
        <link rel="stylesheet" href="styles/styleBootstrap.css">
    <?php else : ?>
        <link rel="stylesheet" href="../styles/styleBootstrap.css">

    <?php endif ?>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://kit.fontawesome.com/5da465d417.js" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>


<body>
    <div class="container-fluid border" style="color:#e0ffd4 !important;">
        <div class="row div-logo pb-3  pt-1  ">
            <div class="col ">
                <a href="home_display.php">
                    <img src="pictures/logo.png" alt="" width="300" height="100">
                </a>
            </div>

            <?php if (isset($_SESSION['user']['id']) && isset($_SESSION['user']['lastname'])) {

                echo ' <div class=" col text-right py-4 ">';
                echo ' <div class="dropdown show">';
                echo '  <a class="btn font-weight-bold " href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-user"></i> ' . $_SESSION['user']['lastname'] . '
                    </a>';
                echo ' <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">';
                echo ' <a href="myPersonalSpace?id=' . $_SESSION['user']['id'] . '" class="dropdown-item">Espace personel</a>';
                echo ' <a href="myAccount?id=' . $_SESSION['user']['id'] . '" class="dropdown-item">Mon compte</a>';
                echo '<div class="divider dropdown-divider"></div>';
                echo ' <a class="dropdown-item" href="logout">D??connexion</a>';
                echo ' </div>';
                echo ' </div>';
                echo ' </div>';
            } else {
                echo '<div class=" col text-right py-4 ">';
                echo '<div class="dropdown show ">';
                echo ' <a class="btn font-weight-bold " href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-user"></i> Connexion';
                echo '</a>';
                echo '<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">';
                echo '<a class="dropdown-item" href="../templates/form_autho">Connexion</a>';
                echo '<div class="divider dropdown-divider"></div>';
                echo '<a class="dropdown-item" href="registrationForm">Inscription</a>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
            }
            ?>
        </div>




    </div>

    <nav class="navbar navbar-expand-lg justify-content-center menu" style="border-radius:0px;">

        <!-- Links -->
        <ul class="navbar-nav">
            <li class="nav-item mx-3">
                <a class="nav-link Dark link font-weight-bold" href="../index/home_display">ACCUEIL</a>
            </li>

            <li class="nav-item mx-3">
                <a class="nav-link nav-color font-weight-bold" href="#">A PROPOS</a>
            </li>

            <!-- Dropdown -->
            <li class="nav-item dropdown mx-3">
                <a class="nav-link Dark link font-weight-bold dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                    ORGANISME DE FORMATION
                </a>
                <div class="dropdown-menu">
                    <?php foreach ($menuFr as $fr) : ?>
                        <a class="dropdown-item" href="../templates/page.php?id= <?= $fr['id'] ?>"><?= $fr['titel'] ?></a>
                    <?php endforeach; ?>
                </div>
            </li>

            <li class="nav-item dropdown mx-3">
                <a class="nav-link dropdown-toggle nav-color font-weight-bold" href="#" id="navbardrop" data-toggle="dropdown">
                    SERVICES
                </a>
                <div class="dropdown-menu">
                    <?php foreach ($menuSr as $sr) : ?>
                        <a class="dropdown-item " href="../templates/page.php?id= <?= $sr['id'] ?>"> <?= $sr['titel'] ?> </a>
                    <?php endforeach; ?>
                </div>
            </li>

            <li class="nav-item mx-3">
                <a class="nav-link nav-color font-weight-bold" href="../templates/form_contact.php">CONTACT</a>
            </li>
        </ul>
    </nav>