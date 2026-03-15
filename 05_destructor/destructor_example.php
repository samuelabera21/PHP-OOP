<?php

declare(strict_types=1);

namespace OOP\Lesson05Destructor;

/*
 Step 1: Define class blueprint.
*/
class Fruit
{
    public string $name;

    /*
     Step 2: Constructor runs when object is created.
     We use it to initialize object data.
    */
    public function __construct(string $name)
    {
        $this->name = $name;
        echo "Created object for fruit: {$this->name}" . PHP_EOL;
    }

    /*
     Step 3: Destructor runs automatically when object ends
     (usually at script end or when object is unset).
    */
    public function __destruct()
    {
        echo "Destructor says: The fruit is {$this->name}." . PHP_EOL;
    }
}

// Step 4: Create object.
$apple = new Fruit('Apple');

// Step 5: Normal script work.
echo "Script is still running..." . PHP_EOL;

// Step 6: At end of script, destructor is called automatically.
