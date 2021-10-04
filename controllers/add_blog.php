<?php
require_once('../inc_config.php');

$post = new Post();
$fileManager = new FileManger();


//upload file



if (isset($_POST['validation'])) {

    unset($_POST['validation']);
    $fileName = $fileManager->UploadImage($_FILES['picture']);

    if ($fileName == 'size') {
        header('Location: ../admin/' . $_SESSION['info']['redirect'] . '.php?size');
        exit;
    }
    $_POST['picture'] = $fileName;
    $newPost = $post->set($_POST, $_SESSION['info']['table']);


    header('Location: ../admin/' . $_SESSION['info']['redirect'] . '.php?success');
    exit;
}
