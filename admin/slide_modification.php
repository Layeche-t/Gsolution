<?php
require_once('../inc_config.php');

$post = new Post();

if (isset($_GET['id']) && $_GET['id'] != '')
{
    //
    $slider = $post->findOneBy(['id' => $_GET['id']], $post::TABLE);


    // if not found redirect to home ! error i
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

                    <a href="#" class="dashboard-nav-item"><i class="fas fa-home"></i>Accueil </a>
                    <a href="#" class="dashboard-nav-item active"><i class="fas fa-tachometer-alt"></i> Slide</a>
                    <a href="#" class="dashboard-nav-item"><i class="fas fa-file-upload"></i> Services </a>
                    <a href="#" class="dashboard-nav-item"><i class="fas fa-file-upload"></i> Formations</a>
                    <a href="#" class="dashboard-nav-item"><i class="fas fa-file-upload"></i> Equipe</a>
                    <a href="#" class="dashboard-nav-item"><i class="fas fa-file-upload"></i> Utilisateurs</a>

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
                                <h1>Modifier votre slide</h1>
                            </div>


                            <div class='card-body'>
                                <!-- le formuliare d'envoie -->
                                <form action="" method="POST">
                                    <div class="input-group">
                                        <span class="input-group-text">Entrez votre titre</span>
                                        <input type="text" aria-label="First name" class="form-control" name="titel" value=<?= $slider->titel ?> required>
                                    </div>

                                    <div class="form-floating">
                                        <textarea class="form-control area-description"  id="floatingTextarea2" name="description"  required><?= $slider->description  ?></textarea>
                                    </div>

                                    <div class="form-floating">
                                        <textarea class="form-control conteiner-slide"  id="floatingTextarea2" name="text"  required><?= $slider->text ?></textarea>
                                    </div>

                                    <div class="col-12">
                                        <button class="btn btn-success submit-modification" type="submit" name="modification">Modifier</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>