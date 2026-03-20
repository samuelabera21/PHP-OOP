<?php
for ($i=1;$i<=5;$i++) echo $i . " "; echo "\n";
$w=1; while($w<=3){ echo $w . " "; $w++; } echo "\n";
$d=1; do { echo $d . " "; $d++; } while($d<=3); echo "\n";
foreach (["Apple","Banana"] as $f) echo $f . " "; echo "\n";
for ($x=1;$x<=5;$x++){ if($x==3) continue; echo $x; } echo "\n";
