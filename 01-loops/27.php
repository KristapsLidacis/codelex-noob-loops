<?php
$n = (int)readline("Enter teh number: \n");
for($i=0;$i <=$n; $i++){
    if($i % 2 ==0){
        echo str_repeat(' #', $n);
    }else{
        echo str_repeat('# ',$n);
    }
    echo PHP_EOL;
}