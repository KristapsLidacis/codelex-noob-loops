<?php
$n = (int)readline("Enter teh number: \n");

for($i = $n; $i >= 1; $i--){
    for($j = 1; $j <= $i ;$j++){
       if($j == $i){
           echo $j;
       }else{
           echo "$j * ";
       }
    }
echo PHP_EOL;
}