<?php
$components = ["Apache" => true, "PHP Parser" => true, "MySQL" => true];
foreach ($components as $name => $ok) { echo $name . ": " . ($ok ? "OK" : "Missing") . "\n"; }
