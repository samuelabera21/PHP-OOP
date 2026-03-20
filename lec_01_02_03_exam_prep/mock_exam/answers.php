<?php
echo "Q1: Server-side code runs on server, examples: PHP, Python, Java.\n";
$myName="YourName"; echo "Q2: $myName - " . date("l") . "\n";
$name="Aster"; echo 'Q3 single: Hello $name\\n' . "\n"; echo "Q3 double: Hello $name\n";
$i=12; $f=3.5; $b=true; var_dump($i,$f,$b);
$v="99.8"; $tmp=(int)$v; settype($v,"integer"); echo "Q5 temp=$tmp perm=$v\n";
$age=17; echo "Q6 " . (($age>=18)?"Adult":"Minor") . "\n";
$score=72; if($score>=90)echo "Q7 A\n"; elseif($score>=80)echo "Q7 B\n"; elseif($score>=70)echo "Q7 C\n"; elseif($score>=60)echo "Q7 D\n"; else echo "Q7 F\n";
for($x=1;$x<=2;$x++)echo "for:$x "; echo "\n"; $x=1; while($x<=2){echo "while:$x ";$x++;} echo "\n"; $x=1; do{echo "do:$x ";$x++;}while($x<=2); echo "\n"; foreach(["A","B"] as $it)echo "foreach:$it "; echo "\n";
$arr=[10,20,30]; $assoc=["name"=>"Kalab","age"=>21]; echo "Q9 {$arr[0]} {$assoc['name']}\n";
function sum2($a,$b){return $a+$b;} function plusFive(&$n){$n+=5;} $n=10; plusFive($n); echo "Q10 sum=" . sum2(5,6) . " ref=$n\n";
$nums=[12,5,78,-3,42]; echo "Q11 min=" . min($nums) . " max=" . max($nums) . "\n";
$students=[["name"=>"Kalab","scores"=>[70,80,90]],["name"=>"Liya","scores"=>[50,40,55]]]; foreach($students as $s){$avg=array_sum($s['scores'])/count($s['scores']); echo "Q12 {$s['name']} avg=" . round($avg,2) . " => " . ($avg>=60?"Pass":"Fail") . "\n";}
