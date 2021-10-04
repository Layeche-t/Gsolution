<?php

// connxion at database 
require_once('../inc_config.php');

// instanciation
$post = new Post();

// data recovery
$trainings = $post->findBy(['type' => 'training'], 1000, $post::TABLE);
$services = $post->findBy(['type' => 'service'], 1000, $post::TABLE);
$partenariats = $post->findBy(['type' => 'partenariat'], 1000, $post::TABLE);

// header
include 'inc_header.php';
?>

<!-- main title -->
<h1 class="titel-pages font-weight-bold">Créer un compte</h1>

<div class="container px-5 py-5 mx-auto">

    <!-- for code -->
    <?php if (isset($_GET['error']) && $_GET['error'] == 'cod') : ?>
        <div class="alert alert-danger text-center font-weight-bold" role="alert">
            Le code de la session que vous avez saisi n'est pas valide !
        </div>
    <?php endif ?>
    <!-- for password -->
    <?php if (isset($_GET['error']) && $_GET['error'] == 'pw') : ?>
        <div class="alert alert-danger text-center font-weight-bold" role="alert">
            Les mots de passes ne sont pas identiques !
        </div>
    <?php endif ?>
    <!-- for email -->
    <?php if (isset($_GET['error']) && $_GET['error'] == 'em') : ?>
        <div class="alert alert-danger text-center font-weight-bold" role="alert">
            Cet email existe déja ! Veuillez saisir une nouvelle adresse email.
        </div>
    <?php endif ?>
    <!-- for empty -->
    <?php if (isset($_GET['error']) && $_GET['error'] == 'vd') : ?>
        <div class="alert alert-danger text-center font-weight-bold" role="alert">
            Veuillez remplir tous les champs obligatoires.
        </div>
    <?php endif ?>

    <!-- start of form -->
    <div class="card card0">
        <div class="d-flex flex-lg-row flex-column-reverse">
            <div class="card card1">
                <div class="row justify-content-center my-auto">
                    <div class="col-md-10 col-10 my-5">
                        <!-- the title of the form -->
                        <h2 class="mb-2 text-center font-weight-bold heading">Bienvenu !</h2>
                        <h3 class="mb-5 text-center heading">Vous n'êtes pas encore inscrit</h3>

                        <!-- form  -->
                        <form method="POST" action="../controllers/add.php">

                            <!-- start of input -->
                            <div class="my-3">
                                <label class="form-check-label py-1 mr-2 ml-2 "> Votre sexe </label>
                                <div class="form-check-inline py-1 px-2">
                                    <input type="radio" class="form-check-input" name="sexe" value="0" checked> <label class="form-check-label">M
                                    </label>
                                </div>
                                <div class="form-check-inline">
                                    <input type="radio" class="form-check-input" name="sexe" value="1"> <label class="form-check-label">F
                                    </label>
                                </div>
                            </div>
                            <!-- group input 2 -->
                            <div class="my-3">
                                <label class="form-check-label py-1 mr-2 ml-2 "> Vous êtes ? </label>
                                <div class="form-check-inline radio2 py-1">
                                    <input id="showSelect" type="radio" class="form-check-input" name="role" value="Stagiaire" checked>
                                    <label class="form-check-label">Stagiaire</label>

                                </div>

                                <div class="form-check-inline">
                                    <input id="showPartenaire" type="radio" class="form-check-input" name="role" value="Partenaire">
                                    <label class="form-check-label">Partenaire</label>
                                </div>

                                <div class="form-check-inline radio5">
                                    <input id="showClient" type="radio" class="form-check-input" name="role" value="client">
                                    <label class="form-check-label">Client </label>
                                </div>
                            </div>

                            <!-- list -->
                            <div class="form-group div">
                                <label class="py-1 mr-2 ml-2" for="exampleFormControlSelect2">Votre formation</label>
                                <select class="form-control" name="id_formation">
                                    <?php foreach ($trainings as $training) : ?>
                                        <option value="<?= $training['id'] ?>"><?= $training['titel'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>


                            <!-- list 2 -->
                            <div class="form-group divClient hidden">
                                <label class="py-1 mr-2 ml-2" for="exampleFormControlSelect2">Votre service</label>
                                <select class="form-control" name="id_formation">
                                    <?php foreach ($services as $service) : ?>
                                        <option value="<?= $service['id'] ?>"><?= $service['titel'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <!-- list 2 -->
                            <div class="form-group divPartenaire hidden">
                                <label class="py-1 mr-2 ml-2" for="exampleFormControlSelect2">Votre partenariat</label>
                                <select class="form-control" id="" name="id_formation">
                                    <?php foreach ($partenariats as $partenariat) : ?>
                                        <option value="<?= $partenariat['id'] ?>"><?= $partenariat['titel'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <!-- group input 3 -->
                            <div class="form-group"> <label class="form-control-label">Entrez le code lié à votre produit</label> <input type="text" name="code" placeholder="CO112" class="form-control w-25 border-input" required> </div>
                            <div class="form-group"> <label class="form-control-label  ">Nom</label> <input type="text" name="lastname" placeholder="Dupont" class="form-control" required> </div>
                            <div class="form-group"> <label class="form-control-label ">Prénom</label> <input type="text" name="firstname" placeholder="Michel" class="form-control" required> </div>
                            <div class="form-group"> <label class="form-control-label ">E-mail</label> <input type="email" name="email" placeholder="michel.dupont@gmail.com" class="form-control" required> </div>
                            <div class="form-group"> <label class="form-control-label ">Mot de passe</label> <input type="password" name="password" placeholder="Mot de passe" class="form-control" required> </div>
                            <div class="form-group"> <label class="form-control-label ">Confirmation de mot de passe</label> <input type="password" name="confirmPassword" placeholder="Mot de passe" class="form-control" required> </div>

                            <!-- link to conditions of use   -->
                            <div class="row justify-content-center my-3 px-3"> <button class="btn-block btn-color" type="submit" name="validation">Enregistrer</button> </div>
                            <div class="row justify-content-center my-1">
                                <a class="forogt-pass" href="#">
                                    <small class="text-dark-green forogt-pass">
                                        <h6>Lire les conditions générales</h6>
                                    </small>
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- second part of the form -->
            <div class="card card2">
                <div class="my-auto mx-md-5 px-md-2 right" style="margin: 0px;">
                    <h3 class="text-body font-weight-bold">G7solution</h3>
                    <small class="font-weight-bold">Votre partenaire en conseil et formation, vous accompagne du diagnostic à la réalisation de vos projets de développement, compétences et ressources : G7 Solution !</small><br><br>
                    <small class="text-center font-weight-bold">Adresse : 32 rue Riquet / 53 rue de la Colombette 31000 Toulouse</small>
                    <small class="text-center font-weight-bold">Téléphone : 06 19 44 53 34</small><br>
                    <small class="font-weight-bold">Email : contact@g7solution.fr</small>
                </div>

                <!-- link to form authentication -->
                <div class=" text-center mb-5">
                    <p href="#" class="sm-text mx-auto mb-1 font-weight-bold">Vous avez déja un compte ?
                        <a href="form_autho.php">
                            <button class="btn btn-white ml-2">Se connecter</button>
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- footer -->
<?php include 'inc_footer.php'; ?>

<!-- jQuery -->
<?php include 'showSelect.html'; ?>