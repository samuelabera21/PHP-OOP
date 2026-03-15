# Concept 6: Access Modifiers (Slide 18, 19, 20)

## Exact idea from your slide
Access modifiers control visibility (where properties and methods can be accessed).

There are three modifiers:
- `public`: accessible everywhere (inside and outside class).
- `protected`: accessible inside class and inside child classes.
- `private`: accessible only inside the same class.

## Why we need access modifiers
Without access control, any code can change sensitive data directly.
Access modifiers help us:
- protect data from accidental changes,
- hide internal details,
- expose only what is necessary.

## Step-by-step understanding
1. Create a class with public, protected, and private properties.
2. Access public property directly from object (allowed).
3. Access protected/private indirectly through public methods (allowed).
4. Use inheritance to show child class can access protected, but not private.
5. Keep private data hidden and controlled by class methods.

## Important exam point
- `public` = everyone
- `protected` = class + child classes
- `private` = only same class

## How to run
php OOP/06_access_modifiers/access_modifiers_example.php

## Note
In this example, illegal direct access lines are kept as comments so the file runs.
If you uncomment them, PHP will throw access errors (as in your slide example).
