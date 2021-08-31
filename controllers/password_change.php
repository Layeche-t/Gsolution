<?php
require_once('../inc_config.php');

$user = new User();

if (isset($_POST['newPassword']) && isset($_POST['confPassword']) &&  isset($_POST['token'])) {
    if (!empty($_POST['newPassword']) && !empty($_POST['confPassword']) && !empty($_POST['token'])) {
        if ($_POST['newPassword'] == $_POST['confPassword']) {
            $check = $user->findOneBy(['token' => $_POST['token']], $user::TABLE);
            if ($check) {
                $update = $user->updateById(['token' => null, 'password' => $_POST['newPassword'], 'id' => $check->id], $user::TABLE);
                header('Location:../templates/form_autho.php?secs');
                exit;
            } else {
                header('Location:../templates/newPassword.php?ntkn');
                exit;
            }
        } else {
            header('Location:../templates/newPassword.php?=noid');
            exit;
        }
    } else {
        header('Location:../templates/newPassword.php?=empwd');
        exit;
    }
}
header('Location:../templates/newPassword.php?error=empwd');
exit;
