<?php
$n = (int)readline("Enter teh number: \n");
$space =$n-1;
for($i = 0; $i < $n-1; $i++){
    for($j = 0; $j < $space; $j++){
        echo ' ';
    }
    for($j = 0; $j <= $i; $j++){
        echo '* ';
    }

    echo PHP_EOL;
    $space--;
}
$space =0;
for($i = $n; $i > 0; $i--){
    for($j = 0; $j < $space; $j++){
        echo ' ';
    }
    for($j = 0; $j < $i; $j++){
        echo '* ';
    }

    echo PHP_EOL;
    $space++;
}