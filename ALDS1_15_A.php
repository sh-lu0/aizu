<?php
$money=(int)trim(fgets(STDIN));
$coin = [25,10,5,1];
echo GetRequiredNumber($money,$coin).PHP_EOL;

function GetRequiredNumber($money,$coin){
    $count = 0;
    for($i=0; $i<4; ++$i){
        $quotient = floor($money/$coin[$i]);
        $count += $quotient;
        if($money%$coin[$i]==0){
            return $count;
        }
        $money -= $quotient*$coin[$i];
    }
}
?>
