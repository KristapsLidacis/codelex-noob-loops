<?php
$n = (int)readline("Enter teh number: \n");


for($i = 0; $i < $n; $i++){
    for($j = $i; $j >= 0 ;$j--){
        echo pow(2, $j)."\t";
    }
    echo PHP_EOL;
}