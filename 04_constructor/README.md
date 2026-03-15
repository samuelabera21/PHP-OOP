# Concept 4: Constructor (Slide 12, 13, 14)

## Exact idea from your slide
- A constructor is a special method automatically called when an object is created.
- It is used to initialize object properties at creation time.
- It reduces code repetition and simplifies object initialization.
- Constructor name in PHP: __construct()

## Why we need constructor
Without constructor:
- We create object first, then assign each property manually.
- This can repeat code and cause mistakes if we forget values.

With constructor:
- We pass required values one time during object creation.
- Every object starts in a valid and complete state.

## Step-by-step understanding
1. Define class Student with properties name and age.
2. Add __construct(name, age) to receive startup values.
3. Inside constructor, assign values to object properties.
4. Create objects using new Student("Sara", 20).
5. Use a method like showInfo() to display object data.
6. Notice each object has different values but same class behavior.

## Compare quickly
Without constructor:
- new Student()
- set name and age separately

With constructor:
- new Student("Sara", 20)
- ready immediately

## How to run
php OOP/04_constructor/constructor_example.php

## Expected output
Name: Sara, Age: 20
Name: John, Age: 22
