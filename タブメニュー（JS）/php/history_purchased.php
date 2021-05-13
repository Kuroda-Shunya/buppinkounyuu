<?php
require("PDO.php");
$id=filter_input(INPUT_COOKIE, "id");
$stmt = $dbh->query("SELECT * FROM table_purchased WHERE id=$id  ");
  $purchases_yes_buy_list = $stmt->fetch();

  function h($str)
{
  return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}
?>


<!DOCTYPE html>
<html lang="ja">
  <meta charset="utf-8">
  <title>購入管理</title>
  <link rel="stylesheet" href="../css/submit.css">
</head>
  <div class="purchase">
  <a href="list.php">リスト一覧に戻る</a>
  </div>
  <ul>
    <li>
      <p1>品名 :  </p1>
      <p2><?= h($purchases_yes_buy_list[goods]); ?></p2>
    </li>
    <li>
      <p1>金額 :  </p1>
      <p2><?= h($purchases_yes_buy_list[price]); ?>円</p2>
    </li>
    <li>
      <p1>URL :  </p1>
      <p2><?= h($purchases_yes_buy_list[url]); ?></p2>
    </li>
    <li>
      <p1>記入者 :  </p1>
      <p2><?= h($purchases_yes_buy_list[name]); ?></p2>
    </li>
    <li>
      <p1>備考 :</p1>
      <p2 id="bikou"><?= h($purchases_yes_buy_list[note]); ?></p2>
    </li>
    <li>
      <p1>予算名：</p1>
      <p2><?= h($purchases_yes_buy_list[buget_name]); ?></p2>
    </select>
  </li>
  <li>
    <p1>取引：</p1>
    <p2><?= h($purchases_yes_buy_list[treat]); ?></p2>
  </li>
  <li>
    <p1>備考(先生)：</p1>
    <p2><?= h($purchases_yes_buy_list[note_teach]); ?></p2>
  </li>
  <li>
    <p1>購入日：</p1>
    <p2><?= h($purchases_yes_buy_list[buy_date]); ?></p2>
  </li>
</ul>
<form action="delete_purchased.php">
    <button>削除</buttom>
    </form>
</body>

</html>