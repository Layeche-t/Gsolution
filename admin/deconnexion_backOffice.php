<?php
require_once('../inc_config.php');
session_destroy();
header("Location: login_backOffice.php");
exit();
