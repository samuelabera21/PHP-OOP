<?php

declare(strict_types=1);

/*
 Step 1: Include namespaced class file from previous lesson.
*/
require_once __DIR__ . '/../15_package_namespace/School/Student.php';

/*
 Step 2 (Slide Method 3): alias with as.
*/
use School\Student as SchStu;

$student = new SchStu();
echo $student->message() . PHP_EOL;
