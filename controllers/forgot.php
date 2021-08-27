<?php
require_once('../inc_config.php');


$user = new User();

if (isset($_POST['email'])) {

    unset($_POST['envoyer']);
    $password = uniqid();
    $message = "Bonjour, voici votre nouveau mot de passe: $password";
    $headers = 'Content=Type: text/plain; charest="utf-8"' . " ";
    // test if $_POST['email] exit in db 
    $check = $user->findOneBy(['email' => $_POST['email']], $user::TABLE);

    if ($check) {
        mail($_POST['email'], "Mot de passe oublié", $message);
    }

    // if  




    $update = $user->updateById(['password' => $_POST['password'], 'id' => $check->id], $user::TABLE);
    header('Location: ../templates/forgot_password.php?success');
    exit();
}


header('Location: ../templates/forgot_password.php?error=no');
exit();
