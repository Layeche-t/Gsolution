<?php
require_once('../inc_config.php');


$user = new User();
$now = new DateTime();

if ($_GET['token'] = "") {
    echo 'non';
}

$check = $user->findOneBy([$_GET['token'] => 'pswResetToken'], $user::TABLE);
var_dump($check);
die;
