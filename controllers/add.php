<?php
require_once('../inc_config.php');

$user = new User();

if (isset($_POST['validation'])) {

    $newPost = $user->SetUser($_POST);
    header('Location: ../templates/backoffice.php');
    exit;
} else {
}
