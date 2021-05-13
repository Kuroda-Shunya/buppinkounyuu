<?php
require("PDO.php");

$id=filter_input(INPUT_COOKIE, "id");

$delete = $dbh->query("DELETE FROM table_purchased WHERE id=$id");

?>


<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>購入管理</title>
  <link rel="stylesheet" href="../css/submit.css">
</head>
<body>
<ul>
  <li><a href="list.php">リスト一覧に戻る</a></li>
  <li><a href="create_list.php">購入予定リスト作成に戻る</a></li>
</ul>
<h>削除しました。</h>
</body>

</html>