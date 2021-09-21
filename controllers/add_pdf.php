<?php
require_once('../inc_config.php');

$file = new File();
$fileManager = new FileManger();


//upload file



if (isset($_POST['validation'])) {


    unset($_POST['validation']);

    $fileName = $fileManager->UploadImage($_FILES['link']);
    $_POST['link'] = $fileName;

    $newFile = $file->set($_POST, $file::TABLE);


    header('Location: ../admin/' . $_SESSION['info']['redirect'] . '.php?success');

    exit;
}
