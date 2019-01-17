/*挿入ソート*/

<?php
$Arraylength = trim(fgets(STDIN));
$stdins = explode(" ",trim(fgets(STDIN)));

selectionSort($stdins,$Arraylength);

function selectionSort($Array, $N){
    $count = 0;
    for ($i=0; $i<$N; ++$i){
        $mini = $i;
        for ($j=$i; $j<$N; ++$j){
            if ($Array[$j] < $Array[$mini]){
                $mini = $j;
            }
        }
        if($mini!=$i){
            $tmp = $Array[$i];
            $Array[$i] = $Array[$mini];
            $Array[$mini] = $tmp;
            $count++;
        }
    }
    echo implode(" ",$Array) . PHP_EOL;
    echo $count . PHP_EOL;
}

?>
