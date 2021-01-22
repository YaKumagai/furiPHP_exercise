<?php
/*
var_dump("ハロー！");
問 : 関数定義のファイル( chap4_area.php ) と 呼び出しファイル( chap4_1.php ) を使用し、台形の面積を出力してください。
【chap4_area.php を以下の条件で作成】

計算関数名 : calcArea
その中で 台形の面積を計算

メッセージ関数名 : displayMsg
変数名 : $msg で
台形のサイズ
上底 : **
下底 : **
高さ : **
面積 : ****
と出力。

【chap4_1.php を以下の条件で作成】

chap4_1.php に chap4_area.php を取り込む。
以下の通り変数を指定し calcArea関数 で面積を求め、戻り値を変数 $area に入れる。
メッセージ関数を呼び出し、メッセージを表示。
$top = 10;
$bottom = 20;
$height = 30;

関数の結果を$areaに入れる
メッセージ関数の呼び出し

$top = 40;
$bottom = 50;
$height = 60;
$top,$bottom,$height
関数の結果を$areaに入れる
メッセージ関数の呼び出し
*/
require_once __DIR__."/chap4_area.php";
$top = 10;
$bottom = 20;
$height = 30;
$msg = calcArea($top,$bottom,$height);
echo $msg;

$top = 40;
$bottom = 50;
$height = 60;
$msg = calcArea($top,$bottom,$height);
echo $msg;

// docker-compose exec app bash
// cd furiPHP_exercise
// php chap4_1.php