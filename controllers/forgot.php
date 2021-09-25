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
        $to = $_POST['email'];
        $subject = 'Réinitialisation de votre mot de passe';
        $headers = [];
        $headers[] = "MIME-Version: 1.0\r\n";
        $headers[] = "Content-type: text/html; charset=iso-8859-1\r\n";
        $message = "Bonjour, voici votre nouveau mot de passe : <a href=" . $link . "> $link </a>";

        // sending email
        mail($to, $subject, $message, implode($headers));
        // redirect
        header('Location: ../templates/forgot_password.php?success');
        exit;
    } else {
        // redirect
        header('Location: ../templates/forgot_password.php?error=noc');
        exit;
    }
} else {
    header('Location: ../templates/forgot_password.php?error=vid');
    exit;
}
