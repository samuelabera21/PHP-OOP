<?php

declare(strict_types=1);

/*
 Session + Cookie single-file demo
 - Use in browser with PHP built-in server.
 - This file is intentionally separate from oop_simple_system.php.
*/

session_start();

$action = $_GET['action'] ?? 'home';
$cookieName = 'username_demo';
$messages = [];

switch ($action) {
    case 'set-cookie':
        // Cookie valid for 1 day across all paths.
        $ok = setcookie($cookieName, 'Abebe', time() + 86400, '/');
        $messages[] = $ok
            ? 'Cookie set. Open "Read Cookie" next (cookie appears on next request).'
            : 'Failed to set cookie.';
        break;

    case 'read-cookie':
        if (isset($_COOKIE[$cookieName])) {
            $messages[] = 'Cookie value: ' . $_COOKIE[$cookieName];
        } else {
            $messages[] = 'No cookie found.';
        }
        break;

    case 'delete-cookie':
        $ok = setcookie($cookieName, '', time() - 3600, '/');
        $messages[] = $ok
            ? 'Cookie delete request sent. Open "Read Cookie" to verify.'
            : 'Failed to delete cookie.';
        break;

    case 'set-session':
        $_SESSION['username'] = 'Eskedar';
        $messages[] = 'Session value stored: username = Eskedar';
        break;

    case 'read-session':
        if (isset($_SESSION['username'])) {
            $messages[] = 'Session value: ' . $_SESSION['username'];
        } else {
            $messages[] = 'No session value found.';
        }
        break;

    case 'destroy-session':
        session_unset();
        session_destroy();
        $messages[] = 'Session destroyed. Open "Read Session" to verify.';
        break;

    default:
        $messages[] = 'Choose an action below to test Cookies and Sessions.';
        break;
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session and Cookie Simple System</title>
    <style>
        body { font-family: Tahoma, Arial, sans-serif; margin: 24px; line-height: 1.5; }
        h1 { margin-bottom: 8px; }
        .card { border: 1px solid #ccc; padding: 12px; border-radius: 8px; margin-bottom: 16px; }
        .links a { display: inline-block; margin: 4px 8px 4px 0; padding: 8px 10px; border: 1px solid #888; border-radius: 6px; text-decoration: none; color: #111; }
        .links a:hover { background: #f3f3f3; }
        code { background: #f2f2f2; padding: 2px 4px; border-radius: 4px; }
    </style>
</head>
<body>
    <h1>Session and Cookie Simple System</h1>
    <p>This page demonstrates Session and Cookie behavior in one file.</p>

    <div class="card">
        <strong>Current Action:</strong> <?php echo htmlspecialchars($action, ENT_QUOTES, 'UTF-8'); ?>
        <ul>
            <?php foreach ($messages as $message): ?>
                <li><?php echo htmlspecialchars($message, ENT_QUOTES, 'UTF-8'); ?></li>
            <?php endforeach; ?>
        </ul>
    </div>

    <div class="card links">
        <strong>Cookie Actions:</strong><br>
        <a href="?action=set-cookie">Set Cookie</a>
        <a href="?action=read-cookie">Read Cookie</a>
        <a href="?action=delete-cookie">Delete Cookie</a>
    </div>

    <div class="card links">
        <strong>Session Actions:</strong><br>
        <a href="?action=set-session">Set Session</a>
        <a href="?action=read-session">Read Session</a>
        <a href="?action=destroy-session">Destroy Session</a>
    </div>

    <div class="card">
        <strong>Run:</strong>
        <div><code>php -S localhost:8000 -t OOP</code></div>
        <div>Then open <code>http://localhost:8000/session_cookie_simple_system.php</code></div>
    </div>
</body>
</html>
