<?php
require_once('../inc_config.php');
$post =  new Post();


$tabExtension = explode('.', $_FILES['picture']['name']);
$extension = strtolower(end($tabExtension));
$extensionAutrosiee = ['png', 'jpg', 'jpeg'];
$tailleMx = 50000;
$uniqueName = uniqid('', true);
$fileName = $uniqueName . '.' . $extension;
$target_dir = '../upload/' . $fileName;


if (in_array($extension, $extensionAutrosiee) && $_FILES['picture']['size'] < $tailleMx && $_FILES['picture']['error'] == 0) {

    move_uploaded_file($_FILES['picture']['tmp_name'], $target_dir);

    if (isset($_POST['validation'])) {

        unset($_POST['validation']);
        $_POST['picture'] = $fileName;
        $newPost = $post->SetPost($_POST);

        header('Location: ../admin/training_disply.php?success');
        exit;
    }
}
