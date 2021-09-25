<?php
require_once('../inc_config.php');

$user = new User();

if (isset($_POST['modification'])) {


    unset($_POST['modification']);

    $update = $user->updateById($_POST, $user::TABLE);


    header('Location: ../' . $_SESSION['info']['redirect'] . '.php?yes');

    exit;
}
