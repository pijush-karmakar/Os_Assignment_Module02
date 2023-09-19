<?php

// Task 1: Looping with Increment using a Function

// ---------Using For Loop

function evenNumbers($start,$end){
    for($i=$start;$i<=$end;$i++){
        if($i%2==0){
            echo "$i ";
        }
       
    }
}
evenNumbers(1,20);

//---------Using While loop

function evenNumbers($start,$end){
    $i=$start;
    while($i<=$end){
        if($i%2==0){
            echo $i." ";
        }
        $i++;

    }
}
evenNumbers(1,20);

//---------Using Do While loop

function evenNumbers($start,$end){
       $i=$start;
       do{
        if($i%2==0){
            echo $i." ";
        }
        $i++;
       }while($i<=$end);
}
evenNumbers(1,20);









?>