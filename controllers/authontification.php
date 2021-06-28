<?php
require_once('../inc_config.php');


phpinfo();
$user =  new User();

if (isset($_POST['email']) && $_POST['email'] != "") {
    // check if email exists 
    $check = $user->findOneBy(['email' => $_POST['email']], $user::TABLE);
    var_dump($check);
}
