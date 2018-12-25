<?php
$length = (int)trim(fgets(STDIN));
$dictionary=array();


for($i=0; $i<$length; ++$i){
    list($action,$str) = explode(' ',trim(fgets(STDIN)));
    if($action=="insert"){
        $dictionary[] = $str;
    }
    if($action=="find"){
        if(in_array($str, $dictionary)){
            echo 'yes'.PHP_EOL;
        } else {
            echo 'no'.PHP_EOL;
        }
    }
}
