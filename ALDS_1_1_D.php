<?php

fscanf(STDIN, '%d', $length);
for ($i = 0; $i < $length; $i++) {
    fscanf(STDIN, '%d', $R);
    if ($i === 0) {
        $minv = $R;
        continue;
    } elseif ($i === 1) {
        $maxv = $R;
        $profit = $R - $minv;
        continue;
    }
    if($profit < $R-$minv){
        $maxv = $R;
    }
    if($minv>$R){
        $minv = $R;
    }
    $result = $maxv-$minv;
    if($result>$profit){
        $profit=$result;
    }
}

echo $profit, PHP_EOL;
