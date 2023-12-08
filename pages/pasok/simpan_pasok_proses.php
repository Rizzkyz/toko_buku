<?php
include "../../conf/conn.php";
$distributor = $_POST['distributor'];
$buku = $_POST['buku'];
$jumlah  = $_POST['jumlah'];
$tanggal = $_POST['tanggal'];
$query = "INSERT INTO pasok (id_distributor, id_buku, jumlah, tanggal) VALUES ('$distributor', '$buku', '$jumlah', '$tanggal')";


if ($koneksi->query($query)) {
  //redirect ke halaman index.php 
  //header("location: index.php");
  echo '<script>alert("Data Berhasil Ditambah !!!");
  window.location.href="../../index.php?page=data_pasok"</script>';
} else {
  //pesan error gagal update data
  //echo "Data Gagal Disimpan!";
  echo '<script>alert("Data Gagal Ditambah !!!");
  window.location.href="../../index.php?page=data_pasok"</script>';
}
