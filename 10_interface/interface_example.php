<?php

declare(strict_types=1);

namespace OOP\Lesson10Interface;

/*
 Step 1: Interface defines a contract.
 No properties, only method signatures.
*/
interface Animal
{
    public function makeSound(): string;
}

/*
 Step 2: Class implements interface.
 It MUST implement all interface methods.
*/
class Cat implements Animal
{
    public function makeSound(): string
    {
        return 'Meow';
    }
}

class Dog implements Animal
{
    public function makeSound(): string
    {
        return 'Woof';
    }
}

// Step 3: Create objects and use a shared interface contract.
$cat = new Cat();
$dog = new Dog();

echo 'Cat sound: ' . $cat->makeSound() . PHP_EOL;
echo 'Dog sound: ' . $dog->makeSound() . PHP_EOL;
