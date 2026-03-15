# Concept 20: Exception Handling in PHP (Slide 75-81)

## Exact idea from your slides
- Exception handling manages errors gracefully without crashing the program.
- Normal code flow changes when an exceptional condition happens.
- Main keywords: `try`, `throw`, `catch`, `finally`.
- Exception object methods include:
  - `getMessage()`
  - `getCode()`
  - `getFile()`
  - `getLine()`

## Why we need exception handling
- Prevent sudden program termination.
- Show controlled error messages.
- Keep application stable and user-friendly.
- Run cleanup code using `finally`.

## Step-by-step understanding
1. Put risky code inside `try`.
2. Use `throw new Exception(...)` when invalid condition happens.
3. Catch error in `catch (Exception $e)`.
4. Read exception details from `$e` methods.
5. Use `finally` for code that must always run.

## Files in this lesson
- `exception_example.php`: includes division-by-zero handling and finally block.

## How to run
php OOP/20_exception_handling/exception_example.php

## Expected output idea
- Successful divide result
- Caught exception for divide by zero
- Finally block message always runs
- Printed exception detail fields
