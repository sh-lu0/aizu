/*挿入ソート*/

<?php
while ( !feof(STDIN) ) {
  $line[] = trim(fgets(STDIN));
}

$lengthSequence = $line[0];
$numbers = explode(" ", $line[1]);

print($line[1]."\n");

for ($i = 1; $i < $lengthSequence; $i++) {
    $v = $numbers[$i];
    $j = $i - 1;
    while ($j >= 0 && $numbers[$j] > $v) {
        $numbers[$j + 1] = $numbers[$j];
        $j--;
    }
    $numbers[$j + 1] = $v;
    print(trim(implode(" ",$numbers))."\n");
}
