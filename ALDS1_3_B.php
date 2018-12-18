<?php
$stdin = explode(" ",fgets(STDIN));
$length = $stdin[0];
$quantum = (int) $stdin[1];
$time = 0;

for($i=0;$i<$length;++$i){
    $input = explode(" ",fgets(STDIN));
    $times[] = (int) $input[1];
    $task[] = $input[0];
}

$result = "";

while(count($times)!=0){
    if(($times[0] - $quantum)<=0){
        $time += $times[0];

        $result = $result . $task[0] . " ". $time . PHP_EOL;

        array_splice($times, 0, 1);
        array_splice($task, 0, 1);
    } else{
        $times[] = ($times[0] - $quantum);
        $task[] = $task[0];
        $time += $quantum;

        array_splice($times, 0, 1);
        array_splice($task, 0, 1);
    }
}


echo $result;
