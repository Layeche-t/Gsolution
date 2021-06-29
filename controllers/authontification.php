<?php
require_once('../inc_config.php');

$user =  new User();

if (isset($_POST['email']) && $_POST['email'] != "") {
    // check if email exists 
    $check = $user->findOneBy(['email' => $_POST['email']], $user::TABLE);
    if (!$check) {
        //TODO::redirection vers la page auth + message erreur 
    }
    // if users password == instretd password => created new session
    if ($check->password === $_POST['password']) {
        die('succes');
    }
}
