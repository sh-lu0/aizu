<?php
fscanf(STDIN, '%d', $length);
$dictionary = array();

for($i=0; $i<$length; ++$i){
    fscanf(STDIN, '%s %s', $action, $str);
    switch ($action) {
    case 'insert':
        $dictionary[$str] = 1;
        break;
    case 'find':
        if(isset($dictionary[$str])){
            echo 'yes'.PHP_EOL;
        } else {
            echo 'no'.PHP_EOL;
        }
        break;
    }
}

/* in_arrayは遅すぎる
連想配列にしてissetが早い
配列の追加もarray_merge使ったら遅かった */
