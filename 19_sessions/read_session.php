<?php

declare(strict_types=1);

/*
 Step 3: Start session to access stored session data.
*/
session_start();

if (isset($_SESSION['username'])) {
    echo 'Welcome ' . $_SESSION['username'] . PHP_EOL;
} else {
    echo 'No session data found.' . PHP_EOL;
}
