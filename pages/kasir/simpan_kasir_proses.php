<?php
include "../../conf/conn.php";
$nama = $_POST["nama"];
$alamat = $_POST["alamat"];
$telepon = $_POST["telepon"];
$status = $_POST["status"];
$username = $_POST["username"];
$password = md5($_POST["password"]);

$query = ("INSERT INTO kasir (nama, alamat, telepon, status, username, password) VALUES ('$nama', '$alamat', '$telepon', '$status', '$username', '$password')");
if ($koneksi->query($query)) {
  //redirect ke halaman index.php 
  //header("location: index.php");
  echo '<script>alert("Data Berhasil Disimpan !!!");
  window.location.href="../../index.php?page=data_kasir"</script>';
} else {
  //pesan error gagal update data
  //echo "Data Gagal Disimpan!";
  echo '<script>alert("Data Digagal Disimpan !!!");
  window.location.href="../../index.php?page=data_kasir"</script>';
}
