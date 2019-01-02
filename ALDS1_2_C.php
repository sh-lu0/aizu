/*バブルソート*/
/*リストにおいて隣り合うふたつの要素の値を比較して条件に応じた交換を行う整列アルゴリズム*/

/*挿入ソート*/
/*整列してある配列に，追加要素を適切な場所に挿入する*/

<?php
fscanf(STDIN, '%d', $N);
$line = trim(fgets(STDIN));
$arr = explode(' ', $line);

$bubbleArr = BubbleSort($arr,$N);
echo(implode(' ',$bubbleArr).PHP_EOL."Stable".PHP_EOL);
$selectionArr = SelectionSort($arr,$N);
echo implode(" ",$selectionArr) . PHP_EOL;
if(isStable($bubbleArr, $selectionArr)==true){
    echo("Stable".PHP_EOL);
} else {
    echo("Not stable".PHP_EOL);
}

function BubbleSort($arr,$N)
{
    for ($i = 0; $i<$N; ++$i) {
        for ($j = $N-1; $j>$i; --$j) {
            if ($arr[$j][1] < $arr[$j-1][1]) {
                $tmp = $arr[$j];
                $arr[$j] = $arr[$j - 1];
                $arr[$j - 1] = $tmp;
            }
        }
    }

    return $arr;
}

function SelectionSort($arr, $N){
    for ($i=0; $i<$N; ++$i){
        $mini = $i;
        for ($j=$i; $j<$N; ++$j){
            if ($arr[$j][1] < $arr[$mini][1]){
                $mini = $j;
            }
        }
        if($mini!=$i){
            $tmp = $arr[$i];
            $arr[$i] = $arr[$mini];
            $arr[$mini] = $tmp;
        }
    }
    return $arr;
}

function isStable($bubbleArr, $selectionArr){
    $result = array_diff_assoc($bubbleArr, $selectionArr);
    if(count($result)==0){
        return true;
    } else {
        return false;
    }
}
