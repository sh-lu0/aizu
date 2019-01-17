<?php
$stdin = trim(fgets(STDIN));
$stack = array();
// 配列のキーと値を反転
$operator = array_flip(explode(',', '+,-,*,/'));

foreach (explode(' ', $stdin) as $str) {
    if (!isset($operator[$str])) {
        $stack[] = (int)$str;
        continue;
    }
    // 配列の末尾から要素を取り除く
    $b = array_pop($stack);
    $a = array_pop($stack);

    switch ($str) {
        case '+':
            $result = $a + $b;
            break;
        case '-':
            $result = $a - $b;
            break;
        case '*':
            $result = $a * $b;
            break;
        case '/':
            $result = $a / $b;
            break;
    }
    $stack[] = $result;
}

 // 先頭を取り除く
echo array_shift($stack), PHP_EOL;
