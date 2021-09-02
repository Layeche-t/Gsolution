<?php
require_once('../inc_config.php');

$user =  new User();




if (isset($_POST['email']) && $_POST['email'] != "") {
    // check if email exists 
    $check = $user->findOneBy(['email' => $_POST['email']], $user::TABLE);

    if (!$check) {
        header('Location: ../templates/form_autho.php?error=eml');
        exit;
    }
    // if users password == instretd password => created new session
    if ($check->password === $_POST['password']) {
        $_SESSION['access'] = "oui";
        $_SESSION['id'] = $check->id;
        $_SESSION['lastname'] = $check->lastname;


        header('Location:../templates/home_display.php');
        exit;
    } else {
        header('Location: ../templates/form_autho.php?error=mdp');
        exit;
    }
} else {
    header('Location: ../templates/form_autho.php?error=empty');
    exit;
}
