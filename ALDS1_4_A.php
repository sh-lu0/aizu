<?php
$lengthA = (int) fgets(STDIN);
$stdinA = explode(" ",fgets(STDIN));
$lengthKey = (int) fgets(STDIN);
$stdinKey = explode(" ",fgets(STDIN));

$count = 0;

for($j=0; $j<$lengthKey; ++$j){
    $result = linearSearch($stdinA, $stdinKey[$j], $lengthA);
    if($result == 1){
        $count++;
    }
}

echo $count . PHP_EOL;

function linearSearch($stdin, $key, $N){
    $i=0;
    while((int)$stdin[$i] != (int)$key){
        $i++;
        // NotFound
        if($i===$N){
            return 0;
        }
    }
    return 1;
}
