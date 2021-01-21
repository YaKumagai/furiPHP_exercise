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

*/
function add($item1,$item2,$item3){
    return $item1 + $item2 + $item3;
}

function totalTax($name,$sum){
    $price = $sum * 1.1;
    $msg = <<<EOM
    
    {$name}様
    ご注文承りました。
    合計{$sum}円です。
    {$price}円(税込)になります。\n
EOM;
    echo $msg;
}