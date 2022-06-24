<?php
$n = (int)readline("Enter teh number: \n");

for($i = 1; $i <= $n; $i++){
    for($j = 1; $j <= $n; $j++){
        if($i != 1 && $i != $n){
            if($j!=1 && $j !=$n){
                echo '-';
            }
            else{

                echo'|';
            }

        }else{
            if($j == 1 || $j == $n){
                echo '+';
            }else{
                echo '-';
            }

        }

    }
    echo PHP_EOL;
}