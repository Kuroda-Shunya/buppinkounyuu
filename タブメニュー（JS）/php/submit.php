<?php
$goods = filter_input(INPUT_GET, "goods");
$price = filter_input(INPUT_GET, "price");
$url = filter_input(INPUT_GET, "url");
$name = filter_input(INPUT_GET, "name");
$note = filter_input(INPUT_GET, "note");
setcookie("goods", $goods);
setcookie("price", $price);
setcookie("url", $url);
setcookie("name", $name);
setcookie("note", $note);
function h($str)
{
  return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}

?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>購入リスト提出</title>
  <link rel="stylesheet" href="../css/submit.css">
</head>
<body>
<ul>
  <li><a href="list.php">リスト一覧に戻る</a></li>
  <li><a href="create_list.php">購入予定リスト作成に戻る</a></li>
</ul>
  <ul>
    <li>
      <p1>品名 :  </p1>
      <p2><?= h($goods); ?></p2>
    </li>
    <li>
      <p1>金額 :  </p1>
      <p2><?= h($price); ?></p2>
    </li>
    <li>
      <p1>URL :  </p1>
      <p2><?= h($url); ?></p2>
    </li>
    <li>
      <p1>記入者 :  </p1>
      <p2><?= h($name); ?></p2>
    </li>
    <li>
      <p1>備考 :</p1>
      <p2 id="bikou"><?= h($note); ?></p2>
    </li>
  </ul>
  <form action="complete.php">
  <button id="sakusei">作成</button>
  </form>


</body>

</html>