<?php
include "../../conf/conn.php";
$id = $_GET['id'];
$query = ("DELETE FROM pasok WHERE id_pasok ='$id'");
if ($koneksi->query($query)) {
  //redirect ke halaman index.php 
  //header("location: index.php");
  header("location: ../../index.php?page=data_pasok");
} else {
  //pesan error gagal update data
  //echo "Data Gagal Diupate!";
  echo "Data Gagal Diubah !!!";
}
