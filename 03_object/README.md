# Concept 3: Object (Slide 7 and 8)

## Exact idea from your slide
- An object is an instance of a class.
- It is the concrete realization of the blueprint defined by the class.
- Classes are nothing without objects.
- Objects are created using the new keyword.
- To access properties and methods, use the object operator ->

## Why we need objects
A class only describes a plan.
An object is the real usable thing with real values.

Example idea from slide:
- Class = blueprint of a car
- Object = real car (for example, a red Toyota)

## Step-by-step
1. Define the class blueprint (`Car`) with properties and methods.
2. Create objects with `new`.
3. Give each object its own property values.
4. Access property values with `->`.
5. Call methods with `->`.
6. Observe that multiple objects from one class can have different values.

## Important syntax
```php
$myCar = new Car();
$myCar->color = "Red";
$myCar->model = "Toyota";
$myCar->start();
```

## How to run
```bash
php OOP/03_object/object_example.php
```

## VS Code note (why the warning happened)
If another lesson file also has a class named `Car`, Intelephense can confuse the two class definitions.
This lesson uses its own namespace in `object_example.php` to keep examples independent and remove the
"Expected 2 arguments. Found 0" warning on `new Car()`.

## Expected understanding
- Same class, many objects.
- Methods are shared behavior from class.
- Property values are different per object.
