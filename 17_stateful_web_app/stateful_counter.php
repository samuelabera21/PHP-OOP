<?php

declare(strict_types=1);

/*
 Stateful example using both session and cookie.
 session_start() must be called before any output.
*/
session_start();

// Step 1: Keep visit count on server side (session).
if (!isset($_SESSION['visit_count'])) {
    $_SESSION['visit_count'] = 0;
}
$_SESSION['visit_count']++;

// Step 2: Keep first visit time in browser (cookie).
if (!isset($_COOKIE['first_visit'])) {
    $firstVisit = date('Y-m-d H:i:s');
    setcookie('first_visit', $firstVisit, time() + 86400, '/'); // valid for 1 day
    $firstVisitText = $firstVisit . ' (set now)';
} else {
    $firstVisitText = $_COOKIE['first_visit'];
}

echo '<h2>Stateful Counter</h2>';
echo '<p>Session visit count: ' . $_SESSION['visit_count'] . '</p>';
echo '<p>First visit (cookie): ' . $firstVisitText . '</p>';
echo '<p>Refresh the page: session count increases because state is remembered.</p>';
