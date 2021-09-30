<?php
require_once('../inc_config.php');

$to = 'tfateh43@gmail.com';
$subject = 'demande';
$message = 'hello';


mail($to, $subject, $message);
