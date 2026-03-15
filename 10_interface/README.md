# Concept 10: Interface (Slide 36-38)

## Exact idea from your slide
- Interfaces are similar to abstract classes, but with important differences.
- Interfaces cannot have properties.
- All interface methods must be public.
- Interface methods are abstract by nature (no method body).
- A class uses `implements` to follow an interface contract.
- A class can implement interface(s) while inheriting from another class.

## Why we need interfaces
Interfaces define a required behavior contract.
If multiple classes implement the same interface, we can use them in a consistent way.

## Interface vs Abstract Class (exam quick view)
- Interface: only method signatures, no properties.
- Abstract class: can have properties and normal methods.
- Interface methods: public only.
- Abstract class methods: public or protected.

## Step-by-step understanding
1. Define an interface `Animal` with method `makeSound()`.
2. Create class `Cat` implementing `Animal`.
3. Implement required method exactly.
4. Create object from `Cat`.
5. Call `makeSound()` through object.

## How to run
php OOP/10_interface/interface_example.php

## Expected output
Cat sound: Meow
Dog sound: Woof
