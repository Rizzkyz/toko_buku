<?php
include "../../conf/conn.php";
$id         = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$telepon = $_POST['telepon'];
$status = $_POST['status'];
$username = $_POST['username'];
$password = md5($_POST['password']);
$query = ("UPDATE kasir SET nama='$nama', alamat='$alamat', telepon='$telepon', status='$status', username='$username', password='$password' WHERE id_kasir=$id");
if ($koneksi->query($query)) {
  //redirect ke halaman index.php 
  //header("location: index.php");
  echo '<script>alert("Data Berhasil Diupdate !!!");
  window.location.href="../../index.php?page=data_kasir"</script>';
} else {
  //pesan error gagal update data
  //echo "Data Gagal Disimpan!";
  echo '<script>alert("Data Digagal Diupdate !!!");
  window.location.href="../../index.php?page=data_kasir"</script>';
}
