<?php
require("PDO.php");

$goods =filter_input(INPUT_COOKIE, "goods");
$price =filter_input(INPUT_COOKIE, "price");
$url =filter_input(INPUT_COOKIE, "url");
$name =filter_input(INPUT_COOKIE, "name");
$note =filter_input(INPUT_COOKIE, "note");
$buget_name=filter_input(INPUT_GET, "buget_name");
$treat=filter_input(INPUT_GET, "treat");
$note_teach =filter_input(INPUT_GET, "note_teach");
$id=filter_input(INPUT_COOKIE, "id");

$delete = $dbh->query("DELETE FROM table_want WHERE id=$id");

$stmt = $dbh->prepare("INSERT INTO table_allowed (goods,price,url,name,note,buget_name,treat,note_teach) VALUES (:goods,:price,:url,:name,:note,:buget_name,:treat,:note_teach)");
$stmt->bindValue('goods', $goods, PDO::PARAM_STR);
$stmt->bindValue('price', $price, PDO::PARAM_INT);
$stmt->bindValue('url', $url, PDO::PARAM_STR);
$stmt->bindValue('name', $name, PDO::PARAM_STR);
$stmt->bindValue('note', $note, PDO::PARAM_STR);
$stmt->bindValue('buget_name', $buget_name, PDO::PARAM_STR);
$stmt->bindValue('treat', $treat, PDO::PARAM_STR);
$stmt->bindValue('note_teach', $note_teach, PDO::PARAM_STR);
$stmt->execute();

  function h($str)
{
  return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}
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
<h>送信しました。</h>
</body>

</html>