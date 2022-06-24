<?php
$n = (int)readline("Enter teh number: \n");
$charNum = 65;
for($i = 0; $i < $n; $i++){
    for($j = 0; $j <= $i; $j++){
        echo chr($charNum)." ";
    }
    $charNum++;
    echo PHP_EOL;
}