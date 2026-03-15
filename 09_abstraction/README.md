# Concept 9: Abstraction (Slide 30-35)

## Exact idea from your slide
- Abstraction shows only essential features and hides internal implementation details.
- It focuses on what an object does, not how it does it.
- It reduces complexity and improves maintainability.
- In PHP, abstraction is mainly achieved using abstract classes and abstract methods.

## Key rules to remember
- An abstract class cannot be instantiated directly.
- An abstract class can contain:
  - abstract methods (declaration only),
  - normal methods (with body).
- Child classes must implement all abstract methods.

## Why we need abstraction
Abstraction gives a common contract for related classes.
Example: all animals should make sound, but each animal has its own sound.

## Step-by-step understanding
1. Create an abstract class (`Animal`).
2. Declare abstract method `makeSound()`.
3. Add normal method `sleep()` in the abstract class.
4. Create child classes (`Dog`, `Cat`) that extend `Animal`.
5. Implement `makeSound()` in each child class.
6. Use child objects and call both abstract-implemented and normal inherited methods.

## Exam shortcut
- Abstract class = blueprint + partial implementation.
- Abstract method = must be implemented by child.
- Cannot do `new AbstractClass()`.

## How to run
php OOP/09_abstraction/abstraction_example.php

## Expected output idea
- Dog sound
- Cat sound
- Shared sleep behavior from parent class
