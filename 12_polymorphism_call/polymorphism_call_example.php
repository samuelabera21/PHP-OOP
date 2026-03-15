<?php

declare(strict_types=1);

namespace OOP\Lesson12PolymorphismCall;

/*
 Step 1: Class that simulates overloading using __call().
*/
class MathOperation
{
    /*
     Step 2: __call is invoked when a called method is missing.
     $name = method name, $arguments = argument list.
    */
    public function __call(string $name, array $arguments): int|string
    {
        // Step 3: Handle only method name 'multiply'.
        if ($name !== 'multiply') {
            return "Method '{$name}' not found!";
        }

        $count = count($arguments);

        // Step 4: multiply(a, b)
        if ($count === 2) {
            return $arguments[0] * $arguments[1];
        }

        // Step 5: multiply(a, b, c)
        if ($count === 3) {
            return $arguments[0] * $arguments[1] * $arguments[2];
        }

        // Step 6: Any other argument count.
        return 'Invalid number of arguments!';
    }
}

$math = new MathOperation();

echo 'multiply(5, 10): ' . $math->multiply(5, 10) . PHP_EOL;
echo 'multiply(2, 3, 4): ' . $math->multiply(2, 3, 4) . PHP_EOL;
echo 'multiply(5): ' . $math->multiply(5) . PHP_EOL;
echo 'divide(10, 2): ' . $math->divide(10, 2) . PHP_EOL;
