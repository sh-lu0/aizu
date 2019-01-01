<?php

fscanf(STDIN, '%d', $length);
$min = 0;
$result =0;
for ($i = 0; $i < $length; ++$i) {
    fscanf(STDIN, '%d', $R);
    if ($i === 0) {
        $min = $R;
        continue;
    }
    if ($i > 2) {
        $result = max($result, $R-$min);
    }
    else {
        $result = $R - $min;
    }
    $min = min($min, $R);
}
echo $result, PHP_EOL;
