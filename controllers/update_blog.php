<?php
require_once('../inc_config.php');

$post = new Post();

if (isset($_POST['modification'])) {

    unset($_POST['modification']);

    $update = $post->updateById($_POST, $post::TABLE);
    header('Location: ../admin/blog_disply.php?modif');
    exit();
}
