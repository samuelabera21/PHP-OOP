<?php
// Part IV Q2: Read first two words from first three lines
$file = "D://myfile/file.txt";
$handle = fopen($file, "r");
for ($i = 0; $i < 3; $i++) {
    $line = fgets($handle);
    if ($line !== false) {
        $words = explode(" ", trim($line));
        $firstTwo = array_slice($words, 0, 2);
        echo implode(" ", $firstTwo) . "<br>";
    }
}
fclose($handle);
?>
