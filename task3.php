<?php

// Task 3: Break on Condition

$n1=0;
$n2=1;
$range=15;
echo "Fibonacci Series: \n";
echo "$n1 $n2 ";
for($i=2;$i<$range;$i++){
    $n3=$n1+$n2;
    if($n3>100){
        break;
    }
    echo "$n3 " ;
    $n1=$n2;
    $n2=$n3;

}














?>