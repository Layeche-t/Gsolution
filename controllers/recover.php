<?php
require_once('../inc_config.php');

$user = new User();


if (empty($_GET['token'])) {
    header('Location:../templates/forgot_password.php?error=notok');
    exit;
}

$check = $user->findOneBy(['token' => $_GET['token']], $user::TABLE);
if (empty($check)) {
    header('Location:../templates/forgot_password.php?error=notok');
    exit;
}
header('Location:../templates/newPassword.php?token=' . $_GET['token']);
exit;
