<?php

declare(strict_types=1);

namespace OOP\Lesson04Constructor;

/*
 Step 1: Define class blueprint.
 Every student object should have name and age.
*/
class Student
{
    public string $name;
    public int $age;

    /*
     Step 2: Constructor.
     Why needed: sets required values when object is created,
     so we do not repeat manual assignments later.
    */
    public function __construct(string $name, int $age)
    {
        // Step 3: Initialize properties with input values.
        $this->name = $name;
        $this->age = $age;
    }

    // Step 4: Regular method to use object data.
    public function showInfo(): string
    {
        return "Name: {$this->name}, Age: {$this->age}";
    }
}

// Step 5: Create objects with constructor arguments.
$s1 = new Student('Sara', 20);
$s2 = new Student('John', 22);

// Step 6: Display information from each object.
echo $s1->showInfo() . PHP_EOL;
echo $s2->showInfo() . PHP_EOL;
