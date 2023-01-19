<?php

//PHP:コード記述/修正の流れ
//1. insert.phpの処理をマルっとコピー。
//2. $id = $_POST["id"]を追加
//3. SQL修正
//   "UPDATE テーブル名 SET 変更したいカラムを並べる WHERE 条件"
//   bindValueにも「id」の項目を追加
//4. header関数"Location"を「select.php」に変更
//1. POSTデータ取得
$name   = $_POST['nameA1'];
$mail  = $_POST['mailB1'];
$type    = $_POST['typeC1'];
$record = $_POST['recordD1'];
$visit_date = $_POST['visit_dateE1'];
$id = $_POST['id'];

//2. DB接続します
//*** function化する！  *****************
require_once('funcs.php');
$pdo = db_conn();

//３．データ登録SQL作成
$stmt = $pdo->prepare('UPDATE gs_record_table SET date = sysdate() , name = :name, mail = :mail, type = :type, record = :record WHERE id = :id;');

// 数値の場合 PDO::PARAM_INT
// 文字の場合 PDO::PARAM_STR
$stmt->bindValue(':name', $name, PDO::PARAM_STR);
$stmt->bindValue(':mail', $mail, PDO::PARAM_STR);
$stmt->bindValue(':type', $type, PDO::PARAM_STR);
$stmt->bindValue(':record', $record, PDO::PARAM_INT);
$stmt->bindValue(':visit_date', $visit_date, PDO::PARAM_STR);
$stmt->bindValue(':id', $id, PDO::PARAM_INT); //PARAM_INTなので注意

$status = $stmt->execute(); //実行

//４．データ登録処理後
if ($status === false) {
    //*** function化する！******\
    $error = $stmt->errorInfo();
    exit('SQLError:' . print_r($error, true));
} else {
    //*** function化する！*****************
    header('Location: read.php');
    exit();
}