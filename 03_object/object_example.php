<?php

declare(strict_types=1);

/*
 Step 1: Class = blueprint.
 The blueprint says every Car object has color, model, and can start.
*/
class Car
{
    public string $color;
    public string $model;

    public function start(): string
    {
        return "{$this->model} started!";
    }
}

// Step 2: Create first object (instance) using new.
$myCar = new Car();

// Step 3: Assign real values to properties using ->
$myCar->color = 'Red';
$myCar->model = 'Toyota';

// Step 4: Create second object from same class.
$friendCar = new Car();
$friendCar->color = 'Blue';
$friendCar->model = 'Honda';

// Step 5: Access properties and call methods using ->
echo 'My Car: ' . $myCar->color . ' ' . $myCar->model . PHP_EOL;
echo 'Action: ' . $myCar->start() . PHP_EOL;

echo 'Friend Car: ' . $friendCar->color . ' ' . $friendCar->model . PHP_EOL;
echo 'Action: ' . $friendCar->start() . PHP_EOL;

/*
 Step 6 takeaway:
 Both objects came from one class blueprint,
 but each object has different property values.
*/
