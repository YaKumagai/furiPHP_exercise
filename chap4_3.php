<?php
/*
var_dump("ハロー！");
問 : 呼び出すファイル( chap4_3.php ) が正しく実行できるよう 関数定義のファイル( chap4_pet.php ) を作成してください。
【以下の条件で作成】
chap4_3.phpのコードは修正せずに
以下の実行結果をターミナルで出力できるように作成して下さい。
var_dump($owners);
array(3) {[0]=>array(2) 
    {["name"]=>string(6) "斎藤"
    ["animal"]=>array(3) {[0]=>string(3) "猫"[1]=>string(3) "猫"[2]=>string(3) "猫"}
}}
array(3) {[0]=> 
    {["name"]=>"斎藤"
    ["animal"]=>{[0]=>"猫"[1]=>"猫"[2]=>"猫"}
}}
var_dump($animal_types);
echo $animal_types[2][1];

*/
require_once __DIR__ . "/chap4_pet.php";
$owners = [
    ["name" => "斎藤", "animal" => ["猫", "猫", "猫"]],
    ["name" => "鈴木", "animal" => ["柴犬"]],
    ["name" => "藤井", "animal" => ["猫", "チワワ", "うさぎ"]],
];
foreach ($owners as $owner) {
    displayMsg($owner);
}


/*
$dcnt = count($owners);
$dcnt = $dcnt-1;

foreach(range(0,$dcnt) as $cnt){
$name[$cnt] = $owners[$cnt]["name"];
$animal_types[$cnt] = $owners[$cnt][["animal"][0]];
$count[$cnt] = count($animal_types[$cnt]);
$animal_types[$cnt] = array_unique($animal_types[$cnt]);
$animal[$cnt] = implode('、',$animal_types[$cnt]);

$names = $name[$cnt];
$animals = $animal[$cnt];
$counts = $count[$cnt];
echo $names;

}
*/

// docker-compose exec app bash
// cd furiPHP_exercise
// php chap4_3.php