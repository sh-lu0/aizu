<?php
$que=[];
$head=0;
$tail=0;
list($length,$Q)=explode(' ',trim(fgets(STDIN)));

for($i=0;$i<$length;$i++) {
    $que[$tail++]=explode(' ',trim(fgets(STDIN)));
}

$result='';
$TIME=0;
while($head!=$tail){
  //task[0]:name, task[1]:time
  $task=$que[$head++];
  if($task[1]<=$Q){
    // プロセス完了
    $result.=$task[0].' '.($TIME+$task[1]).PHP_EOL;
    $TIME+=$task[1];
  }
  else{
    // プロセス未完了
    $task[1]-=$Q;
    $que[$tail++]=$task;
    $TIME+=$Q;
  }
}
echo $result;




echo $result;
