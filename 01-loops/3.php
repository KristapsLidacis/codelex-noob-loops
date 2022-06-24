<?php
$n = (int)readline("Enter teh number: \n");
for($i = 1; $i <= $n; $i++){
    for($j = 1; $j <= $n; $j++){
        if($i == 1 || $j ==1 || $n == $i|| $n == $j){
            echo '*';
        }else{
            echo ' ';
        }
    }
    echo PHP_EOL;
}
