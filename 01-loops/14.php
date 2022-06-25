<?php
$n = (int)readline("Enter teh number: \n");
if($n%2==1){
    $n++;
}
$d = $n/2;
for ($i = 0; $i < $d; $i++)
{
    for ($j = $i; $j < $d-1; $j++){
        echo"-";
    }
    for ($j = 0; $j < 2 * $i + 1; $j++){
        if($j == 0 || $j == 2 * $i)
            echo"*";
        else{
            echo '-';
        }
    }
    for ($j = $i; $j < $d-1; $j++){
        echo"-";
    }
    echo PHP_EOL;
}
for ($i = 0; $i < $d - 1; $i++)
{
    for ($j = 0; $j < $i + 1; $j++){
        echo"-";
    }
    for ($j = 1;$j < 2 * ($d - 1 - $i); $j++){
        if($j ==1 || $j == 2 * ($d - 1 - $i)-1)
            echo"*";
        else{
            echo '-';
        }
    }
    for ($j = 0; $j < $i + 1; $j++){
        echo"-";
    }
    echo PHP_EOL;
}
