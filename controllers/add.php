<?php
require_once('../inc_config.php');

$user = new User();

if (isset($_POST['validation'])) {

    $newUser = $user->SetUser($_POST);
}

var_dump($newUser);
