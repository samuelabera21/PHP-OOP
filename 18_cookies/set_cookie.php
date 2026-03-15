<?php

declare(strict_types=1);

/*
 Step 1: Create cookie before any output.
 For localhost HTTP demo: secure=false, httponly=true.
*/
$ok = setcookie(
    'username',
    'Abebe',
    time() + 3600, // 1 hour
    '/',
    '',
    false,
    true
);

echo $ok
    ? 'Cookie set successfully. Go to read_cookie.php' . PHP_EOL
    : 'Failed to set cookie.' . PHP_EOL;
