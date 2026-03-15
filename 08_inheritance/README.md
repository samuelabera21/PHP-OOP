# Concept 8: Inheritance (Slide 26, 27, 28)

## Exact idea from your slide
- Inheritance means one class derives from another class.
- A child class inherits properties and methods from a parent class.
- It promotes code reusability.
- Child class gets `public` and `protected` members from parent.
- In PHP, inheritance is done using the `extends` keyword.

## Why we need inheritance
Without inheritance, we repeat the same code in many classes.
With inheritance:
- common code stays in parent class,
- child classes reuse it,
- child classes can add their own special behavior.

## Step-by-step understanding
1. Create a parent class (`Fruit`) with shared properties and method.
2. Create a child class (`Strawberry`) using `extends Fruit`.
3. Child class automatically gets parent methods.
4. Add an extra child method to show specialization.
5. Create child object and call both parent + child methods.

## Exam shortcut
- Parent = general class
- Child = specialized class
- `extends` = inheritance keyword
- Reuse + specialization = main benefit

## How to run
php OOP/08_inheritance/inheritance_example.php

## Expected output idea
- Child method message
- Parent method output using inherited properties
