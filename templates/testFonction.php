<?php
$string = implode('', array_merge(range('A', 'Z'), range('a', 'z'), range('0', '9')));
$token = substr(str_shuffle($string), 0, 10);
