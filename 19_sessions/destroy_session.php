<?php

declare(strict_types=1);

/*
 Step 4: Start session first, then clear and destroy it.
*/
session_start();
session_unset();
session_destroy();

echo 'Session ended.' . PHP_EOL;
