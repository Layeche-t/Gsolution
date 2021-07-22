<?php
require_once('../inc_config.php');

$userBackOffice =  new User();

if (!empty($_POST) && !empty($_POST['email']) && !empty($_POST['password'])) {

    $connexion = $userBackOffice->findOneBy(['email' => $_POST['email']], $userBackOffice::TABLE);

    if ($connexion->password === $_POST['password']) {

        $_SESSION['admi']['id'] = $connexion->id;
        $_SESSION['admi']['email'] = $connexion->email;

        header('Location: ../admin/home.php');
        exit();
    }
} else {
    header('Location: ../admin/login_backOffice.php?errors=noConex');
    exit();
}
