<h4>Daftar Belanja Anda</h4>
<?php
include "conf/conn.php";
//echo"halaman cart";
if (isset($_POST['id'], $_POST['pembelian'])) {
  $id = $_POST['id'];
  $pembelian = $_POST['pembelian'];
  //echo "$id.$pembelian";


  $produk = mysqli_query($koneksi, "SELECT * FROM buku WHERE id_buku = '$id'");
  $dt_produk = $produk->fetch_assoc();

  //$produk=$dt_produk['nama_produk'];
  //$harga=$dt_produk['harga'];
  //echo "$produk.$harga";

  //var_dump($_SESSION['kantong']);
  if (!isset($_SESSION['kantong_belanja'])) $_SESSION['kantong_belanja'] = [];

  $index = -1;
  $cart = unserialize(serialize($_SESSION['kantong_belanja']));

  // jika produk sudah ada dalam cart maka pembelian akan diupdate
  for ($i = 0; $i < count($cart); $i++) {
    if ($cart[$i]['id'] == $id) {
      $index = $i;
      $_SESSION['kantong_belanja'][$i]['pembelian'] = $pembelian;
      break;
    }
  }

  // jika produk belum ada dalam cart
  if ($index == -1) {
    $_SESSION['kantong_belanja'][] = [
      'id' => $id,
      'judul' => $dt_produk['judul'],
      'harga_jual' => $dt_produk['harga_jual'],
      'pembelian' => $pembelian
    ];
  }
}
// var_dump($_SESSION['kantong_belanja']);
//var_dump($_SESSION['kantong']);
if (!empty($_SESSION['kantong_belanja'])) {
?>


  <br>
  <table class="table table-bordered">
    <tr align="center">
      <th>#</th>
      <th>ID Barang</th>
      <th>Judul</th>
      <th>Pembelian</th>
      <th>Harga</th>
      <th>Total</th>
      <th>Aksi</th>
    </tr>

    <?php
    if (isset($_SESSION['kantong_belanja'])) {
      $cart = unserialize(serialize($_SESSION['kantong_belanja']));
      $index = 0;
      $no = 1;
      $total = 0;
      $total_bayar = 0;

      for ($i = 0; $i < count($cart); $i++) {
        $total = $_SESSION['kantong_belanja'][$i]['harga_jual'] * $_SESSION['kantong_belanja'][$i]['pembelian'];
        $total_bayar += $total;
    ?>

        <tr>
          <td align="center"><?= $no++; ?></td>
          <td><?= $cart[$i]['id']; ?></td>
          <td><?= $cart[$i]['judul']; ?></td>
          <td align="center"><?= $cart[$i]['pembelian']; ?></td>
          <td><?= $cart[$i]['harga_jual']; ?></td>
          <td><?= $total; ?></td>
          <td align="center">
            <a href="pages/multiitem/hapus_kantong.php?id=<?= $index; ?>">
              <button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
            </a>
          </td>
        </tr>

    <?php
        $index++;
      }

      //hapus produk dalam cart
      if (isset($_GET['indeks'])) {
        $cart = unserialize(serialize($_SESSION['kantong_belanja']));
        unset($cart[$_GET['indeks']]);
        $cart = array_values($cart);
        $_SESSION['kantong_belanja'] = $cart;
      }
    }
    ?>

    <tr>
      <td colspan="4" align="right"><strong>Total Bayar</strong></td>
      <td><strong><?= $total_bayar; ?></strong></td>
      <td align="center">
        <a href="index.php?page=bayar">
          <button class="btn btn-success btn-sm">Bayar</button>
        </a>
      </td>
    </tr>

  </table>
  <br>
  <hr>
<?php

}
if (isset($_GET['indeks'])) {
  echo "anda menekan tombol hapus";
  // header('Location: index.php?page=transaksi_produk');
}


?>