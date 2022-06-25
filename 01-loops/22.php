<?php
$n = (int)readline("Enter teh number: \n");
$dir = readline("Select direction: (r/l): \n");

if($dir=='r'){
    for($i =1; $i < $n; $i++){
        for($j = 1; $j <=(2*$i-2); $j++){
            echo ' ';
        }
        for($j = $i; $j <= $n; $j++){
            echo '*';
        }
        echo PHP_EOL;
    }
    for($i = 1; $i <= $n; $i++){
        for($j=1; $j <= (2*$n-2*$i); $j++){
            echo ' ';
        }
        for($j = 1; $j <= $i; $j++){
            echo '*';
        }
        echo PHP_EOL;
    }
}else{
    for($i =1; $i <= $n; $i++){
        for($j = $i; $j < $n; $j++){
            echo ' ';
        }
        for($j = $i; $j <= $n; $j++){
            echo '*';
        }
        echo PHP_EOL;
    }
    for($i = 2; $i <= $n; $i++){
        for($j=1; $j < $i; $j++){
            echo ' ';
        }
        for($j = 1; $j <= $i; $j++){
            echo '*';
        }
        echo PHP_EOL;
    }
}