<?php
include "../../conf/conn.php";
$id = $_GET['id'];
$query = ("DELETE FROM distributor WHERE id_distributor ='$id'");
if ($koneksi->query($query)) {
  //redirect ke halaman index.php 
  //header("location: index.php");
  header("location: ../../index.php?page=data_distributor");
} else {
  //pesan error gagal update data
  //echo "Data Gagal Diupate!";
  echo "Data Gagal Diubah !!!";
}
