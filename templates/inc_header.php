<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>G7solution</title>
    <link rel="stylesheet" href="../styles/styleBootstrap.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://kit.fontawesome.com/5da465d417.js" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>


<body>

    <div class="container-fluid container-general">
        <div class="container-fluid div-logo">
            <div class="row ">
                <div class="col border">
                    <a href="#">
                        <img src="../pictures/logo.png" alt="" width="300" height="100">
                    </a>
                </div>
                <div class=" nav-item dropdown col">

                    <a href="#" data-toggle="dropdown" class="nav-item nav-link dropdown-toggle user-action" id="navbardrop"><i class="fas fa-user"></i>
                        <?php
                        if (isset($_SESSION['id']) && isset($_SESSION['lastname'])) {
                            echo '<span>' . $_SESSION['lastname'] . '</span></a>';
                            echo '<div class="dropdown-menu">';
                            echo '<a href="../templates/myPersonalSpace" class="dropdown-item"><i class="fa fa-user-o"></i>Espace personel</a>';
                            echo '<a href="../templates/myAccount" class="dropdown-item"><i class="fa fa-user-o"></i>Mon compte</a>';
                            echo '<div class="divider dropdown-divider"></div>';
                            echo '<a href="logout" class="dropdown-item"><i class="fa fa-user-o"></i>Déconnexion</a>';
                            echo '</div>';
                        } else {
                            echo '<span> espace personel </span></a>';
                        ?>
                            <div class="dropdown-menu">
                                <a href="../templates/form_autho.php" class="dropdown-item"><i class="fa fa-user-o"></i>Connexion</a>
                                <a href="../templates/registrationForm.php" class="dropdown-item"><i class="fa fa-calendar-o"></i>Inscription</a>
                            </div>
                        <?php } ?>


                </div>
            </div>

            <nav class="navbar navbar-expand-lg justify-content-center menu" style="border-radius:0px;">

                <!-- Links -->
                <ul class="navbar-nav">
                    <li class="nav-item mx-2">
                        <a class="nav-link nav-color font-weight-bold" href="#">ACCUEIL</a>
                    </li>

                    <!-- Dropdown -->
                    <li class="nav-item dropdown mx-2">
                        <a class="nav-link dropdown-toggle nav-color font-weight-bold" href="#" id="navbardrop" data-toggle="dropdown">
                            ORGANISME DE FORMATION
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Link 1</a>
                            <a class="dropdown-item" href="#">Link 2</a>
                            <a class="dropdown-item" href="#">Link 3</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown mx-2">
                        <a class="nav-link dropdown-toggle nav-color font-weight-bold" href="#" id="navbardrop" data-toggle="dropdown">
                            RH EXTERNISE
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Link 1</a>
                            <a class="dropdown-item" href="#">Link 2</a>
                            <a class="dropdown-item" href="#">Link 3</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown mx-2">
                        <a class="nav-link dropdown-toggle nav-color font-weight-bold" href="#" id="navbardrop" data-toggle="dropdown">
                            CONSEILS
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Link 1</a>
                            <a class="dropdown-item" href="#">Link 2</a>
                            <a class="dropdown-item" href="#">Link 3</a>
                        </div>
                    </li>

                    <li class="nav-item mx-2">
                        <a class="nav-link nav-color font-weight-bold" href="#">PLANNING</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link nav-color font-weight-bold" href="#">A PROPOS</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link nav-color font-weight-bold" href="#">CONTACT</a>
                    </li>
                </ul>
            </nav>

</body>

</html>

</div>


</body>