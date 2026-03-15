<?php

declare(strict_types=1);

namespace OOP\Lesson14RuntimePolymorphism;

/*
 Step 1: Parent class with general behavior.
*/
class Animal
{
    public function sound(): string
    {
        return 'Generic animal sound';
    }
}

/*
 Step 2: Child classes override the same method.
 Same signature, different implementation.
*/
class Dog extends Animal
{
    public function sound(): string
    {
        return 'Dog barks';
    }
}

class Cat extends Animal
{
    public function sound(): string
    {
        return 'Cat meows';
    }
}

/*
 Step 3: Parent-type array holding different child objects.
 Polymorphism happens when calling sound().
*/
$animals = [new Dog(), new Cat(), new Animal()];

foreach ($animals as $animal) {
    echo $animal->sound() . PHP_EOL;
}
