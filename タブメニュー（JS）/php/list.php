<?php
require("PDO.php");
require("buget_name.php");

function h($str)
{
  return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}

$stmt = $dbh->query("SELECT * FROM table_want");
  $purchases_list = $stmt->fetchAll();
  $purchases_json = json_encode($purchases_list);

$stmt_yes = $dbh->query("SELECT * FROM table_allowed");
  $purchases_yes_list = $stmt_yes->fetchAll();
  $purchases_yes_json = json_encode($purchases_yes_list);

$stmt_yes_buy = $dbh->query("SELECT * FROM table_purchased");
  $purchases_yes_buy_list = $stmt_yes_buy->fetchAll();
  $purchases_yes_buy_json = json_encode($purchases_yes_buy_list);


?>


<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>購入管理</title>
  <link rel="stylesheet" href="../css/styles1.css">
</head>
<body>
  <div class="purchase">
    <a href="create_list.php">リスト作成</a>
  </div>
  <div class="container">
    <ul class="menu">
      <li><a href="#" class="active" data-id="want">買いたいもの</a></li>
      <li><a href="#" data-id="allowed">許可済み</a></li>
      <li><a href="#" data-id="purchased">購入済み</a></li>
    </ul>

    <form id="want_action">
    <section class="content active" id="want">
    </section>
    </form>

    <form id="allowed_action">
    <section class="content" id="allowed">
    </section>
    </form>

    <form id="purchased_action">
    <section class="content" id="purchased">
    </section>
    </form>
  </div>

  <ul class="buget">
    <li><h>予算名　　　支給額　　　購入金額　　　　残高</h></li>
    <li><h>教研費　　<?= $buget_list_kyouken[0]; ?>円　-　<?= $buget_list_kyouken[1]; ?>円　＝　<?= $buget_list_kyouken[2]; ?>円</h></li>
    <li><h>学長費　　<?= $buget_list_gakuchou[0]; ?>円　-　<?= $buget_list_gakuchou[1]; ?>円　＝　<?= $buget_list_gakuchou[2]; ?>円</h></li>
    <li><h>科研費（若手）　　<?= $buget_list_kaken_wakate[0]; ?>円　-　<?= $buget_list_kaken_wakate[1]; ?>円　＝　<?= $buget_list_kaken_wakate[2]; ?>円</h></li>
  </ul>

  
<script src="../js/main1.js"></script>
<script>

let purchases_list = <?php echo $purchases_json ?>;
purchases_list.forEach((list)=>{
  let button =document.createElement("button");
  button.textContent=`品目：${list.goods}　　値段：${list.price}円　　記入者：${list.name}`
  button.setAttribute("id",`${list.id}`);
  let want_action = document.getElementById("want_action");
  want_action.setAttribute("action","submit_want.php");
  const want = document.querySelector("#want");
  button.addEventListener("click", () => {
    document.cookie = `id=${list.id}`;
  });
  want.appendChild(button);
});

let purchases_yes_list = <?php echo $purchases_yes_json ?>;
purchases_yes_list.forEach((list)=>{
  let button =document.createElement("button");
  button.textContent=`品目：${list.goods}　　値段：${list.price}円　　記入者：${list.name}`
  button.setAttribute("id",`${list.id}`);
  let allowed_action = document.getElementById("allowed_action");
  allowed_action.setAttribute("action","submit_allowed.php");
  const allowed = document.querySelector("#allowed");
  button.addEventListener("click", () => {
    document.cookie = `id=${list.id}`;
  });
  allowed.appendChild(button);
});

let purchases_yes_buy_list = <?php echo $purchases_yes_buy_json ?>;
purchases_yes_buy_list.forEach((list)=>{
  let button =document.createElement("button");
  button.textContent=`品目：${list.goods}　　値段：${list.price}円　　記入者：${list.name}`
  button.setAttribute("id",`${list.id}`);
  let purchased_action = document.getElementById("purchased_action");
  purchased_action.setAttribute("action","history_purchased.php");
  const purchased = document.querySelector("#purchased");
  button.addEventListener("click", () => {
    document.cookie = `id=${list.id}`;
  });
  purchased.appendChild(button);
});

</script>


</body>


</html>