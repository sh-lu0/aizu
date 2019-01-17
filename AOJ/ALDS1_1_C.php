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
    if(CheckPrimeNumber($stdins[$i])==1){
        $primeCount++;
    }
}
echo $primeCount."\n";

function CheckPrimeNumber($number){
    // nが1以下ならfalse
    if($number<=1){
        return 1;
    }
    // nが2または3ならtrue
    if(2==$number || 3==$number){
        return 1;
    }
    // nが2の倍数ならfalse
    if(0==$number%2){
        return 0;
    }
    // nの平方根を整数で取得(5なら2, 10なら3)
    $square_root = (int)sqrt($number);
    // nがnの平方根以下の、3以上の奇数(3,5,7,9,11,...)で1回でも割れたらfalse
    for($k=3; $k<=$square_root; $k+=2){
        if(0==$number%$k){
            return 0;
        }
    }
    // 上記すべて回避したらtrue
    return 1;
}
