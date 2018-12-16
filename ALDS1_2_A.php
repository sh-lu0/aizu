<?php
$Arraylength = trim(fgets(STDIN));
$stdins = explode(" ",trim(fgets(STDIN)));

bubbleSort($stdins,$Arraylength);

function bubbleSort($Array, $N){
    $count = 0;
    for ($i=0; $i<$N; ++$i){
        for ($j=$N-1; $j>$i; --$j){
            if ($Array[$j] < $Array[$j-1]){
                 $tmp = $Array[$j];
                 $Array[$j] = $Array[$j-1];
                 $Array[$j-1] = $tmp;
                 $count++;
            }
        }
    }
    echo implode(" ",$Array) . PHP_EOL;
    echo $count . PHP_EOL;
}
