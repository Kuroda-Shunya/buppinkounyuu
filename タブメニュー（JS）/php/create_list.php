<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>購入予定リスト作成</title>
  <link rel="stylesheet" href="../css/styles2.css">
</head>
<body>
  <a href="list.php">リスト一覧に戻る</a>
  <form action="submit.php" method="get">
    <ul>
      <li>
        <p>品名</p>
          <input type="text" name="goods">
      </li>
      <li>
        <p>金額</p><input type="text" name="price" placeholder="半角数字のみ(¥やカンマは不要。)">
      </li>
      <li>
        <p>URL</p><input type="text" name="url">
      </li>
      <li>
        <p>記入者</p><input type="text" name="name">
      </li>
      <li>
        <p>備考</p><textarea name="note"></textarea>
      </li>
    </ul>
  <p id="sakusei"><button type="button" onclick="submit();">作成</button></p>
  </form>
  
</body>


</html>