/* Time Limit Exceeded!!! :_( */

<?php
$stdins = array();
while ( !feof(STDIN) ) {
    $stdin = trim(fgets(STDIN));
    if(empty($stdin)){
        break;
    }
    $stdins[] = $stdin;
}


$lengthSequence = $stdins[0];
$primeCount = 0;

for ($i=1; $i<=$lengthSequence; $i++) {
    if(CheckPrimeNumber($stdins[$i])==true){
        $primeCount++;
    }
}
print($primeCount);


function CheckPrimeNumber($number){
    if($number<2) {
        return false;
    }
    if($number==2) {
        return true;
    }

    for( $j=2; $j<$number; $j++ ) {
        if( $number%$j == 0 ) {
            return false;
        }
    }
    return true;
}

?>
