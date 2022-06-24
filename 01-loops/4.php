<?php
$n = (int)readline("Enter teh number: \n");
$c = readline("Enter teh number: \n");
for($i = 1; $i <= $n; $i++){
    for($j = 1; $j <= $i; $j++){
        echo $c.' ';
    }
    echo PHP_EOL;
}


