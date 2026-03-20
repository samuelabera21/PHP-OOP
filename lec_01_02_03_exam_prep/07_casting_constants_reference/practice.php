<?php
$val = "123.45"; $intVal = (int)$val; settype($val, "integer");
define("MAX_USERS", 100); const APP_NAME = "Exam Prep";
$a = 10; $b = &$a; $b = 20;
echo "temporary=$intVal permanent=$val app=" . APP_NAME . " max=" . MAX_USERS . " a=$a b=$b\n";
