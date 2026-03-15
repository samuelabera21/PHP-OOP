<?php

declare(strict_types=1);

/*
 Step 1: Include namespaced class file from previous lesson.
*/
require_once __DIR__ . '/../15_package_namespace/School/Student.php';

/*
 Step 2 (Slide Method 2): use keyword.
*/
use School\Student;

$student = new Student();
echo $student->message() . PHP_EOL;
