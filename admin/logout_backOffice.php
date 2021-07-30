<?php
require_once('../inc_config.php');
session_destroy();
header('Location: admin/login_backOffice.php');
exit();
