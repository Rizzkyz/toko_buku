<?php
include "../../conf/conn.php";
$id = $_POST['id'];
$buku = $_POST['buku'];
$kasir = $_POST['kasir'];
$jumlah = $_POST['jumlah'];
$total = $_POST['total'];
$tanggal = $_POST['tanggal'];
$query = ("UPDATE penjualan SET id_buku='$buku',id_kasir='$kasir',jumlah='$jumlah', total='$total', tanggal='$tanggal' WHERE id_penjualan ='$id'");
if ($koneksi->query($query)) {
  //redirect ke halaman index.php 
  //header("location: index.php");
  echo '<script>alert("Data Berhasil Diupdate !!!");
  window.location.href="../../index.php?page=data_penjualan"</script>';
} else {
  //pesan error gagal update data
  //echo "Data Gagal Diupate!";
  echo '<script>alert("Data Gagal Diupdate !!!");
  window.location.href="../../index.php?page=data_penjualan"</script>';
}
