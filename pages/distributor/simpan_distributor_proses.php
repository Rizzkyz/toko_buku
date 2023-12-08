<?php
include "../../conf/conn.php";
$distributor = $_POST['nama_distributor'];
$alamat      = $_POST['alamat'];
$telepon     = $_POST['telepon'];
$query = ("INSERT INTO distributor (nama_distributor, alamat, telepon) VALUE('$distributor', '$alamat', '$telepon')");
if ($koneksi->query($query)) {
  //redirect ke halaman index.php 
  //header("location: index.php");
  header("location: ../../index.php?page=data_distributor");
} else {
  //pesan error gagal update data
  //echo "Data Gagal Disimpan!";
  echo "Data Gagal Disimpan !!!";
}
