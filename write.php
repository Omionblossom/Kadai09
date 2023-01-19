<?php

//1. POSTデータ取得

$nameA1 = $_POST['nameA1'];
$nameA2 = $_POST['nameA2'];
$nameA3 = $_POST['nameA3'];
$nameA4 = $_POST['nameA4'];
$nameA5 = $_POST['nameA5'];


$mailB1 = $_POST['mailB1'];
$mailB2 = $_POST['mailB2'];
$mailB3 = $_POST['mailB3'];
$mailB4 = $_POST['mailB4'];
$mailB5 = $_POST['mailB5'];

$typeC1 = $_POST['typeC1'];
$typeC2 = $_POST['typeC2'];
$typeC3 = $_POST['typeC3'];
$typeC4 = $_POST['typeC4'];
$typeC5 = $_POST['typeC5'];

$recordD1 = $_POST['recordD1'];
$recordD2 = $_POST['recordD2'];
$recordD3 = $_POST['recordD3'];
$recordD4 = $_POST['recordD4'];
$recordD5 = $_POST['recordD5'];

$visit_dateE1 = $_POST['visit_dateE1'];
$visit_dateE2 = $_POST['visit_dateE2'];
$visit_dateE3 = $_POST['visit_dateE3'];
$visit_dateE4 = $_POST['visit_dateE4'];
$visit_dateE5 = $_POST['visit_dateE5'];

ini_set('date.timezone', 'Asia/Tokyo');
$time = date('Y-m-d');

//2. DB接続します
try {
  //ID:'root', Password: xamppは 空白 ''
  $pdo = new PDO('mysql:dbname=gs_db5;charset=utf8;host=localhost', 'root', '');
} catch (PDOException $e) {
  exit('DBConnectError:'.$e->getMessage());
}

//３．データ登録SQL作成

// 1. SQL文を用意　1行目
$stmt = $pdo->prepare("INSERT INTO
                      gs_record1_table(id, name, mail, type, record, visit_date)
                      VALUES(NULL, :nameA1, :mailB1, :typeC1, :recordD1, :visit_dateE1)");

//  2. バインド変数を用意
// Integer 数値の場合 PDO::PARAM_INT
// String文字列の場合 PDO::PARAM_STR
// bindはセキュリティ処理
$stmt->bindValue(':nameA1', $nameA1, PDO::PARAM_STR);
$stmt->bindValue(':mailB1', $mailB1, PDO::PARAM_STR);
$stmt->bindValue(':typeC1', $typeC1, PDO::PARAM_STR);
$stmt->bindValue(':recordD1', $recordD1, PDO::PARAM_INT);
$stmt->bindValue(':visit_dateE1', $visit_dateE1, PDO::PARAM_STR);
//  3. 実行
$status = $stmt->execute();

//４．データ登録処理後
if ($status === false) {
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  $error = $stmt->errorInfo();
  exit('ErrorMessage:'.$error[2]);
} else {
  //５．index.phpへリダイレクト
  header('Location: read.php');
}

// 1. SQL文を用意　2行目
$stmt = $pdo->prepare("INSERT INTO
                      gs_record1_table(id, name, mail, type, record, visit_date)
                      VALUES(NULL,  :nameA2, :mailB2, :typeC2, :recordD2, :visit_dateE2)");

//  2. バインド変数を用意
// Integer 数値の場合 PDO::PARAM_INT
// String文字列の場合 PDO::PARAM_STR
// bindはセキュリティ処理
$stmt->bindValue(':nameA2', $nameA1, PDO::PARAM_STR);
$stmt->bindValue(':mailB2', $mailB1, PDO::PARAM_STR);
$stmt->bindValue(':typeC2', $typeC1, PDO::PARAM_STR);
$stmt->bindValue(':recordD2', $recordD1, PDO::PARAM_INT);
$stmt->bindValue(':visit_dateE2', $visit_dateE1, PDO::PARAM_STR);
//  3. 実行
$status = $stmt->execute();

//４．データ登録処理後
if ($status === false) {
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  $error = $stmt->errorInfo();
  exit('ErrorMessage:'.$error[2]);
} else {
  //５．index.phpへリダイレクト
  header('Location: read.php');
}

// 1. SQL文を用意　3行目
$stmt = $pdo->prepare("INSERT INTO
                      gs_record1_table(id, name, mail, type, record, visit_date)
                      VALUES(NULL, :nameA3, :mailB3, :typeC3, :recordD3, :visit_dateE3)");

//  2. バインド変数を用意
// Integer 数値の場合 PDO::PARAM_INT
// String文字列の場合 PDO::PARAM_STR
// bindはセキュリティ処理
$stmt->bindValue(':nameA3', $nameA1, PDO::PARAM_STR);
$stmt->bindValue(':mailB3', $mailB1, PDO::PARAM_STR);
$stmt->bindValue(':typeC3', $typeC1, PDO::PARAM_STR);
$stmt->bindValue(':recordD3', $recordD1, PDO::PARAM_INT);
$stmt->bindValue(':visit_dateE3', $visit_dateE1, PDO::PARAM_STR);
//  3. 実行
$status = $stmt->execute();

//４．データ登録処理後
if ($status === false) {
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  $error = $stmt->errorInfo();
  exit('ErrorMessage:'.$error[2]);
} else {
  //５．index.phpへリダイレクト
  header('Location: read.php');
}

// 1. SQL文を用意　4行目
$stmt = $pdo->prepare("INSERT INTO
                      gs_record1_table(id, name, mail, type, record, visit_date)
                      VALUES(NULL, :nameA4, :mailB4, :typeC4, :recordD4, :visit_dateE4)");

//  2. バインド変数を用意
// Integer 数値の場合 PDO::PARAM_INT
// String文字列の場合 PDO::PARAM_STR
// bindはセキュリティ処理
$stmt->bindValue(':nameA4', $nameA1, PDO::PARAM_STR);
$stmt->bindValue(':mailB4', $mailB1, PDO::PARAM_STR);
$stmt->bindValue(':typeC4', $typeC1, PDO::PARAM_STR);
$stmt->bindValue(':recordD4', $recordD1, PDO::PARAM_INT);
$stmt->bindValue(':visit_dateE4', $visit_dateE1, PDO::PARAM_STR);
//  3. 実行
$status = $stmt->execute();

//４．データ登録処理後
if ($status === false) {
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  $error = $stmt->errorInfo();
  exit('ErrorMessage:'.$error[2]);
} else {
  //５．index.phpへリダイレクト
  header('Location: read.php');
}

// 1. SQL文を用意　5行目
$stmt = $pdo->prepare("INSERT INTO
                      gs_record1_table(id, name, mail, type, record, visit_date)
                      VALUES(NULL , :nameA5, :mailB5, :typeC5, :recordD5, :visit_dateE5)");

//  2. バインド変数を用意
// Integer 数値の場合 PDO::PARAM_INT
// String文字列の場合 PDO::PARAM_STR
// bindはセキュリティ処理
$stmt->bindValue(':nameA5', $nameA1, PDO::PARAM_STR);
$stmt->bindValue(':mailB5', $mailB1, PDO::PARAM_STR);
$stmt->bindValue(':typeC5', $typeC1, PDO::PARAM_STR);
$stmt->bindValue(':recordD5', $recordD1, PDO::PARAM_INT);
$stmt->bindValue(':visit_dateE5', $visit_dateE1, PDO::PARAM_STR);
//  3. 実行
$status = $stmt->execute();

//４．データ登録処理後
if ($status === false) {
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  $error = $stmt->errorInfo();
  exit('ErrorMessage:'.$error[2]);
} else {
  //５．index.phpへリダイレクト
  header('Location: read.php');
}

?>

<html>

<head>
    <meta charset="utf-8">
    <title>Record Registration</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
<table>
<div class="excel" >
<p>Record Registration</p>
<a href="./post.php"><img src="./img/icon_159142_256.png" class="icon"></a>
<a href="./read.php"><img src="./img/icon_108192_256.png" class="icon"></a>

        </div>
<tr class="header">
          <th class="item1"> </th>
          <th class="item2">Trainee</th>
          <th class="item2">Mail</th>
          <th class="item2">Type</th>
          <th class="item2">Record</th>
          <th class="item2">Visit Date</th>
        </tr>
        <tr>
          <td class="item1">1</td>
          <td class="value1" id="A1" contenteditable=true><?= ($nameA1) ?></td>
          <td class="value1" id="A2" contenteditable=true><?= ($mailB1) ?></td>
          <td class="value1" id="A3" contenteditable=true><?= ($typeC1) ?></td>
          <td class="value1" id="A4" contenteditable=true><?= ($recordD1) ?></td>
          <td class="value1" id="A5" contenteditable=true><?= ($visit_dateE1) ?></td>
        </tr>

        <tr>
          <td class="item1">2</td>
          <td class="value1" id="A1" contenteditable=true><?= ($nameA2) ?></td>
          <td class="value1" id="A2" contenteditable=true><?= ($mailB2) ?></td>
          <td class="value1" id="A3" contenteditable=true><?= ($typeC2) ?></td>
          <td class="value1" id="A4" contenteditable=true><?= ($recordD2) ?></td>
          <td class="value1" id="A5" contenteditable=true><?= ($visit_dateE2) ?></td>
        </tr>

        <tr>
          <td class="item1">3</td>
          <td class="value1" id="A1" contenteditable=true><?= ($nameA3) ?></td>
          <td class="value1" id="A2" contenteditable=true><?= ($mailB3) ?></td>
          <td class="value1" id="A3" contenteditable=true><?= ($typeC3) ?></td>
          <td class="value1" id="A4" contenteditable=true><?= ($recordD3) ?></td>
          <td class="value1" id="A5" contenteditable=true><?= ($visit_dateE3) ?></td>
        </tr>

        <tr>
          <td class="item1">4</td>
          <td class="value1" id="A1" contenteditable=true><?= ($nameA4) ?></td>
          <td class="value1" id="A2" contenteditable=true><?= ($mailB4) ?></td>
          <td class="value1" id="A3" contenteditable=true><?= ($typeC4) ?></td>
          <td class="value1" id="A4" contenteditable=true><?= ($recordD4) ?></td>
          <td class="value1" id="A5" contenteditable=true><?= ($visit_dateE4) ?></td>
        </tr>

        <tr>
          <td class="item1">5</td>
          <td class="value1" id="A1" contenteditable=true><?= ($nameA5) ?></td>
          <td class="value1" id="A2" contenteditable=true><?= ($mailB5) ?></td>
          <td class="value1" id="A3" contenteditable=true><?= ($typeC5) ?></td>
          <td class="value1" id="A4" contenteditable=true><?= ($recordD5) ?></td>
          <td class="value1" id="A5" contenteditable=true><?= ($visit_dateE5) ?></td>
        </tr>
        
        </table>
        </form>
</body>

</html>