<?php

declare(strict_types=1);

namespace OOP\Lesson06AccessModifiers;

/*
 Step 1: Base class with all three access levels.
*/
class Fruit
{
    // Accessible everywhere.
    public string $name;

    // Accessible in this class and child classes.
    protected string $color;

    // Accessible only in this class.
    private int $weight;

    public function __construct(string $name, string $color, int $weight)
    {
        $this->name = $name;
        $this->color = $color;
        $this->weight = $weight;
    }

    // Public method can safely expose protected/private values.
    public function getDetails(): string
    {
        return "Fruit: {$this->name}, Color: {$this->color}, Weight: {$this->weight}g";
    }

    // Public setter controls updates to private property.
    public function setWeight(int $weight): void
    {
        $this->weight = $weight;
    }
}

/*
 Step 2: Child class can access protected members,
 but cannot access private members of parent.
*/
class Mango extends Fruit
{
    public function getColorFromChild(): string
    {
        // Allowed: protected property in child class.
        return $this->color;
    }

    public function privateAccessNote(): string
    {
        // Not allowed (would error if uncommented): return (string) $this->weight;
        return 'Child class cannot access parent private property directly.';
    }
}

// Step 3: Create object.
$mango = new Mango('Mango', 'Yellow', 300);

// Step 4: Direct access.
echo 'Public name (direct): ' . $mango->name . PHP_EOL; // Allowed
// echo $mango->color;  // Error: protected
// echo $mango->weight; // Error: private

// Step 5: Valid access through methods.
echo 'Details via method: ' . $mango->getDetails() . PHP_EOL;
echo 'Protected color via child method: ' . $mango->getColorFromChild() . PHP_EOL;
echo $mango->privateAccessNote() . PHP_EOL;

// Step 6: Update private data using public method.
$mango->setWeight(350);
echo 'After update: ' . $mango->getDetails() . PHP_EOL;
