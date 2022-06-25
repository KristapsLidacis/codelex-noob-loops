<?php
$n = (int)readline("Enter teh number: \n");
$type = readline("Select the type (a/b/c/d): \n");

switch($type){
    case 'a':
        for($i = 0; $i <= $n; $i++) {
            for ($j = $i; $j < $n; $j++) {
                echo "  ";
            }
            for($j=2*$i-1;$j>0;$j--){
                echo ' #';
            }
            echo PHP_EOL;
        }
        break;
    case'b':
        for($i = $n; $i > 0; $i--) {
            for($j=$n-$i; $j>0; $j--){
                echo '  ';
            }
            for($j=2*$i-1; $j>0; $j--){
                echo ' #';
            }
            echo PHP_EOL;
        }
        break;
    case'c':
        for($i = 0; $i < $n; $i++) {
            for ($j = $i; $j < $n; $j++) {
                echo "  ";
            }
            for($j=2*$i-1;$j>0;$j--){
                echo ' #';
            }
            echo PHP_EOL;
        }
        for($i = $n; $i > 0; $i--) {
            for($j=$n-$i; $j>0; $j--){
                echo '  ';
            }
            for($j=2*$i-1; $j>0; $j--){
                echo ' #';
            }
            echo PHP_EOL;
        }
        break;
    case'd':
        for($i = 0; $i < $n; $i++) {
            for ($j = $i; $j < $n; $j++) {
                echo "# ";
            }
            for($j=1;$j < 2*$i+1;$j++){
                echo '  ';
            }
            for ($j = $i; $j < $n; $j++) {
                echo "# ";
            }
            echo PHP_EOL;
        }
        for($i = 0; $i < $n-1; $i++) {
            for ($j = 0; $j < $i+2; $j++) {
                echo "# ";
            }
            for($j=1;$j < 2*($n-$i-1)-1;$j++){
                echo '  ';
            }
            for ($j = 0; $j < $i+2; $j++) {
                echo "# ";
            }
            echo PHP_EOL;
        }

        break;
}