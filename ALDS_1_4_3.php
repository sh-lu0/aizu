<?php
fscanf(STDIN, '%d', $length);
$dictionary = array();

for($i=0; $i<$length; ++$i){
    fscanf(STDIN, '%s %s', $action, $str);
    switch ($action) {
    case 'insert':
        $dictionary=array_merge($dictionary,array($str=>true));
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
