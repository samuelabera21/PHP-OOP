# Concept 15: Package / Namespace (Slide 53-56)

## Exact idea from your slide
- A package is a way to organize related classes, interfaces, and functions into one group.
- In PHP, this is done using namespaces.
- Namespaces help avoid name conflicts and make code modular and reusable.

## Why we need namespace
If two files define a class with the same name (for example Student), conflict happens.
Namespace solves this by giving each class a full path name.

## Step-by-step understanding
1. Create a namespaced class file: namespace School;
2. Put class Student inside that namespace.
3. Include the class file in another script.
4. Create object using full namespace path: new School\Student();
5. Call class method normally.

## Exam shortcut
- Package concept in PHP = namespace.
- Declare namespace at top of file.
- Access class by full path or use statement.

## How to run
php OOP/15_package_namespace/app.php

## Expected output
This is a student from the School namespace.
