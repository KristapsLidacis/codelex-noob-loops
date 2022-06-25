<?php
$n = (int)readline("Enter teh number: \n");

for($i = 1; $i <= $n; $i++){
    for($j = 0; $j <= $i; $j++){
        echo $i*2 ."\t";
    }
    echo PHP_EOL;
}