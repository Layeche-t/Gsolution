<?php
require_once('../inc_config.php');
session_destroy();
header('Location: admin/logout_backOffice.php');
exit();
