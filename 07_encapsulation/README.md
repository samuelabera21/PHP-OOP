# Concept 7: Encapsulation (Slide 22-25)

## Exact idea from your slide
- Encapsulation means bundling data and methods in one unit (class).
- It hides internal details and exposes only necessary parts.
- It protects data from accidental modification.
- It is achieved using access modifiers: public, protected, private.

## Why we need encapsulation
If all data is public, any code can change it in a wrong way.
Encapsulation gives controlled access:
- Keep critical data private.
- Allow changes only through class methods.
- Validate input before updating data.

## Step-by-step understanding
1. Keep important property private (example: account balance).
2. Provide public method to read value safely (`getBalance`).
3. Provide public method to update value with rules (`deposit`, `withdraw`).
4. Reject invalid updates (negative amount, over-withdraw).
5. Prevent direct outside modification of private property.

## Exam shortcut
- Encapsulation = hide data + control access.
- `private` gives strongest hiding.
- `public` methods are safe doors to interact with private data.

## How to run
php OOP/07_encapsulation/encapsulation_example.php

## Expected output idea
- Initial balance shown
- Successful deposit and withdraw
- Invalid operations rejected with messages
