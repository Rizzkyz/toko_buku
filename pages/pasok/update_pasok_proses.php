<?php
include "../../conf/conn.php";
$id = $_POST['id'];
$distributor = $_POST['distributor'];
$buku = $_POST['buku'];
$jumlah = $_POST['jumlah'];
$tanggal = $_POST['tanggal'];
$query = ("UPDATE pasok SET id_distributor='$distributor',id_buku='$buku',jumlah='$jumlah',tanggal='$tanggal' WHERE id_pasok ='$id'");
if ($koneksi->query($query)) {
  //redirect ke halaman index.php 
  //header("location: index.php");
  echo '<script>alert("Data Berhasil Diupdate !!!");
  window.location.href="../../index.php?page=data_pasok"</script>';
} else {
  //pesan error gagal update data
  //echo "Data Gagal Diupate!";
  echo '<script>alert("Data Gagal Diupdate !!!");
  window.location.href="../../index.php?page=data_pasok"</script>';
}
