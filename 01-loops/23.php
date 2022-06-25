<?php
$n = (int)readline("Enter teh number: \n");

for($i = 0; $i <= $n+1; $i++){
    if($i == 0){
        for($j = 1; $j <= $n+1;$j++){
            echo'.';
        }
        for($j = 1; $j <= $n*2+1;$j++){
            echo'_';
        }
        for($j = 1; $j <= $n+1;$j++){
            echo'.';
        }
    }elseif($i == $n+1){
        echo'//';
        for($j = 1; $j <= ($n*4-1)-($n*2+2); $j++){
            echo '_';
        }
        echo 'STOP!';
        for($j = 1; $j <= ($n*4-1)-($n*2+2); $j++){
            echo '_';
        }
        echo '\\\\';
    }else{
        for($j = 1; $j <= $n-$i+1;$j++){
            echo'.';
        }
        echo '//';

        for($j = 1; $j <= ($n+$i)*2-3; $j++){
            echo '_';
        }

        echo'\\\\';
        for($j = 1; $j <= $n-$i+1;$j++){
            echo'.';
        }
    }
    echo PHP_EOL;
}
for($i = $n; $i >= 0; $i--){
    if($i==$n){
        echo'\\\\';
        for($j = 1; $j <= ($n*4-1); $j++){
            echo '_';
        }
        echo '//';
    }
    else{
        for($j = 1; $j <= $n-$i;$j++){
            echo'.';
        }
        echo '\\\\';

        for($j = 1; $j <= ($n+$i)*2-1; $j++){
            echo '_';
        }
        //
        echo'//';
        for($j = 1; $j <= $n-$i;$j++){
            echo'.';
        }
    }
    echo PHP_EOL;
}