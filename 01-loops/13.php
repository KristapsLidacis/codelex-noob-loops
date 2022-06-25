<?php
$n = (int)readline("Enter teh number: \n");
if($n %2== 1){
    $d =ceil($n/2);
}else{
    $d=$n/2;
}

for($i = 1; $i <= $d; $i++){
    for($j = 1; $j <= $d -$i;$j++){
        echo'-';
    }
    for($j = 1; $j <= $i*2 ;$j++){
        echo'*';
    }
    for($j = $d-$i; $j >= 1;$j--){
        echo'-';
    }
    echo PHP_EOL;
}
for($i=1; $i<=$d; $i++){
    for($j=1; $j <= $n; $j++){
        if($j==1 || $j == $n){
            echo '|';
        }
        else{
            echo '*';
        }
    }
    echo PHP_EOL;
}