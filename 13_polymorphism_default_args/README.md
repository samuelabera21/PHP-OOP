# Concept 13: Polymorphism with Default Arguments (Slide 48-50)

## Exact idea from your slide
- PHP can simulate method overloading using default argument values.
- One method can handle different numbers of parameters.
- Optional parameters make the method flexible.

## Why we need this
Instead of creating many methods for similar logic, we can use one method with optional parameters.
This keeps code simple and easy to maintain.

## Step-by-step understanding
1. Create a class with one method using optional/default parameter(s).
2. If only first argument is given, run one behavior.
3. If more arguments are given, run another behavior.
4. Use the same method name in both cases.

## Slide exercise focus
Method: `area($length, $width = null)`
- If only `$length` is given: square area = `length * length`
- If both are given: rectangle area = `length * width`

## How to run
php OOP/13_polymorphism_default_args/polymorphism_default_args_example.php

## Expected output
Square area (5): 25
Rectangle area (4, 6): 24
