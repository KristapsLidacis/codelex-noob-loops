<?php
$n = (int)readline("Enter teh number: \n");
if($n%2==1){
    $n++;
}
$name = readline("What should we print on it? \n");
$len = strlen($name);
$d = $n/2;
for($i=$d/2; $i<=$d; $i+=2)
{
    for($j=1; $j<$d-$i; $j+=2)
    {
        echo " ";
    }
    for($j=1; $j<=$i; $j++)
    {
        echo "*";
    }
    for($j=1; $j<=$d-$i; $j++)
    {
        echo " ";
    }
    for($j=1; $j<=$i; $j++)
    {
        echo "*";
    }
    echo PHP_EOL;
}

for($i=$n/2; $i>=1; $i--)
{
    for($j=$i; $j<$d; $j++)
    {
        echo " ";
    }
    if($i==$d){
        for($j=1; $j<=($d*2-$len)/2;$j++){
            echo '*';
        }
        echo $name;
        for($j=1; $j <($d*2-$len)/2; $j++){
            echo '*';
        }
    }else{
        for($j=1; $j<=($i*2)-1; $j++)
        {
            echo "*";
        }
    }
    echo PHP_EOL;
}