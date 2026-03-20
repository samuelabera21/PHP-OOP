<?php
$request = ["url" => "/index.php", "action" => "load_home"];
$dbResult = ["title" => "Welcome", "message" => "Dynamic content generated on server"];
echo "Client requested: {$request['url']}\n";
echo "Server received action: {$request['action']}\n";
echo "<h1>{$dbResult['title']}</h1><p>{$dbResult['message']}</p>\n";
