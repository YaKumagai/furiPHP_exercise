<?php
/*
var_dump("ハロー！");
問 : 関数定義のファイル( chap4_price.php ) と 呼び出しファイル( chap4_2.php ) を使用し、利用者の合計金額を税込みで出力してください。
【chap4_price.php を以下の条件で作成】

名前 の 変数名 : $name
1つ目の金額の 変数名 : $item1
2つ目の金額 の 変数名 : $item2
3つ目の金額 の 変数名 : $item3
計算関数名 : add ･･･ 合計金額 を算出。
税込み計算関数名 : totalTax 、引数 : $sum ･･･ 税込価格 を算出。
このとき 小数点以下は切り捨て。 小数点以下を切り捨てるには floor関数 を使用。
floor 公式PHP

【hint】
floor( 消費税の計算式 );
メッセージ関数名 : displayMsg、引数 : $name、$sum、$price
変数名 : $msg で
****様
ご注文承りました。
合計****円です。
****円(税込)になります。
と出力。
【chap4_2.php を以下の条件で作成】

chap4_2.php に chap4_price.php を取り込む。
変数名 : $sum に add関数 の戻り値を入れる。
変数名 : $price に totalTax関数 の戻り値を入れる。
メッセージ関数を呼び出し、メッセージを表示。
以下の 実行結果 と同じになるように出力してください。

プログラムの実行はターミナルから行ってください。

string(15) "お名前は？"            山田
string(25) "1つ目の金額を入力"      100
string(25) "2つ目の金額を入力"      200
string(25) "3つ目の金額を入力"      300
山田様
ご注文承りました。
合計600円です。
660円(税込)になります。
*/

require_once __DIR__ . "/chap4_price.php";

var_dump("お名前は？");
$name = trim(fgets(STDIN));
var_dump("1つ目の金額を入力");
$item1 = trim(fgets(STDIN));
var_dump("2つ目の金額を入力");
$item2 = trim(fgets(STDIN));
var_dump("3つ目の金額を入力");
$item3 = trim(fgets(STDIN));

$sum = add($item1, $item2, $item3);
$price = totalTax($sum);

$msg = displayMsg($name, $sum, $price);
echo $msg;

// docker-compose exec app bash
// cd furiPHP_exercise
// php chap4_2.php