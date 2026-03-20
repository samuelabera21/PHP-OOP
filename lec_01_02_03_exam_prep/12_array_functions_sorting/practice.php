<?php
$names=["Nohom","Alemu","Kebede"]; array_push($names,"Hana"); array_pop($names); sort($names);
echo implode(", ",$names) . "\n";
$scores=["Peter"=>80,"Ben"=>60,"Joe"=>95]; asort($scores); foreach($scores as $n=>$s) echo "$n=>$s\n";
