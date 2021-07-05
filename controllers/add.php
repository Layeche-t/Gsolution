<?php
require_once('../inc_config.php');

$user = new User();

$newUser = $user->SetUser($_POST);

var_dump($newUser);
