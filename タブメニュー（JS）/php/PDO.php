<?php
try {
  $dbh = new PDO('mysql:dbname=buy_lists;host=www-proxy.ed.suwa.tus.ac.jp;charset=utf8','root','root',
    [
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
      PDO::ATTR_EMULATE_PREPARES => false,
      PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC,
      ]
  );
  } catch (PDOException $e) {
    $error = $e->getMessage();
  }
?>