<?php
require_once('../inc_config.php');
session_destroy();
header("Location: logout_backOffice.php");
exit();
