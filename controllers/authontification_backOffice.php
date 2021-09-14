<?php
require_once('../inc_config.php');

$user =  new User();



if (isset($_POST['email']) && $_POST['email'] != "") {
    // check if email exists 
    $connexion = $user->findOneBy(['email' => $_POST['email']], $user::TABLE);


    if ($connexion->email != $_POST['email']) {
        header('Location: ../admin/login_backOffice.php?error=K');
        exit;
    }
    // check if password exists
    if ($connexion->password != $_POST['password']) {
        header('Location: ../admin/login_backOffice.php?error=nok');
        exit;
    }
    // check if role equal admin
    if ($connexion->role != 'admin') {
        header('Location: ../admin/login_backOffice.php?error=role');
        exit;
    } else {
        // log off
        $_SESSION['autoriser'] = 'oui';
        $_SESSION['admi']['firstname'] = $connexion->firstname;
        $_SESSION['admi']['lastname'] = $connexion->lastname;
        $_SESSION['admi']['id'] = $connexion->id;

        header('Location:../admin/home.php');
        exit;
    }
} else {
    header('Location: ../admin/login_backOffice.php?error=Ba');
    exit;
}
