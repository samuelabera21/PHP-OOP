<?php

declare(strict_types=1);

/*
 Step 1: Start session before any output.
*/
session_start();

/*
 Step 2: Store value in session on server.
*/
$_SESSION['username'] = 'Eskedar';

echo 'Session started and username stored.' . PHP_EOL;
