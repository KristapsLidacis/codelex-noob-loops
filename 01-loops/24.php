<?php
$n = (int)readline("Enter teh number: \n");
$d = $n/2;
$end = $d*2+$n;
for($i = 1; $i < $n;$i++){
    for($j = 0; $j < $end-1;$j++){
        if($i == 1){
            if($j < $d-1 || $j > $end -$d-1) {
                echo '.';
            }else{
                echo '#';
            }
        }else{
            if($j >= $d-1 && $j <= $d || $j > $end-$d-2 && $j < $end-$d-1){
                echo '#';
            }else{
                echo '.';
            }
        }
    }
    echo PHP_EOL;
}
for($i = 0; $i < $n;$i++){

    for($k = 0; $k < $end-1;$k++){
        if($i == 0 && $k <=$d || $i == 0 && $k >= $end-$d-2){
            echo '#';
        }
        elseif($k == $i || $k == $end -$i-2){
            echo'#';
        }else{
            echo '.';
        }
    }
    echo PHP_EOL;
}
