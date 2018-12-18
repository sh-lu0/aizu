<?php
$stdin = explode(" ",fgets(STDIN));
$stdinLength = (int) $stdin[0];
$quantum = (int) $stdin[1];
$time = 0;

for($i=0;$i<$stdinLength;++$i){
    $input = explode(" ",fgets(STDIN));
    $times[] = (int) $input[1];
    $taskNames[] = $input[0];
}

while(count($times)!==0){
    $result = (int) $times[0] - $quantum;
    if($result<=0){
        //プロセス完了
        $time += $times[0];

        echo $taskNames[0] . ' '. $time . PHP_EOL;

        array_splice($times, 0, 1);
        array_splice($taskNames, 0, 1);
    } else {
        //プロセス未完了
        $time += $quantum;

        $times[] = $result;
        $taskNames[] = $taskNames[0];
        array_splice($times, 0, 1);
        array_splice($taskNames, 0, 1);
    }
}

?>



echo $result;
