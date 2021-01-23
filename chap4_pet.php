<?php
/*
hint】
$owner の中は 多次元配列になっています。配列の中の要素を条件に合うように表示させる必要があります。
メッセージ関数名 : displayMsg
ペットの種類の変数
変数名 : $animal_types を用意。
キー「animal」には 同じ種類のペットが複数含まれている配列があるため、array_unique関数 を使用し、配列の中の重複している要素を削除、ひとつだけ配列に返す。
変数名 : $animal を用意。
上記で重複チェックした $animal_types に対し implode関数 を使用して、キー「animal」の配列要素を連結し、$animal に入れる。
ペットの数の変数 : $count を用意。
count関数 を使用し、ペットの数をカウントした結果を入れる。
変数名 : $msg で上記の変数を利用し、 実行結果と同じメッセージを出力。
*/
function displayMsg($owner) {

$name = $owner["name"];
$animal_types = $owner["animal"];
$animal = implode('、', array_unique($animal_types));
$count = count($animal_types);

    $msg = <<<EOM
{$name}さんは
{$animal}を
{$count}匹飼っています。\n
EOM;
    echo $msg;
}
