<?php
$n = (int)readline("Enter teh number: \n");
$k =0;
for($i = 0; $i < $n; $i++){
    for($j = $i +1; $j <= $n; $j++){
        echo " ";
    }
    for($j = 0; $j <= $i; $j++){
        if($j === 0 || $i===0){
            $k =1;
        }else{
            $k = (int)($k * ($i - $j + 1) / $j);
        }
        echo$k.' ';
    }
    echo PHP_EOL;
}
