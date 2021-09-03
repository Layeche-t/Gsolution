<?php
require_once('../inc_config.php');

$user = new User();

if (
    isset($_POST['oldpwd']) && isset($_POST['password']) && isset($_POST['confpwd']) &&
    $_POST['oldpwd'] != "" && $_POST['password'] != "" && $_POST['confpwd'] != ""
) {
    unset($_POST['modification']);
    $check = $user->findOneBy(['id' => $_POST['id']], $user::TABLE);


    if ($check->password == $_POST['oldpwd']) {

        unset($_POST['oldpwd']);

        if ($_POST['password'] == $_POST['confpwd']) {

            unset($_POST['confpwd']);

            $update = $user->updateById($_POST, $user::TABLE);


            header('Location: ../templates/myAccount.php?yes&amp;id=' . $_POST['id']);
            exit();
        } else {
            header('Location: ../templates/myAccount.php?error=vidmod');
            exit();
        }
    } else {
        header('Location: ../templates/myAccount.php?error=idmod');
        exit();
    }
} else {
    header('Location: ../templates/myAccount.php?error=vid');
    exit();
}
