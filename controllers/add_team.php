<?php
require_once('../inc_config.php');
$user =  new User();


$tabExtension = explode('.', $_FILES['image']['name']);
$extension = strtolower(end($tabExtension));
$extensionAutrosiee = ['png', 'jpg', 'jpeg'];
$tailleMx = 50000;
$uniqueName = uniqid('', true);
$fileName = $uniqueName . '.' . $extension;
$target_dir = '../upload/' . $fileName;


if (in_array($extension, $extensionAutrosiee) && $_FILES['image']['size'] < $tailleMx && $_FILES['picture']['error'] == 0) {

    move_uploaded_file($_FILES['image']['tmp_name'], $target_dir);

    if (isset($_POST['validation'])) {

        unset($_POST['validation']);
        $_POST['image'] = $fileName;
        $newPost = $user->SetUser($_POST);

        header('Location: ../admin/team_disply.php?success');
        exit;
    }
}
