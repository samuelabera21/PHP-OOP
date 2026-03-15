<?php

declare(strict_types=1);

namespace OOP\Lesson13PolymorphismDefaultArgs;

/*
 Step 1: One method with an optional parameter.
 This simulates overloading behavior in PHP.
*/
class AreaCalculator
{
    /*
     Step 2: If width is null, treat shape as square.
     Step 3: If width is provided, treat shape as rectangle.
    */
    public function area(float $length, ?float $width = null): float
    {
        if ($width === null) {
            return $length * $length; // Square
        }

        return $length * $width; // Rectangle
    }
}

$area = new AreaCalculator();

echo 'Square area (5): ' . $area->area(5) . PHP_EOL;
echo 'Rectangle area (4, 6): ' . $area->area(4, 6) . PHP_EOL;
