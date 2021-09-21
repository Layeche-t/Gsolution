<?php
require_once('../inc_config.php');

$user = new User();
$post = new Post();
$now = new DateTime();

if (
    isset($_POST['validation'])
    && isset($_POST['firstname']) && isset($_POST['role'])
    && isset($_POST['lastname']) && isset($_POST['code'])
    && isset($_POST['email']) && isset($_POST['password']) &&
    isset($_POST['confirmPassword'])
    && !empty($_POST['firstname']) && !empty($_POST['role'])
    && !empty($_POST['lastname']) && !empty($_POST['code'])
    && !empty($_POST['email']) && !empty($_POST['password']) &&
    !empty($_POST['confirmPassword'])
) {


    unset($_POST['validation']);

    $checkPosr = $post->findOneBy(['code' => $_POST['code']], $post::TABLE);

    if ($checkPosr->code !== $_POST['code']) {
        header('Location: ../templates/registrationForm.php?error=cod');
        exit();
    }

    if ($_POST['password'] != $_POST['confirmPassword']) {
        header('Location: ../templates/registrationForm.php?error=pw');
        exit();
    }
    unset($_POST['code']);
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
} {
    header('Location: ../templates/registrationForm.php?error=vd');
    exit();
}
