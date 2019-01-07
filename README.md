# aizu
AizuOnlineJudgeの問題をPHPで解く
[AizuOnlineJudge](http://judge.u-aizu.ac.jp/onlinejudge/index.jsp?lang=ja)

## in_arrayは遅い
in_array — 配列に値があるかチェックする
<http://php.net/manual/ja/function.in-array.php>

連想配列にしてissetが早い
```
$array = array(
    'apple',
    'orange',
    'melon',
    'banana'
);
```
の配列から
```
if( in_array( 'orange', $array ) ) { ～ }
```
みたいにin_arrayで検索するなら
```
$array = array(
    'apple' => true,
    'orange' => true,
    'melon' => true,
    'banana' => true
);
```
みたいな連想配列にしてissetを使う．
```
if( isset( $array['orange'] ) ) { ～ }
```
※ isset は関数ではなく言語構造なので速いらしい


配列の追加もarray_mergeは遅い
hoge[] = hogehoge;で追加する
