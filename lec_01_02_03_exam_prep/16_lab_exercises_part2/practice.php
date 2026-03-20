<?php
$person=["name"=>"Kalab","age"=>21,"email"=>"kalab@example.com"]; echo "{$person['name']} is {$person['age']} years old and email is {$person['email']}.\n";
$value=2; do{ echo $value . " "; $value*=2; }while($value<30); echo $value . "\n";
$students=[["name"=>"Kalab","scores"=>[70,80,90]],["name"=>"Aster","scores"=>[55,60,58]]];
foreach($students as $s){ $avg=array_sum($s['scores'])/count($s['scores']); echo $s['name'] . " avg=" . round($avg,2) . " => " . ($avg>=60?"Pass":"Fail") . "\n"; }
