<?php

declare(strict_types=1);

/*
 Step 2: Read cookie using $_COOKIE.
*/
if (isset($_COOKIE['username'])) {
    echo 'Welcome ' . $_COOKIE['username'] . PHP_EOL;
} else {
    echo 'No cookie found!' . PHP_EOL;
}
