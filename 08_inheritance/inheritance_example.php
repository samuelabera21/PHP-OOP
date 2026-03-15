<?php

declare(strict_types=1);

namespace OOP\Lesson08Inheritance;

/*
 Step 1: Parent class (shared data + behavior).
*/
class Fruit
{
    public string $name;
    public string $color;

    public function __construct(string $name, string $color)
    {
        $this->name = $name;
        $this->color = $color;
    }

    public function intro(): string
    {
        return "The fruit is {$this->name} and the color is {$this->color}.";
    }
}

/*
 Step 2: Child class inherits from parent using extends.
 It reuses parent properties and methods, and adds new behavior.
*/
class Strawberry extends Fruit
{
    public function message(): string
    {
        return 'Am I a fruit or a berry?';
    }
}

// Step 3: Create object of child class.
$strawberry = new Strawberry('Strawberry', 'Red');

// Step 4: Call child method and inherited parent method.
echo $strawberry->message() . PHP_EOL;
echo $strawberry->intro() . PHP_EOL;
