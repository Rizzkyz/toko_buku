<?php
include "../../conf/conn.php";
$id = $_GET['id'];
$query = ("DELETE FROM buku WHERE id_buku ='$id'");
if ($koneksi->query($query)) {
  //redirect ke halaman index.php 
  //header("location: index.php");
  header("location: ../../index.php?page=data_buku");
} else {
  //pesan error gagal update data
  //echo "Data Gagal Diupate!";
  echo "Data Gagal Dihapus !!!";
}
