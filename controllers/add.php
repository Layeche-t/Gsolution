<?php
require_once('../inc_config.php');

$user = new User();
$now = new DateTime();

if (isset($_POST['validation'])) {

    unset($_POST['validation']);


    if ($_POST['password'] != $_POST['confirmPassword']) {
        header('Location: ../templates/registrationForm.php?error=pw');
        exit();
    }

    unset($_POST['confirmPassword']);
    $check = $user->findOneBy(['email' => $_POST['email']], $user::TABLE);

    if ($check) {
        header('Location: ../templates/registrationForm.php?error=em');
        exit();
    }

    $_POST['createdAt'] = $now->format('Y-m-d H:i:s');
    $newUser = $user->SetUser($_POST);

    header('Location: ../templates/form_autho.php?success');
    exit;
}
