<?php
$colors=["red","green","blue"]; echo $colors[0] . "\n";
$age=["Peter"=>35,"Ben"=>37,"Joe"=>43]; $age["Peter"]=37; $age["Alex"]=30; unset($age["Ben"]);
foreach($age as $n=>$v) echo "$n=>$v\n";
$students=[["John",20,"A"],["Sara",22,"B"]]; echo $students[1][0] . "\n";
