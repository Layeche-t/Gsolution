<?php
require_once('../inc_config.php');
$user =  new User();


if (isset($_POST['validation'])) {



    unset($_POST['validation']);



    $newPost = $user->SetUser($_POST);




    header('Location: ../admin/users_disply.php?success');
    exit;
}
