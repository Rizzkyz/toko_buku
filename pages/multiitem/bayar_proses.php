<?php
session_start();
include "../../conf/conn.php";

if ($_POST) {
  date_default_timezone_set('Asia/Jakarta');
  $tgl = date("Y-m-d H:i:s");
  $total_belanja = $_POST['total'];

  if (!empty($_SESSION['kantong_belanja'])) {
    $cart = unserialize(serialize($_SESSION['kantong_belanja']));
    $total_item = count($cart);
    $pegawai = $_SESSION['id_kasir'];

    // Masukkan data ke tabel order
    $query = "INSERT INTO penjualan(id_kasir, total, tanggal) VALUES ('$pegawai', '$total_belanja', '$tgl')";

    if (!mysqli_query($koneksi, $query)) {
      die(mysqli_error($koneksi));
    }

    // Cek id_order terbaru
    $check_id = mysqli_query($koneksi, "SELECT id_penjualan FROM penjualan ORDER BY id_penjualan DESC LIMIT 1");
    $row = mysqli_fetch_array($check_id);
    $id_jual = $row['id_penjualan'];

    // Masukkan data ke tabel detail order
    for ($i = 0; $i < count($cart); $i++) {
      $input = "INSERT INTO detail_penjualan(id_penjualan, id_buku, harga, jumlah, total) VALUES ('$id_jual', '" . $cart[$i]['id'] . "', '" . $cart[$i]['harga_jual'] . "', '" . $cart[$i]['pembelian'] . "', '" . $cart[$i]['harga_jual'] * $cart[$i]['pembelian'] . "')";

      if (!mysqli_query($koneksi, $input)) {
        die(mysqli_error($koneksi));
      }
    }
  } else {
    echo "<br>kantong kosong";
  }

  // Bersihkan kantong
  unset($_SESSION["kantong_belanja"]);
  header('Location: ../../index.php?page=data_multiitem');
}
?>
