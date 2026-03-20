<?php
$score=88;
if($score>=90)$grade="A"; elseif($score>=80)$grade="B"; elseif($score>=70)$grade="C"; elseif($score>=60)$grade="D"; else $grade="F";
echo "Grade: $grade\n";
$n=29; echo ($n>0?"Positive":($n<0?"Negative":"Zero")) . "\n"; echo ($n%2==0?"Even":"Odd") . "\n";
$isPrime=$n>1; for($i=2;$i*$i<=$n;$i++){ if($n%$i==0){$isPrime=false;break;} } echo ($isPrime?"Prime":"Not prime") . "\n";
echo array_sum([13,5,7,2]) . "\n";
$nums=[12,5,78,-3,42]; echo min($nums) . " " . max($nums) . "\n";
