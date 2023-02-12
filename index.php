<?php

// 動的型付 自動的に文字の型を指定してくれる hph ruby
// 静的型付 文字の方を指定する java, visual basicなど

// 変数 
// 変数名は先頭はアンダーバーか英文字

$test_1=123;
$test_2=456;
$test_3=$test_1.$test_2;

const max = 'test';


echo max;
var_dump($test_3);
echo($test_3);
echo ('<br>');
// 配列
$array_1 = [1,2,3];
$array_2 = [
  ['赤', '青', '黄', '緑'],
  ['明日', '明後日', '明々後日',]
];

echo ('<br>');

echo ('<pre>');
var_dump($array_1);
var_dump($array_2);

echo ('</pre>');

echo $array_2[1][1];

// 連想配列

$array_member = [
  'name' => 'だいふく',
  'age' => 2,
  'birth' => '7月7日' 
];

var_dump($array_member['name']);

$array_member_1 = [
  'だいふく' => [
    'age' => 2,
    'birth' => '7月7日'
  ],
  'ぺんちゃん' => [
    'age' => 0,
    'birth' => '12月'
  ]
  ];

var_dump($array_member_1);
echo ('<br>');
echo $array_member_1['だいふく']['birth'];
echo ('<br>');

// 四則演算子、配列の抽出

$num1 = [15 % 3,18 * 21,10 - 111,109 + 918];

foreach($num1 as $num){
  echo $num;
  echo ('<br>');
}
foreach($array_member_1 as $member){
  foreach($member as $key => $value){
    echo $key . '<br>' . $value . '<br>';
  }
}

// 条件分岐

$signal = ['赤', '黄', '青'];
$result_signal = $signal[rand(0,2)];

if ($result_signal === '赤' ){
  echo '信号は' . $result_signal . 'です！</br>止まりましょう';
}elseif($result_signal === '黄'){
  echo '信号は' . $result_signal . 'です。</br>注意しましょう';
} else{
  echo'信号は' . $result_signal . 'です。</br>気をつけて渡りましょう';
}

$emp='';

if(empty($emp)){
  echo '変数は空です';
}

// 三項演算子

$wether = '晴れ';
$today_wether = $wether == '晴れ' ? '今日は晴れ' : '今日は晴れてはいない';
echo $today_wether;
echo ('<br>');

// for while
// forは繰り返す値が決まっていたら
// whileは繰り返す値が決まっていなかったら

for($i = 0; $i <10 ; $i++){
  if ($i ==5){
    // break;
    // continue;
  }
  echo $i;
}

$j=0;

while($j < 10){
  echo $j;
  $j++;
}

echo '<br>';
// swich文
$vehicle = '新幹線';
switch($vehicle){
  case '新幹線':
    echo '1000円です';
    break;
  case 'ローカル電車':
    echo '5000円です';
    break;
  case 'バス':
    echo '2000円です';
    break;
  default:
}

echo ('<br>');
echo ('<br>');


//関数
// インプット、アウトプットなし

function test_1(){
  echo 'テスト1';
}

test_1();
echo ('<br>');

//インプットあり、アウトプットなし
function test_2($vehicle){
  echo 'テスト2'.$vehicle;
}
test_2($vehicle);
echo ('<br>');

//アウトプットあり、インプットなし
function test_3(){
  return 5;
}

var_dump(test_3());

echo ('<br>');

// インプット二つ、アウトプット二つ

function test_4($num1, $num2){
  $num3 = $num1 + $num2;
  return $num3;
}

$sum = test_4(2,4);
echo $sum;
echo ('<br>');


//文字列の長さ
//マルチバイト
//日本語の場合SJIS, UTF-8 一文字3~6バイト消費する


echo strlen($vehicle);
echo ('<br>');
echo mb_strlen($vehicle);
echo ('<br>');

//文字列の置換
$str = '文字を置換します';
//第１引数に変える前の文字、第2引数に変える後の文字、第３引数に変える対象に文字列
// replace=交換
echo str_replace('置換', '変換', $str);
echo ('<br>');

//指定文字で分割
// explode=爆発する
$str_2 = 'かぐや様は、告らせたい';
echo('<pre>');
var_dump(explode('、', $str_2));
echo('</pre>');
echo ('<br>');

//正規表現
// preg=妊娠
var_dump(preg_match('/かぐや様/',$str_2));



require 'common.php';

echo $common;

common();
//一つ上の階層までの絶対パス
echo __DIR__;
echo ('<br>');

//現在までの絶対パス
echo __FILE__;





?>