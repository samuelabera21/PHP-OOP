<?php

declare(strict_types=1);

/*
 Step 1: Define a class (blueprint).
 We need this to describe what every Car object should contain and do.
*/
class Car
{
    // Step 2: Properties (data/state of each object)
    // We need these to store values for each car.
    public string $color;
    public string $model;

    // Step 3: Constructor initializes object data at creation time.
    // We need this so each new Car gets model and color immediately.
    public function __construct(string $model, string $color)
    {
        $this->model = $model;
        $this->color = $color;
    }

    // Step 4: Method (behavior)
    // We need methods to define actions objects can perform.
    public function start(): string
    {
        return 'Car started!';
    }
}

// Step 5: Create an object from the class blueprint.
$myCar = new Car('Corolla', 'White');

// Step 6: Access properties and call method on that object.
echo 'Model: ' . $myCar->model . PHP_EOL;
echo 'Color: ' . $myCar->color . PHP_EOL;
echo 'Action: ' . $myCar->start() . PHP_EOL;
