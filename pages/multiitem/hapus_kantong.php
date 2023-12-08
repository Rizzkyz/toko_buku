<?php
session_start();
$id = $_GET['id'];
//unset($_SESSION["kantong"]);
if (isset($_GET['id'])) {
  echo $id . "<br>";
  $cart = unserialize(serialize($_SESSION['kantong_belanja']));
  unset($cart[$_GET['id']]);
  $cart = array_values($cart);
  $_SESSION['kantong_belanja'] = $cart;
}
if (!empty($_SESSION['kantong_belanja'])) {
  $cart = unserialize(serialize($_SESSION['kantong_belanja']));
  for ($i = 0; $i < count($cart); $i++) {
    echo $cart[$i]['harga_jual'] . "/" . $cart[$i]['judul'] . "<br>";
  }
}
header('Location: ../../index.php?page=data_multiitem');
