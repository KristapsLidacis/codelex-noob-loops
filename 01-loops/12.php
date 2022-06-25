<?php
$n = (int)readline("Enter teh number: \n");
$d = (int)ceil($n/2);
for($i = 1; $i <= $n; $i++){
    for($j = 0; $j <= (($n*4)+$n); $j++){
        if($j >= $n*2 && $j < ($n+($n*2)) ){
           if($i === $d){
               echo '|';
           }
           else{
                echo ' ';
            }
        }elseif($i > 1 && $i < $n){
            if($j > 0 && $j < ($n*2)-1 || $j > ($n*2)+$n && $j < ($n*4) + $n){
                echo'/';
            }
            else{
                echo '*';
            }
        }
        else{
            echo '*';
        }
    }
    echo PHP_EOL;
}

