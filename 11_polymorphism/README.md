# Concept 11: Polymorphism (Slide 42-43)

## Exact idea from your slide
- Polymorphism means "many forms".
- The same method name can perform different tasks depending on the object.
- One interface can be used for different classes.
- It makes code flexible, maintainable, and extensible.

## Why we need polymorphism
Without polymorphism, we write separate logic for each class type.
With polymorphism, we can treat different objects in a common way and still get class-specific behavior.

## Step-by-step understanding
1. Define a common contract (interface) with one method name.
2. Create multiple classes that implement this method differently.
3. Store different objects in one list/array.
4. Call the same method on each object.
5. Observe different outputs depending on real object type.

## Exam shortcut
- Same method name.
- Different class implementations.
- Runtime behavior depends on object type.

## How to run
php OOP/11_polymorphism/polymorphism_example.php

## Expected output idea
- Dog makes one sound
- Cat makes another sound
- Cow makes another sound
(all via the same `makeSound()` call)
