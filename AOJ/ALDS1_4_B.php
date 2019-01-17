<?php
$lengthA = (int) fgets(STDIN);
$stdinA = explode(" ",fgets(STDIN));
$lengthKey = (int) fgets(STDIN);
$stdinKey = explode(" ",fgets(STDIN));

$count = 0;
for($j=0; $j<$lengthKey; ++$j){
    $result = BinarySearch($lengthA, $stdinA, $stdinKey[$j]);
    if($result == 1){
        $count++;
    }
}
echo $count.PHP_EOL;

function BinarySearch($N, $A, $key){
    $left = 0;
    $right = $N;
    while ($left < $right){
        //探索の範囲内の中央の要素を調べる
        $mid = ($left + $right) / 2;
        //目的のキーと中央の要素のキーが一致すれば探索を終了
        if ((int)$A[$mid] == (int)$key){
            return 1;
        }
        //前半部分を探索範囲とする
        if ((int)$key < (int)$A[$mid]){
            $right = $mid;
        }
        //後半部分を探索範囲とする
        else{
            $left = $mid + 1;
        }
    }
    return 0;
}
