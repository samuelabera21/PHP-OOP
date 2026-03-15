<?php

declare(strict_types=1);

/*
 Step 3: Delete cookie by setting past expiration time.
*/
$ok = setcookie('username', '', time() - 3600, '/');

echo $ok
    ? 'Cookie deleted. Refresh read_cookie.php to verify.' . PHP_EOL
    : 'Failed to delete cookie.' . PHP_EOL;
