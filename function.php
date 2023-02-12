<?php

//文字列の長さ
$vehicle = '新幹線';

echo strlen($vehicle);
echo ('<br>');
echo mb_strlen($vehicle);
echo ('<br>');

//文字列の置換
$str = '文字を置換します';
//第１引数に変える前の文字、第2引数に変える後の文字、第３引数に変える対象に文字列
echo str_replace('置換', '変換', $str);
echo ('<br>');

//指定文字で分割
$str_2 = 'かぐや様は、告らせたい';
echo('<pre>');
var_dump(explode('、', $str_2));
echo('</pre>');
echo ('<br>');

//正規表現

echo preg_match('/告らせ/', $str_2);

//指定文字列から文字列を取得する
//マルチバイトに注意する
echo mb_substr('あいうえお',1);

// 配列に配列を追加する
$array = ['りんご','ごりら','ラッパ'];
array_push($array,'パンツ','つみき');
var_dump($array);



?>