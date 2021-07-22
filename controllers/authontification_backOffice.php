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
    // if users password == instretd password => created new session
    if ($connexion->password != $_POST['password']) {
        header('Location: ../admin/login_backOffice.php?error=nok');
        exit;
    }
    if (!$connexion->role['admin']) {
        header('Location: ../admin/login_backOffice.php?error=role');
        exit;
    } else {

        $_SESSION['user']['id'] = $connexion->id;
        $_SESSION['user']['email'] = $connexion->email;

        header('Location:../admin/home.php');
        exit;
    }
} else {
    header('Location: ../admin/login_backOffice.php?error=Ba');
    exit;
}
