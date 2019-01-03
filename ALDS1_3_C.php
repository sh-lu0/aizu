<?php
fscanf(STDIN, '%d', $length);
$list = array();

for($i=0; $i<$length; ++$i){
    fscanf(STDIN, '%s %s', $action, $str);
    switch ($action) {
    case 'insert':
        array_unshift($list,$str);
        break;
    case 'delete':
        $key=array_search($str, $list);
        if($key !== FALSE){
            unset($list[$key]);
        }
        break;
    case 'deleteFirst':
        array_shift($list);
        break;
    case 'deleteLast':
        array_pop($list);
        break;
    }
}

echo implode(" ",$list) . PHP_EOL;
