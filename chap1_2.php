<?php
/*
var_dump("ハロー！");
上底 の変数名 : $top        "上底は？" 10
下底 の変数名 : $bottom     "下底は？" 15
高さ の変数名 : $height     "高さは？" 20
(上底 + 下底) ✕ 高さ ÷ 2 で面積を求めて 以下の 実行結果 と同じように出力。
    "面積は250"
*/

var_dump("上底は？");
$top = trim(fgets(STDIN));
var_dump("下底は？");
$bottom = trim(fgets(STDIN));
var_dump("高さは？");
$height = trim(fgets(STDIN));
$area = ($top + $bottom) * $height / 2;
var_dump("面積は" . $area . "です。");

// cd furiPHP_exercise
// php chap1_2.php