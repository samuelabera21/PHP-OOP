<?php

declare(strict_types=1);

namespace OOP\Lesson20ExceptionHandling;

/*
 Step 1: A function that may throw an exception.
*/
function divide(float $a, float $b): float
{
    if ($b == 0.0) {
        throw new \Exception('Division by zero is not allowed.', 1001);
    }

    return $a / $b;
}

// Step 2: try/catch/finally around risky operations.
try {
    echo '10 / 2 = ' . divide(10, 2) . PHP_EOL;

    // This will throw exception.
    echo '10 / 0 = ' . divide(10, 0) . PHP_EOL;
} catch (\Exception $e) {
    // Step 3: Handle exception without crashing.
    echo 'Caught exception: ' . $e->getMessage() . PHP_EOL;

    // Step 4: Built-in exception detail methods.
    echo 'Code: ' . $e->getCode() . PHP_EOL;
    echo 'File: ' . basename($e->getFile()) . PHP_EOL;
    echo 'Line: ' . $e->getLine() . PHP_EOL;
} finally {
    // Step 5: Always executes, whether exception happened or not.
    echo 'Finally block always runs.' . PHP_EOL;
}
