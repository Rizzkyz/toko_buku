<?php

if (isset($_GET['page'])) {
  $page = $_GET['page'];
  switch ($page) {
      // mahasiswa
    case 'data_distributor';
      include 'pages/distributor/data_distributor.php';
      break;
    case 'tambah_distributor':
      include 'pages/distributor/tambah_distributor.php';
      break;
    case 'ubah_distributor';
      include 'pages/distributor/edit_distributor.php';
      break;

      // Pasok
    case 'data_pasok';
      include 'pages/pasok/data_pasok.php';
      break;
    case 'tambah_pasok':
      include 'pages/pasok/tambah_pasok.php';
      break;
    case 'ubah_pasok';
      include 'pages/pasok/edit_pasok.php';
      break;
      // Kasir

    case 'data_kasir';
      include 'pages/kasir/data_kasir.php';
      break;
    case 'tambah_kasir':
      include 'pages/kasir/tambah_kasir.php';
      break;
    case 'ubah_kasir';
      include 'pages/kasir/edit_kasir.php';
      break;

      // Buku
    case 'data_buku';
      include 'pages/buku/data_buku.php';
      break;
    case 'tambah_buku':
      include 'pages/buku/tambah_buku.php';
      break;
    case 'ubah_buku';
      include 'pages/buku/edit_buku.php';
      break;

      // Penjualan
    case 'data_penjualan';
      include 'pages/penjualan/data_penjualan.php';
      break;
    case 'tambah_penjualan';
      include 'pages/penjualan/tambah_penjualan.php';
      break;
    case 'ubah_penjualan';
      include 'pages/penjualan/edit_penjualan.php';
      break;

      // Multi Item
    case 'data_multiitem';
      include 'pages/multiitem/data_transaksi_buku.php';
      break;
    case 'bayar';
      include 'pages/multiitem/bayar.php';
      break;

      //pemilik
    case 'pemilik';
      include 'pages/pemilik/pemilik.php';
      break;
    case 'detail';
      include 'pages/pemilik/detail.php';
      break;
  }
} else {
  //beranda
  include "pages/beranda.php";
}
