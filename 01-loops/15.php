<?php
$n = (int)readline("Enter teh number: \n");
$dir = readline("Select direction: (right/left): \n");
$empty = readline("Is it empty? (Y/n): \n");

if($dir === 'right' &&  $empty === 'Y'){
    for ($i = 1; $i <= $n; $i++)
    {
        for ($j = 1; $j <= $n - $i; $j++) {
            echo " ";
        }
        if($i == 1 || $i == $n){
            for ($j = 1; $j <= $n; $j++) {
                echo "*";
            }
        }else{
            for ($j = 1; $j <= $n; $j++) {
                if($j == 1 || $j == $n){
                    echo "*";
                }else{
                    echo" ";
                }
            }
        }

        echo "\n";
    }
}else if($dir === 'right' &&  $empty === 'n'){
    for ($i = 1; $i <= $n; $i++)
    {
        for ($j = 1; $j <= $n - $i; $j++) {
            echo " ";
        }
        for ($j = 1; $j <= $n; $j++) {
            echo "*";
        }
        echo "\n";
    }
}else if($dir === 'left' &&  $empty === 'Y'){
    for ($i = 1; $i <= $n; $i++)
    {
        for ($j = 1; $j < $i; $j++) {
            echo " ";
        }
        if($i == 1 || $i == $n){
            for ($j = 1; $j <= $n; $j++) {
                echo "*";
            }
        }else{
            for ($j = 1; $j <= $n; $j++) {
                if($j == 1 || $j == $n){
                    echo "*";
                }else{
                    echo" ";
                }
            }
        }
        echo "\n";
    }
}else{
    for ($i = 1; $i <= $n; $i++)
    {
        for ($j = 1; $j < $i; $j++) {
            echo " ";
        }
        for ($j = 1; $j <= $n; $j++) {
            echo "*";
        }
        echo "\n";
    }
}
