<?php
require("PDO.php");
$id=filter_input(INPUT_COOKIE, "id");
$stmt = $dbh->query("SELECT * FROM table_want WHERE id=$id  ");
  $purchases_list = $stmt->fetch();



setcookie("goods", $purchases_list[goods]);
setcookie("price", $purchases_list[price]);
setcookie("url", $purchases_list[url]);
setcookie("name", $purchases_list[name]);
setcookie("note", $purchases_list[note]);

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
  <div class="purchase">
  <a href="list.php">リスト一覧に戻る</a>
  </div>
  <ul>
    <li>
      <p1>品名 :  </p1>
      <p2><?= h($purchases_list[goods]); ?></p2>
    </li>
    <li>
      <p1>金額 :  </p1>
      <p2><?= h($purchases_list[price]); ?>円</p2>
    </li>
    <li>
      <p1>URL :  </p1>
      <p2><?= h($purchases_list[url]); ?></p2>
    </li>
    <li>
      <p1>記入者 :  </p1>
      <p2><?= h($purchases_list[name]); ?></p2>
    </li>
    <li>
      <p1>備考 :</p1>
      <p2 id="bikou"><?= h($purchases_list[note]); ?></p2>
    </li>
  </ul>
  <form action="delete_complete_want.php"><button>削除します。</button></form>

</body>

</html>