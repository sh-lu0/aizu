<?php

/*シェルソート*/
//TODO:RunTimeError

fscanf(STDIN, '%d', $n);
$A = array();
for ($i = 0; $i < $n; $i++) {
    fscanf(STDIN, '%d', $m);
    $A[] = $m;
}
ShellSort($A, $n);

function InsertionSort(&$A, $n, $g)
{
    global $cnt;
    for ($i = $g; $i < $n; $i++) {
        $v = $A[$i];
        $j = $i - $g;
        while ($j >= 0 && $A[$j] > $v) {
            $A[$j + $g] = $A[$j];
            $j -= $g;
            $cnt++;
        }
        $A[$j + $g] = $v;
    }
}

function ShellSort($A, $n)
{
    global $cnt;
    $cnt = 0;
    // 間隔
    $G = explode(',', '1,4,13,40,121,364,1093,3280,9841,29524,88573,265720,797161');
    $m = count($G);
    while ($G[$m - 1] > $n) {
        $m--;
    }

    echo $m, PHP_EOL;
    for ($i = $m - 1, $arr = array(); $i >= 0; $i--) {
        $arr[] = $G[$i];
    }
    echo implode(' ', $arr), PHP_EOL;
    for ($i = $m - 1; $i >= 0; $i--) {
        InsertionSort($A, $n, $G[$i]);
    }
    echo $cnt, PHP_EOL, implode(PHP_EOL, $A);
}
