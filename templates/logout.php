<?php
require_once('../inc_config.php');
session_destroy();
header('Location:form_autho.php');
exit();
