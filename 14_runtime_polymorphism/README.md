# Concept 14: Run-Time Polymorphism (Method Overriding)

## Exact idea from your slide
- Run-time polymorphism is determined at run time.
- It is achieved through method overriding.
- A child class provides its own implementation of a parent method.
- The method signature should stay the same (name, parameters, return type).

## Why we need method overriding
Parent class gives general behavior.
Child classes customize that behavior for specific needs.

This makes code:
- flexible,
- easier to extend,
- easier to maintain.

## Step-by-step understanding
1. Create parent class `Animal` with method `sound()`.
2. Create child classes `Dog` and `Cat` extending `Animal`.
3. Override `sound()` in each child class.
4. Use parent-type references to child objects.
5. Call `sound()` and observe different outputs at run time.

## Exam shortcut
- Same method signature.
- Different implementation in child class.
- Real object type decides which method runs.

## How to run
php OOP/14_runtime_polymorphism/runtime_polymorphism_example.php

## Expected output
Dog barks
Cat meows
Generic animal sound
