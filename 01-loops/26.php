<?php
$n = (int)readline("Enter teh number: \n");
for($i=0;$i <=$n; $i++){
    echo $i ==0? "* | ":"$i\t";
}
echo PHP_EOL;
echo str_repeat("------- ", $n);
echo PHP_EOL;
for($i=1;$i <=$n; $i++){
    for ($j = 0; $j <= $n;$j++){
            echo $j==0? "$i | " : $i*$j."\t";
    }
    echo PHP_EOL;
}