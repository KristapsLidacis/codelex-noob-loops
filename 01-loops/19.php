<?php
$n = (int)readline("Enter teh number: \n");

for($i = $n; $i >= 1; $i--){
    $t = $n;
    for($j = 1; $j <= $i ;$j++){
        echo "$t ";
        $t--;
    }
    for($j = 1; $j <= $n ;$j++){
        if($j+$i <= $n){
            echo "    ";
        }else{
            echo "$j ";
        }
    }
    echo PHP_EOL;
}