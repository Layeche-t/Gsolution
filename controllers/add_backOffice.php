<?php
require_once('../inc_config.php');

$post =  new Post();

if (isset($_POST['validation'])) {

    unset($_POST['validation']);

    $newPost = $post->SetPost($_POST);

    header('Location: ../templates/backOffice.php?success');
    exit;
}
