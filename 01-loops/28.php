<?php
$n = (int)readline("Enter teh number: \n");
$type = readline("Select the type (a/b/c/d): \n");

switch($type){
    case 'a':
        for($i = 1; $i <= $n; $i++){
            for($j = 1; $j <= $i ;$j++){
                echo '# ';
            }
            echo PHP_EOL;
        }
        break;
    case'b':
        for($i = $n; $i >= 1; $i--){
            for($j = 1; $j <= $i ;$j++){
                echo '# ';
            }
            echo PHP_EOL;
        }
        break;
    case'c':
        for($i = 1; $i <= $n; $i++){
            for($j = 1; $j <= $n ;$j++){
                if($j <= ($n-$i)){
                    echo '  ';
                }else{
                    echo'# ';
                }
            }
            echo PHP_EOL;
        }
        break;
    case'd':
        for($i = 1; $i <= $n ; $i++){
            for($j = $n; $j >= 0 ;$j--){
                if($j <= ($n-$i)){
                    echo '# ';
                }else{
                    echo'  ';
                }
            }
            echo PHP_EOL;
        }
        break;
}