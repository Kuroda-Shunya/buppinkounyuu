<?php

// 教研費
$stmt_sum = $dbh->query("SELECT SUM(price) FROM table_allowed WHERE treat=0xe8b3bce585a5e38197e381a6e889afe38184 AND buget_name=0xe69599e7a094e8b2bb");
$purshases_sum=$stmt_sum->fetch();
$stmt_yes_sum = $dbh->query("SELECT SUM(price) FROM table_purchased WHERE buget_name=0xe69599e7a094e8b2bb");
$purshases_yes_sum=$stmt_yes_sum->fetch();
$buget_0_kyouken=1000000;
$sum_kyouken=$purshases_yes_sum["SUM(price)"] + $purshases_sum["SUM(price)"];
$buget_now_kyouken=$buget_0_kyouken - $sum_kyouken;
$buget_list_kyouken=[$buget_0_kyouken,$sum_kyouken,$buget_now_kyouken];

// 学長
$stmt_sum = $dbh->query("SELECT SUM(price) FROM table_allowed WHERE treat=0xe8b3bce585a5e38197e381a6e889afe38184 AND buget_name=0xe5ada6e995b7e8b2bb");
$purshases_sum=$stmt_sum->fetch();
$stmt_yes_sum = $dbh->query("SELECT SUM(price) FROM table_purchased WHERE buget_name=0xe5ada6e995b7e8b2bb");
$purshases_yes_sum=$stmt_yes_sum->fetch();
$buget_0_gakuchou=1000000;
$sum_gakuchou=$purshases_yes_sum["SUM(price)"] + $purshases_sum["SUM(price)"];
$buget_now_gakuchou=$buget_0_gakuchou - $sum_gakuchou;
$buget_list_gakuchou=[$buget_0_gakuchou,$sum_gakuchou,$buget_now_gakuchou];

// 科研費（若手）
$stmt_sum = $dbh->query("SELECT SUM(price) FROM table_allowed WHERE treat=0xe8b3bce585a5e38197e381a6e889afe38184 AND buget_name=0xe7a791e7a094e8b2bbefbc88e88ba5e6898befbc89");
$purshases_sum=$stmt_sum->fetch();
$stmt_yes_sum = $dbh->query("SELECT SUM(price) FROM table_purchased WHERE buget_name=0xe7a791e7a094e8b2bbefbc88e88ba5e6898befbc89");
$purshases_yes_sum=$stmt_yes_sum->fetch();
$buget_0_kaken_wakate=1000000;
$sum_kaken_wakate=$purshases_yes_sum["SUM(price)"] + $purshases_sum["SUM(price)"];
$buget_now_kaken_wakate=$buget_0_kaken_wakate - $sum_kaken_wakate;
$buget_list_kaken_wakate=[$buget_0_kaken_wakate,$sum_kaken_wakate,$buget_now_kaken_wakate];


?>