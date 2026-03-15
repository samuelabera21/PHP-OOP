# Concept 19: Session in PHP (Slide 72-74)

## Exact idea from your slides
- A session stores information on the server side.
- Session data can be used across multiple pages.
- Start session with session_start() at the top of the file.
- Access session values using $_SESSION.
- End session using session_unset() and session_destroy().

## Why sessions are needed
Sessions are useful for login state and secure user data because data is kept on the server, not directly in browser storage.

## Step-by-step understanding
1. Start a session and store username.
2. Open another page and read the stored username.
3. Destroy the session and confirm data is gone.

## Files in this lesson
- start_session.php: starts session and stores username
- read_session.php: reads and prints username from session
- destroy_session.php: clears and destroys session

## How to test in browser
1. Run local server from project root:
   php -S localhost:8000 -t OOP/19_sessions
2. Open these pages in order:
   http://localhost:8000/start_session.php
   http://localhost:8000/read_session.php
   http://localhost:8000/destroy_session.php
   http://localhost:8000/read_session.php

## Expected behavior
- After start_session.php, read_session.php shows welcome message.
- After destroy_session.php, read_session.php shows no session found.
