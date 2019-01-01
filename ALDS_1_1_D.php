<?php

fscanf(STDIN, '%d', $N);
for ($i = 0; $i < $N; $i++) {
    fscanf(STDIN, '%d', $R);
    if ($i === 0) {
        $minv = $R;
        continue;
    } elseif ($i === 1) {
        $maxv = $R;
        $profit = $R - $minv;
        continue;
    }
    if($maxv < $R-$minv){
        $maxv = $R;
    }
    if($minv > $R){
        $minv = $R;
    }
}

echo $profit, PHP_EOL;
