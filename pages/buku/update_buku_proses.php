<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include '../../conf/conn.php';

// membuat variabel untuk menampung data dari form
$id         = $_POST['id'];
$judul      = $_POST['judul'];
$noisbn     = $_POST['noisbn'];
$penulis    = $_POST['penulis'];
$penerbit   = $_POST['penerbit'];
$tahun      = $_POST['tahun'];
$stok       = $_POST['stok'];
$pokok      = $_POST['harga_pokok'];
$jual       = $_POST['harga_jual'];
$gambar     = $_FILES['gambar']['name'];
//cek dulu jika merubah gambar jalankan coding ini
if ($gambar != "") {
  $ekstensi_diperbolehkan = array('png', 'jpg', 'jpeg'); //ekstensi file gambar yang bisa diupload 
  $x = explode('.', $gambar); //memisahkan nama file dengan ekstensi yang diupload
  $ekstensi = strtolower(end($x));
  $file_tmp = $_FILES['gambar']['tmp_name'];
  $angka_acak     = rand(1, 999);
  $nama_gambar_baru = $angka_acak . '-' . $gambar; //menggabungkan angka acak dengan nama file sebenarnya
  if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
    move_uploaded_file($file_tmp, '../../dist/img/' . $nama_gambar_baru); //memindah file gambar ke folder gambar

    // jalankan query UPDATE berdasarkan ID yang produknya kita edit
    $query  = "UPDATE buku SET judul='$judul', noisbn='$noisbn', penulis='$penulis', penerbit='$penerbit', tahun='$tahun', stok='$stok', harga_pokok='$pokok', harga_jual='$jual', gambar = '$nama_gambar_baru'";
    $query .= "WHERE id_buku = '$id'";
    $result = mysqli_query($koneksi, $query);
    // periska query apakah ada error
    if (!$result) {
      die("Query gagal dijalankan: " . mysqli_errno($koneksi) .
        " - " . mysqli_error($koneksi));
    } else {
      //tampil alert dan akan redirect ke halaman index.php
      //silahkan ganti index.php sesuai halaman yang akan dituju
      echo '<script>alert("Data Berhasil Diubah !!!");
      window.location.href="../../index.php?page=data_buku"</script>';
    }
  } else {
    //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
    echo "<script>alert('Ekstensi gambar yang boleh hanya jpg jpeg atau png.')'<script>;
    window.location.href='../../index.php?page=data_buku'</script>';";
  }
} else {
  // jalankan query UPDATE berdasarkan ID yang produknya kita edit
  $query  = "UPDATE buku SET judul='$judul', noisbn='$noisbn', penulis='$penulis', penerbit='$penerbit', tahun='$tahun', stok='$stok', harga_pokok='$pokok', harga_jual='$jual', gambar = '$nama_gambar_baru'";
  $query .= " WHERE id_buku = '$id'";
  $result = mysqli_query($koneksi, $query);
  // periska query apakah ada error
  if (!$result) {
    die("Query gagal dijalankan: " . mysqli_errno($koneksi) .
      " - " . mysqli_error($koneksi));
  } else {
    //tampil alert dan akan redirect ke halaman index.php
    //silahkan ganti index.php sesuai halaman yang akan dituju
    echo '<script>alert("Data Berhasil Diubah !!!");
    window.location.href="../../index.php?page=data_buku"</script>';
  }
}
