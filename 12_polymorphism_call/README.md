# Concept 12: Polymorphism with __call() (Slide 44-47)

## Exact idea from your slide
- PHP does not support true method overloading like Java/C++.
- PHP can simulate overloading using the magic method `__call()`.
- `__call()` runs when a method does not exist (or is not accessible).
- It receives:
  - method name
  - arguments array

## Why we need this
Sometimes we want one method name to handle different argument counts.
Using `__call()` allows flexible behavior with one method label.

## Step-by-step understanding
1. Create class `MathOperation`.
2. Add `__call($methodName, $arguments)`.
3. If method is `multiply`:
4. Multiply two numbers when 2 arguments are given.
5. Multiply three numbers when 3 arguments are given.
6. Return "Invalid number of arguments!" for other counts.
7. Return "Method not found" for unknown method names.

## Exam shortcut
- `__call()` handles dynamic method calls.
- Common use: simulate method overloading in PHP.
- Signature: `public function __call(string $name, array $arguments)`

## How to run
php OOP/12_polymorphism_call/polymorphism_call_example.php

## Expected output
multiply(5, 10): 50
multiply(2, 3, 4): 24
multiply(5): Invalid number of arguments!
divide(10, 2): Method 'divide' not found!
