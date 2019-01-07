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

## array_searchをif文で使う場合の注意
array_search — 指定した値を配列で検索し、見つかった場合に対応する最初のキーを返す
<http://php.net/manual/ja/function.array-search.php>

```
$array = array(
    [0] => apple,
    [1] => orange,
    [2] => melon,
    [3] => banana
);
```
からappleが含まれるかどうか調べたいとき
```
if (array_search("apple", $array)){
    echo "含まれています";
    } else {
    echo "含まれていません";
    }
```
とすると，要素0番目のappleを見つけても，0を返してしまうので「含まれていません」が返ってきてしまう．  
※if文では，int型の0もboolean型のFALSEも，同じFALSEであるため

そのため以下のように書く．
```
if (array_search("apple", $array) !== FALSE){
    echo “含まれています”;
    } else {
    echo “含まれていません”;
    }
```
