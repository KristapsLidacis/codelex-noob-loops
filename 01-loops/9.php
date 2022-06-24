<?php
$n = (int)readline("Enter teh number: \n");

for($i = 0; $i <= $n; $i++) {
    for ($j = 1; $j <= $n; $j++) {
        if($j<=($n-$i)){
            echo " ";

        }else {
            echo "*";
        }

    }
    for($j=1;$j<=$i+1;$j++){
        if($j > 1) {
            echo '';
        }
        if($j == 1 && $i >=0){
            echo' | ';
        }else{

            echo '*';
        }

    }
    echo PHP_EOL;
}