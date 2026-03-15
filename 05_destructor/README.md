# Concept 5: Destructor (Slide 16 and 17)

## Exact idea from your slide
- A destructor is called when an object is destructed, or when the script stops/exits.
- If you create a `__destruct()` function, PHP automatically calls it at the end.
- The destructor function starts with two underscores (`__destruct`).

## Why we need destructor
A destructor is useful for final actions before an object is removed, such as:
- printing final messages,
- closing files or connections,
- cleaning temporary data.

In your exam context, remember:
- Constructor = setup at object creation.
- Destructor = cleanup at object end.

## Step-by-step understanding
1. Define a class with a property (`$name`).
2. Use `__construct()` to assign value when object is created.
3. Add `__destruct()` for final action when object is destroyed.
4. Create object with `new`.
5. Observe that destructor runs automatically at script end.

## How to run
php OOP/05_destructor/destructor_example.php

## Expected output order
1. Object is created message
2. Normal script message
3. Destructor message at the end (automatic)
