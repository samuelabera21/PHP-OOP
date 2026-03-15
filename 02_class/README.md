# Concept 2: Class (Slide 5 and 6)

## Exact idea from your slide
- A class is a blueprint or template for creating objects.
- It defines what properties (variables) and methods (functions) an object will have.
- You define a class using the `class` keyword.
- In a class: variables are called properties, functions are called methods.

## Why we need a class
Without a class, we repeat the same data and logic many times.
A class helps us:
- Keep related data and behavior together.
- Reuse code to create many similar objects.
- Organize code for easier maintenance and exams.

## Basic syntax (from slide)
```php
<?php
class Class_name {
  // code goes here...
}
?>
```

## Step-by-step explanation
1. `class Car`:
   This creates a blueprint named `Car`.

2. `public string $color;` and `public string $model;`:
   These are properties (data). Every car object will have these values.

3. `public function start(): string`:
   This is a method (behavior). It defines what a car can do.

4. `new Car(...)`:
   This creates an object (real instance) from the class blueprint.

5. `$car->start()`:
   This calls the method on that specific object.

## How to run
From your project root:
```bash
php OOP/02_class/class_example.php
```

## Expected output
```text
Model: Corolla
Color: White
Action: Car started!
```

## Exam memory shortcut
- Class = blueprint
- Object = real thing made from blueprint
- Property = data
- Method = behavior
