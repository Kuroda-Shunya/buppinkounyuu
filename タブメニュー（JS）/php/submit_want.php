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
    <form action="complete_want.php">
    <li>
      <p1>予算名：</p1>
      <select name="buget_name">
        <option name="kyouken">教研費</option>
        <option name="gakuchou">学長費</option>
        <option name="kaken_watate">科研費（若手）</option>
      </select>
    </li>
    <li>
      <p1>取引：</p1>
      <select name="treat">
        <option name="kyoka">購入して良い</option>
        <option name="horyuu">保留</option>
        <option name="kyohi">拒否</option>
      </select>
    </li>
    <li>
        <p>備考(先生)</p><textarea name="note_teach"></textarea>
    </li>
    <button id="sakusei">送信</button>
    </form>
    <form action="delete_want.php">
    <button>削除</buttom>
    </form>
  </ul>

</body>

</html>