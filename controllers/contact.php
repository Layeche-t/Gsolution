<?php

require_once('../inc_config.php');


if (isset($_POST['validation'])) {
    unset($_POST['validation']);
    if (
        empty($_POST['firstname']) && empty($_POST['lastname']) && empty($_POST['email'])
        && empty($_POST['number']) && empty($_POST['subject']) && empty($_POST['message'])
    ) {
        echo 'non';
    } else {

        $to = 'tfateh43@gmail.com';
        $subject = $_POST['subject'];
        $message = $_POST['message'];
        $headers = [];
        $headers[] = "MIME-Version: 1.0\r\n";
        $headers[] = "Content-type: text/html; charset=iso-8859-1\r\n";
        $headers[]  = 'From:' . $_POST['firstname'] . ' ' . $_POST['lastname'] .  '' . "\r\n";

        mail($to, $subject, $message, implode($headers), implode($tel));

        header('Location: ../templates/form_contact.php?success');
        exit;
    }
} else {
    echo 'Non';
}
