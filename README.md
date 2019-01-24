## AizuOnlineJudge

[AizuOnlineJudge](http://judge.u-aizu.ac.jp/onlinejudge/index.jsp?lang=ja)

## AtCoder

[AtCoder](https://atcoder.jp/?lang=ja)

- 実行時間の制限は各ケースにつき 2 秒以内

# PHP

## in_array は遅い

in_array — 配列に値があるかチェックする
<http://php.net/manual/ja/function.in-array.php>

連想配列にして isset が早い

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

みたいに in_array で検索するなら

```
$array = array(
    'apple' => true,
    'orange' => true,
    'melon' => true,
    'banana' => true
);
```

みたいな連想配列にして isset を使う．

```
if( isset( $array['orange'] ) ) { ～ }
```

※ isset は関数ではなく言語構造なので速いらしい

配列の追加も array_merge は遅い
hoge[] = hogehoge;で追加する

## array_search を if 文で使う場合の注意

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

から apple が含まれるかどうか調べたいとき

```
if (array_search("apple", $array)){
    echo "含まれています";
    } else {
    echo "含まれていません";
    }
```

とすると，要素 0 番目の apple を見つけても，0 を返してしまうので「含まれていません」が返ってきてしまう．  
※if 文では，int 型の 0 も boolean 型の FALSE も，同じ FALSE であるため

そのため以下のように書く．

```
if (array_search("apple", $array) !== FALSE){
    echo “含まれています”;
    } else {
    echo “含まれていません”;
    }
```

# C

`int r = 1<<29`
INF 値として 1<<29 を使っている
2 倍してオーバーフローしない中で簡潔に書ける数として競技プログラミングではよく使われるらしい
