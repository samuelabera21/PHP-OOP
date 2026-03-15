# Concept 18: Cookies in PHP (Slide 62-71)

## Exact idea from your slides
- A cookie is a small data value stored in the browser (client side).
- Cookies help remember users across pages/visits.
- Create cookie with setcookie().
- Read cookie with $_COOKIE.
- Delete cookie by setting expiration to a past time.

## Why cookies are needed
Cookies help applications:
- remember username/theme,
- keep simple preferences,
- support login-related state (with care).

## setcookie() key parameters (slide summary)
- name: cookie key (required)
- value: cookie value
- expire: unix timestamp for expiration
- path: where cookie is available (usually /)
- domain: domain/subdomain scope
- secure: send only over HTTPS
- httponly: block JavaScript access (safer)

## Lesson files
- set_cookie.php: creates username cookie with secure options
- read_cookie.php: reads cookie safely
- delete_cookie.php: deletes cookie

## Run in browser
1. Start local server from project root:
   php -S localhost:8000 -t OOP/18_cookies
2. Open in this order:
   http://localhost:8000/set_cookie.php
   http://localhost:8000/read_cookie.php
   http://localhost:8000/delete_cookie.php

## Important note
- setcookie() must run before any HTML/output.
- Secure=true works fully under HTTPS. In local HTTP demo, cookie may not be sent if secure is true.
  For classroom localhost testing, this lesson uses secure=false and httponly=true.
