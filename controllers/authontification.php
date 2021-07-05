<?php
require_once('../inc_config.php');

$error = '';
$user =  new User();


if (isset($_POST['email']) && $_POST['email'] != "") {
    // check if email exists 
    $check = $user->findOneBy(['email' => $_POST['email']], $user::TABLE);

    if (!$check) {
        header('Location: ../templates/form_autho.php?error=nok');
        exit;
    }
    // if users password == instretd password => created new session
    if ($check->password === $_POST['password']) {
        $_SESSION['user']['id'] = $check->id;
        $_SESSION['user']['email'] = $check->email;

        header('Location: ../templates/home_display.php');
        exit;
    }
}
