<?php
include "../../conf/conn.php";
$id          = $_POST['id'];
$distributor = $_POST['nama_distributor'];
$alamat      = $_POST['alamat'];
$telepon     = $_POST['telepon'];
$query = ("UPDATE distributor SET nama_distributor='$distributor',alamat='$alamat',telepon='$telepon' WHERE id_distributor ='$id'");
if ($koneksi->query($query)) {
  //redirect ke halaman index.php 
  //header("location: index.php");
  header("location: ../../index.php?page=data_distributor");
} else {
  //pesan error gagal update data
  //echo "Data Gagal Diupate!";
  echo "Data Gagal Diubah !!!";
}
