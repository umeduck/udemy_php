<?php
// ファイル名型

// // ファイル名を変数に
// $contactFile = '.contact.dat';

// // ファイルを丸ごと読み取り
// $fileContents = file_get_contents($contactFile);

// // 追加するテキストを変数に
// $addText = 'テストです'."\n";

// echo $fileContents;

// // ファイルに書き込み(上書き)
// // file_put_contents(($contactFile), 'テストです');

// // ファイルの書き込み(追加)
// // file_put_contents($contactFile,$addText , FILE_APPEND);

// //配列 file ,区切る explode , foreach
// $allData = file($contactFile);

// foreach($allData as $lineData){
//   $lines = explode(',', $lineData);
//   echo $lines[0].'<br>';
//   echo $lines[1].'<br>';
//   echo $lines[2].'<br>';
//   echo $lines[3].'<br>';
// };


//ストリーム型

$contactFile = '.contact.dat';

$contents = fopen($contactFile, 'a+');

$addText = '1行追記' . "\n";

fwrite($contents, $addText);

fclose($contents);
