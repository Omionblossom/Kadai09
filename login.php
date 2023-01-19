
<?php
ini_set('display_errors', 0);

// セキュリティ クロスサイトスクリプティング
function h($str){
    return htmlspecialchars($str , ENT_QUOTES);
 }

//1.  DB接続します
//1.  DB接続します
try {
    //Password:MAMP='root',XAMPP=''
    $pdo = new PDO('mysql:dbname=gs_db5;charset=utf8;host=localhost', 'root', '');
  } catch (PDOException $e) {
    exit('DBConnectError'.$e->getMessage());
  }
  
  //２．データ取得SQL作成
  
  
  // where のなかにselectboxの選択を定義したものを入れ言え
  
  $stmt = $pdo->prepare("SELECT * FROM gs_record_table WHERE mail LIKE '%@%';");
  $status = $stmt->execute();
  
  
  //３．データ表示
  
  if ($status==false) {
      //execute（SQL実行時にエラーがある場合）
    $error = $stmt->errorInfo();
    exit("ErrorQuery:".$error[2]);
  
  }else{
    // elseの中はSQLが成功した場合
    //Selectデータの数だけ自動でループしてくれる
    //FETCH_ASSOC=http://php.net/manual/ja/pdostatement.fetch.php


    while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){

    
$date= $result['date'];
$name = $result['name'];
$mail = $result['mail'];
$type = $result['type'];
$record = $result['record'];
$visit_date = $result['visit_date'];
$img_update = '<a href="detail.php?id=' . $result['id'] . '"><img src="./img/icon_111110_256.png" style="width: 15px;height: auto;"></a>';
// $img_delete = '<a href="delete.php?id=' . $result['id'] . '"><img src="./img/icon_119860_256.png" style="width: 30px;height: auto;"></a>';
$img_delete ='<a href="delete.php?id=' . $result['id']. '" target="_blank" class="link_confirm"><img src="./img/icon_119860_256.png" style="width: 15px;height: auto;"></a>';

$view.="
<tr>
<th>$date</th>
<th>$name</th> 
<th>$mail</th>
<th>$type</th>
<th>$record</th>
<th>$visit_date</th>
</tr>
";

}}
?>


<html>

<head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
<div class="scroll_all">
</form>
<form name="form1" action="login_act.php" method="post">
<p id="scroll1">Login control</p>
        ID:<input type="text" name="lid" /><br>
        PW:<input type="password" name="lpw" /><br>
        <input type="submit" value="LOGIN" />
 </form>
</div>

<table border="1">
<div class="excel" >
    <p>Login control</p>
    
<tr class="header">
          <th class="item2">Updated</th>
          <th class="item2">Trainee</th>
          <th class="item2">Mail</th>
          <th class="item2">Type</th>
          <th class="item2">Record</th>
          <th class="item2">Date</th>
</tr>

<div><?= $view ?></div>


</table>
</body>

</html>
