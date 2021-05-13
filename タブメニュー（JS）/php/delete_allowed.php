<?php
require("PDO.php");
$id=filter_input(INPUT_COOKIE, "id");
$stmt = $dbh->query("SELECT * FROM table_allowed WHERE id=$id  ");
  $purchases_yes_list = $stmt->fetch();

setcookie("goods", $purchases_yes_list[goods]);
setcookie("price", $purchases_yes_list[price]);
setcookie("url", $purchases_yes_list[url]);
setcookie("name", $purchases_yes_list[name]);
setcookie("note", $purchases_yes_list[note]);
setcookie("buget_name", $purchases_yes_list[buget_name]);
setcookie("treat", $purchases_yes_list[treat]);
setcookie("note_teach", $purchases_yes_list[note_teach]);
setcookie("buy_date", date("Y/m/d"));

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
      <p2><?= h($purchases_yes_list[goods]); ?></p2>
    </li>
    <li>
      <p1>金額 :  </p1>
      <p2><?= h($purchases_yes_list[price]); ?>円</p2>
    </li>
    <li>
      <p1>URL :  </p1>
      <p2><?= h($purchases_yes_list[url]); ?></p2>
    </li>
    <li>
      <p1>記入者 :  </p1>
      <p2><?= h($purchases_yes_list[name]); ?></p2>
    </li>
    <li>
      <p1>備考 :</p1>
      <p2 id="bikou"><?= h($purchases_yes_list[note]); ?></p2>
    </li>
    <li>
      <p1>予算名：</p1>
      <p2><?= h($purchases_yes_list[buget_name]); ?></p2>
    </select>
  </li>
  <li>
    <p1>取引：</p1>
    <p2><?= h($purchases_yes_list[treat]); ?></p2>
  </li>
  <li>
    <p1>備考(先生)：</p1>
    <p2><?= h($purchases_yes_list[note_teach]); ?></p2>
  </li>
<form action="delete_complete_allowed.php"><button>削除します。</buttom></form>
</ul>

</body>

</html>