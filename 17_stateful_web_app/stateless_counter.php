<?php

declare(strict_types=1);

/*
 Stateless example:
 This value is recreated on every request.
 So it does not remember previous page loads.
*/
$counter = 0;
$counter++;

echo '<h2>Stateless Counter</h2>';
echo '<p>Counter value: ' . $counter . '</p>';
echo '<p>Refresh the page: it stays 1 because no state is stored.</p>';
