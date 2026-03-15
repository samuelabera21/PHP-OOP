<?php

declare(strict_types=1);

namespace OOP\Lesson11Polymorphism;

/*
 Step 1: Common contract.
 All classes must provide makeSound().
*/
interface Animal
{
    public function makeSound(): string;
}

/*
 Step 2: Different classes, same method name,
 different behavior for each class.
*/
class Dog implements Animal
{
    public function makeSound(): string
    {
        return 'Woof!';
    }
}

class Cat implements Animal
{
    public function makeSound(): string
    {
        return 'Meow!';
    }
}

class Cow implements Animal
{
    public function makeSound(): string
    {
        return 'Moo!';
    }
}

// Step 3: One array with different object types.
$animals = [new Dog(), new Cat(), new Cow()];

// Step 4: Same method call, different output by object type.
foreach ($animals as $animal) {
    echo $animal->makeSound() . PHP_EOL;
}
