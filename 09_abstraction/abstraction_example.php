<?php

declare(strict_types=1);

namespace OOP\Lesson09Abstraction;

/*
 Step 1: Abstract class defines a contract.
 We cannot create an object directly from this class.
*/
abstract class Animal
{
    // Step 2: Abstract method: child classes must implement it.
    abstract public function makeSound(): string;

    // Step 3: Normal method: shared behavior.
    public function sleep(): string
    {
        return 'Sleeping...';
    }
}

/*
 Step 4: Child class provides actual implementation.
*/
class Dog extends Animal
{
    public function makeSound(): string
    {
        return 'Woof! Woof!';
    }
}

class Cat extends Animal
{
    public function makeSound(): string
    {
        return 'Meow!';
    }
}

// Step 5: Create objects from child classes.
$dog = new Dog();
$cat = new Cat();

// Step 6: Use implemented and inherited methods.
echo 'Dog: ' . $dog->makeSound() . PHP_EOL;
echo 'Dog: ' . $dog->sleep() . PHP_EOL;

echo 'Cat: ' . $cat->makeSound() . PHP_EOL;
echo 'Cat: ' . $cat->sleep() . PHP_EOL;

// Not allowed (kept as comment):
// $animal = new Animal();
