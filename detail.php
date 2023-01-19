<?php

session_start();
require_once('funcs.php');
loginCheck();

$id = $_GET['id'];

require_once('funcs.php');
$pdo = db_conn();

$stmt = $pdo->prepare('SELECT * FROM gs_record1_table WHERE id=:id;');
$stmt->bindValue(':id',$id,PDO::PARAM_INT); //INT=数字
$status = $stmt->execute();

$result = '';
if ($status === false) {
    //*** function化する！******\
    $error = $stmt->errorInfo();
    exit('SQLError:' . print_r($error, true));
} else {
    $result = $stmt->fetch();
}

?>

<html>

<head>
    <meta charset="utf-8">
    <title>Trainning Record</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
<form method="POST" action="update.php">
<div class="excel" >
    <a>Trainning Record List</a>
       <a href="./kanri.php" class="icon_r2">User Profile</a><br><br>
    <input type="image" name="btn_save" src="./img/icon_save.png" alt="更新" value="更新" class="icon">
    <a href="./post.php"><img src="./img/icon_001052_256.png" class="icon"></a>
    <a href="./read.php"><img src="./img/icon_159142_256.png" class="icon"></a>
    <a href="./logout.php"><img src="./img/ログアウト・サインアウトのアイコン素材 1.png" class="icon_r"></a>
    <table border="1">     
<tr class="header">
          <th class="item2">Updated</th>
          <th class="item2">Trainee</th>
          <th class="item2">Mail</th>
          <th class="item2">Type</th>
          <th class="item2">Record</th>
          <th class="item2">Visit Date</th>

</tr>
<tr>
　　　　　　<input type="hidden" name="id" value="<?= $result['id'] ?>"></td>
          <td class="value1" id="A0" contenteditable=true ><input type="text"  name="dateA0"  value="<?= $result['date'] ?>" class="cell"></td>    
          <td class="value1" id="A1" contenteditable=true><input type="text"  name="nameA1"  value="<?= $result['name'] ?>" class="cell"></td>
          <td class="value1" id="A2" contenteditable=true><input type="email"  name="mailB1" value="<?= $result['mail'] ?>" class="cell"></td>
          <td class="value1" id="A3" contenteditable=true><input type="text"  name="company_nameC1" value="<?= $result['company_name'] ?>" class="cell"></td>
          <td class="value1" id="A4" contenteditable=true><input type="text"  name="visit_dateD1" value="<?= $result['visit_date'] ?>" class="cell"></td>
          <td class="value1" id="A5" contenteditable=true><input type="date" name="scoreE1" value="<?= $result['score'] ?>" class="cell"></td>
        </tr>

</table>
</form>
</body>

</html>