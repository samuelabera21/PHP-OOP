<?php

declare(strict_types=1);

/*
 Step 2: Include file that contains namespace School and class Student.
*/
require_once __DIR__ . '/School/Student.php';

/*
 Step 3: Access class using full namespace path.
*/
$student = new School\Student();

echo $student->message() . PHP_EOL;
