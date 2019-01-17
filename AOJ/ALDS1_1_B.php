<?php
$stdin = explode(" ", trim(fgets(STDIN)));

if($stdin[0]>$stdin[1]){
    $x = $stdin[0];
    $y = $stdin[1];
} else {
    $x = $stdin[1];
    $y = $stdin[0];
}
$result = 0;

while($x%$y != 0){
    $rest = $x%$y;
    $x = $y;
    $y = $rest;
}
$result = $y;
print($result."\n");
?>
