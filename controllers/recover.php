<?php
require_once('../inc_config.php');

$user = new User();
$now = new DateTime();

if (empty($_GET['token'])) {
    header('Location:../templates/passwordChange.php?error=vidtok');
    exit;
}

$check = $user->findOneBy(['token' => $_GET['token']], $user::TABLE);
if (empty($check)) {
    header('Location:../templates/passwordChange.php?error=notok');
    exit;
}
