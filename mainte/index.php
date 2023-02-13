<?php

require 'db_connection.php';

// ユーザー入力なし query

// $sql = 'select * from contacts where id = 2'; //プレースホルダー
// $stmt = $pdo->query($sql); //ステートメント

// $result = $stmt->fetchall();


// ユーザー入力あり prepare bind execute
$sql = 'select * from contacts where id = :id'; // 名前つきプレースホルダー
$stmt = $pdo->prepare($sql);//プリペアードステートメント 
$stmt->bindValue('id', 3, PDO::PARAM_INT); //紐付け
$stmt->execute(); //実行

$result = $stmt->fetchall();

echo '<pre>';
var_dump($result);
echo '</pre>';

//トランザクション まとまった処理 beginTransaction, commit, rollback
//例：銀行 残高確認->Aさんから引き落とし->Bさんに振り込み
// 途中で遮断すると問題が起こるためひとまとまりで処理を行う

$pdo->beginTransaction();

// sql処理
try{
  $stmt = $pdo->prepare($sql);//プリペアードステートメント 
  $stmt->bindValue('id', 3, PDO::PARAM_INT); //紐付け
  $stmt->execute(); //実行
  $pdo->commit();
}catch(PDOException $e){
  $pdo->rollback(); //更新のキャンセル
}