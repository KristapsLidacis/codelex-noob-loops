<?php
$n = (int)readline("Enter teh number: \n");
$end = $n * 2;
if($n %2 == 1){
    $d = floor($n /2);
}else{
    $d = $n/2;
}

for($i = 1; $i <= $n; $i++){
    if($i == 1){
        echo '/';
        for($j=1; $j <=$d; $j++){
            echo '^';
        }
        echo'\\';
        if($n > 3){
            for($j=1; $j <= $d; $j++){
                echo '_';
            }
        }
        echo '/';
        for($j=1; $j <=$d; $j++){
            echo '^';
        }
        echo'\\';
    }
    elseif($i == $n-1){
        echo "|";
        for($j=1; $j <=$d+1; $j++){
            echo ' ';
        }
        if($n > 3){
            for($j=1; $j <= $d; $j++){
                echo '_';
            }
        }
        for($j=1; $j <=$d+1; $j++){
            echo ' ';
        }
        echo'|';
    }
    elseif($i == $n){
        echo '\\';
        for($j=1; $j <=$d; $j++){
            echo '_';
        }
        echo'/';
        if($n > 3){
            for($j=1; $j <= $d; $j++){
                echo ' ';
            }
        }
        echo '\\';
        for($j=1; $j <=$d; $j++){
            echo '_';
        }echo '/';
    }
    else{
        for($j=1; $j <= $end; $j++){
           if($j == 1 || $j == $end){
               echo '|';
           }else{
               echo ' ';
           }
        }
    }
    echo PHP_EOL;
}
