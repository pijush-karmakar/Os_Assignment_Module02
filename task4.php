<?php

// Task 4: Fibonacci Series printing using a Function

function fibonacci($n1,$n2,$range){
    echo "Fibonacci Series: \n$n1 $n2 ";
    for($i=2;$i<$range;$i++){
        $n3=$n1+$n2;
        echo $n3." ";
        $n1=$n2;
        $n2=$n3;
    }
}

fibonacci(0,1,15);

















?>