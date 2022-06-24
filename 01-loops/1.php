<?php
$n = (int)readline("Enter teh number: \n");
for($i = 0; $i < $n; $i++){
    for($j = 0; $j < $n; $j++){
        echo '*';
    }
    echo PHP_EOL;
}