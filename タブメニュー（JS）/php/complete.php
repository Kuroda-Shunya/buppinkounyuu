<?php
$goods =filter_input(INPUT_COOKIE, "goods");
$price =filter_input(INPUT_COOKIE, "price");
$url =filter_input(INPUT_COOKIE, "url");
$name =filter_input(INPUT_COOKIE, "name");
$note =filter_input(INPUT_COOKIE, "note");

require("PDO.php");

$stmt = $dbh->prepare("INSERT INTO table_want (goods,price,url,name,note) VALUES (:goods,:price,:url,:name,:note)");
$stmt->bindValue('goods', $goods, PDO::PARAM_STR);
$stmt->bindValue('price', $price, PDO::PARAM_INT);
$stmt->bindValue('url', $url, PDO::PARAM_STR);
$stmt->bindValue('name', $name, PDO::PARAM_STR);
$stmt->bindValue('note', $note, PDO::PARAM_STR);
$stmt->execute();
?>


<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>作成完了</title>
  <link rel="stylesheet" href="../css/submit.css">
</head>
<body>
<ul>
  <li><a href="list.php">リスト一覧に戻る</a></li>
  <li><a href="create_list.php">購入予定リスト作成に戻る</a></li>
</ul>
<h>送信しました。</h>
</body>
</html>