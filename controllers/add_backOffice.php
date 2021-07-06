<?php
require_once('../inc_config.php');

$post =  new Post();


if (isset($_POST['validation'])) {
    $newPost = $post->SetUser($_POST);
    header('Location: ../templates/backoffice.php?error=yes');
    exit;
} else {
    header('Location: ../templates/backoffice.php?error=oui');
    exit;
}
