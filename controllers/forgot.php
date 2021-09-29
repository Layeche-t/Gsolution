<?php
// connexion database
require_once('../inc_config.php');

// object
$user = new User();
$now = new DateTime();

//checking the variable 
if (isset($_POST['email']) && !empty($_POST['email'])) {

    // check of existence of an email
    $check = $user->findOneBy(['email' => $_POST['email']], $user::TABLE);

    // email construction
    if ($check) {
        $string = implode('', array_merge(range('A', 'Z'), range('a', 'z'), range('0', '9')));

        $mini = strtolower($string);

        // token creation
        $token = substr(str_shuffle($mini), 0, 20);
        $_POST['newCreat'] = $now->format('Y-m-d H:i:s');
        $update = $user->updateById(['token' => $token, 'newCreat' => $_POST['newCreat'], 'id' => $check->id], $user::TABLE);
        $link = "http://localhost/Gsolution/controllers/recover?token=$token";

        //the elements of the message
        $to = $_POST['email'];
        $subject = 'Réinitialisation du mot de passe';
        $message = 'Bonjour, ci-joint le lien qui vous permettre de réinitialisation votre mot de passe: ' . $link;

        // sending email
        mail($to, $subject, $message);
        // redirect
        header('Location: ../templates/forgot_password.php?success');
        exit;
    } else {
        // redirect if email not exist 

        header('Location: ../templates/forgot_password.php?error=noc');
        exit;
    }
} else {
    // redirect if email empty 
    header('Location: ../templates/forgot_password.php?error=vid');
    exit;
}
