<?php
include "../../conf/conn.php";
if ($_POST) {
  $judul = $_POST['judul'];
  $noisbn = $_POST['noisbn'];
  $penulis = $_POST['penulis'];
  $penerbit = $_POST['penerbit'];
  $tahun = $_POST['tahun'];
  $stok = $_POST['stok'];
  $harga_pokok = $_POST['harga_pokok'];
  $harga_jual = $_POST['harga_jual'];
  $gambar = $_POST['gambar'];

  $query = "INSERT INTO buku (judul, noisbn, penulis, penerbit, tahun, stok, harga_pokok, harga_jual,gambar) VALUES ('$judul', '$noisbn', '$penulis', '$penerbit', '$tahun', '$stok', '$harga_pokok', '$harga_jual', '$gambar')";

  if (!mysqli_query($koneksi, $query)) {
    die(mysqli_error($koneksi));
  } else {
    echo '<script>alert("Data Berhasil Disimpan !!!");
              window.location.href="../../index.php?page=data_buku"</script>';
  }
}
function upload()
{

  $namaFile = $_FILES['gambar']['name'];
  $ukuranFile = $_FILES['gambar']['size'];
  $error = $_FILES['gambar']['error'];
  $tmpName = $_FILES['gambar']['tmp_name'];

  // cek apakah tidak ada gambar yang di upload
  if ($error === 4) {
    echo "<script>
                        alert('pilih gambar terlebih dahulu!');
                </script>";
    return false;
  }

  // cek apakah yang diupload adalah gambar
  $ekstensiValid = ['jpg', 'jpeg', 'png'];
  $ekstensiGambar = explode('.', $namaFile);
  $ekstensiGambar = strtolower(end($ekstensiGambar));
  if (!in_array($ekstensiGambar, $ekstensiValid)) {
    echo "<script>
                        alert('yang anda upload bukan gambar!');
                </script>";
    return false;
  }
  http: //localhost/myPHP/php11/img/64a9015b85424.jpg
  // cek jika ukurannya terlalu besar
  if ($ukuranFile > 1000000) {
    echo "<script>
                        alert('ukuran gambar terlalu besar!');
                </script>";
    return false;
  }
  $namaFileBaru = uniqid();
  $namaFileBaru .= '.';
  $namaFileBaru .= $ekstensiGambar;

  move_uploaded_file($tmpName, 'img/' . $namaFileBaru);

  return $namaFileBaru;
}
