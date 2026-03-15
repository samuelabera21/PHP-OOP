# Concept 17: Introduction to Stateful Web Application (Slide 60-61)

## Exact idea from your slide
- A stateful web application keeps user data (state) across multiple requests.
- This is important for login systems, shopping carts, and user preferences.
- PHP provides two main ways to keep state:
  - Cookies (stored in browser/client)
  - Sessions (stored on server, session id usually in cookie)

## Why we need state
HTTP is stateless by default.
That means each request is independent and does not remember previous actions.
State management solves this by remembering user context.

## Step-by-step understanding
1. A user sends a request to the server.
2. Server responds and may save state data.
3. On next request, server reads stored state.
4. Application continues from previous user context.

## Files in this lesson
- `stateless_counter.php`: demonstrates no memory between requests.
- `stateful_counter.php`: demonstrates state memory using session and cookie.

## How to run in browser (recommended)
1. From project root run:
   php -S localhost:8000 -t OOP/17_stateful_web_app
2. Open these URLs in browser:
   http://localhost:8000/stateless_counter.php
   http://localhost:8000/stateful_counter.php
3. Refresh pages and compare behavior.

## What to observe
- Stateless page always starts from the same value.
- Stateful page keeps increasing visit count (session).
- Cookie remembers your first-visit timestamp in browser.
