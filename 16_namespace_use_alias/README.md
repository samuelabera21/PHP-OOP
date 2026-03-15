# Concept 16: Accessing Namespace Classes with use and alias (Slide 57-58)

## Exact idea from your slide
- Method 2: Use `use` keyword.
- Method 3: Use alias with `as`.

## Why we need these methods
- Full path `School\Student` works, but can become long.
- `use` makes code cleaner.
- `as` is helpful when class names are long or when two classes share the same name.

## Step-by-step understanding
1. Include the file that contains namespaced class `School\Student`.
2. Method 2: write `use School\Student;` then create `new Student()`.
3. Method 3: write `use School\Student as SchStu;` then create `new SchStu()`.
4. Call method normally.

## How to run
php OOP/16_namespace_use_alias/app_use.php
php OOP/16_namespace_use_alias/app_alias.php

## Expected output
This is a student from the School namespace.
This is a student from the School namespace.
