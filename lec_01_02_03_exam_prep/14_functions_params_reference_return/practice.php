<?php
function addFunction($a,$b){ return $a+$b; }
function addSix(&$n){ $n += 6; }
$base=10; addSix($base); echo "sum=" . addFunction(10,20) . " ref=$base\n";
