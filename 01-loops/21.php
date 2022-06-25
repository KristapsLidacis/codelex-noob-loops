<?php
$n = (int)readline("Enter teh number: \n");
$d = $n -2;

for($i = 0; $i < $d; $i++) {
    if($i %2 == 0){
        for ($j = 1; $j <= $d; $j++)
        {
            echo'*';
        }
        echo '\\ /';
        for ($j = 1; $j <= $d; $j++)
        {
            echo'*';
        }
    }else{
        for ($j = 1; $j <= $d; $j++)
        {
            echo'-';
        }
        echo '\\ /';
        for ($j = 1; $j <= $d; $j++)
        {
            echo'-';
        }
    }
    echo PHP_EOL;
}
for ($j = 1; $j <= $d+1; $j++)
{
    echo' ';
}
echo '@'.PHP_EOL;
for($i = 0; $i < $d; $i++) {
    if($i %2 == 0){
        for ($j = 1; $j <= $d; $j++)
        {
            echo'*';
        }
        echo '/ \\';
        for ($j = 1; $j <= $d; $j++)
        {
            echo'*';
        }
    }else{
        for ($j = 1; $j <= $d; $j++)
        {
            echo'-';
        }
        echo '/ \\';
        for ($j = 1; $j <= $d; $j++)
        {
            echo'-';
        }
    }
    echo PHP_EOL;
}