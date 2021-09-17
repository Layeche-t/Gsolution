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

    if ($check->accepted != 1) {
        header('Location: ../templates/form_autho.php?error=atp');
        exit;
    }

    // if users password == instretd password => created new session
    if ($check->password == $_POST['password']) {
        $_SESSION['access'] = "oui";
        $_SESSION['user']['id'] = $check->id;
        $_SESSION['user']['lastname'] = $check->lastname;
        $_SESSION['user']['firstname'] = $check->firstname;
        $_SESSION['user']['email'] = $check->email;
        $_SESSION['user']['password'] = $check->password;
        $_SESSION['user']['role'] = $check->role;


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
