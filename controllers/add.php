<?php
require_once('../inc_config.php');

$user = new User();

if (isset($_POST['validation'])) {

    unset($_POST['validation']);

    if ($_POST['password'] != $_POST['confirmPassword']){
        header('Location: ../templates/registrationForm.php?error=pw');
        exit();
    }
    unset($_POST['confirmPassword']);
    $newPost = $user->SetUser($_POST);

    header('Location: ../templates/form_autho.php?success');
    exit;

}
