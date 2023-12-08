<?php
include('../toko-buku/conf/conn.php');

$id = $_GET['id'];

$query = "SELECT * FROM buku WHERE id_buku = $id LIMIT 1";

$result = mysqli_query($koneksi, $query);

$row = mysqli_fetch_array($result);
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      UBAH BUKU
    </h1>
    <ol class="breadcrumb">
      <li><a href="index.php"><i class="fa fa-dashboard"></i> HOME</a></li>
      <li class="active">UBAH BUKU</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
          <!-- /.box-header -->
          <!-- form start -->
          <form method="post" action="pages/buku/update_buku_proses.php" enctype="multipart/form-data">
            <div class="box-body">
              <input type="hidden" name="id" value="<?php echo $row['id_buku']; ?>">
              <div class="form-group">
                <label>Judul</label>
                <input type="text" name="judul" class="form-control" placeholder="Judul" value="<?php echo $row['judul']; ?>" required>
              </div>
              <div class="form-group">
                <label>Nomor ISBN</label>
                <input type="text" name="noisbn" class="form-control" placeholder="Nomor ISBN" value="<?php echo $row['noisbn']; ?>" required>
              </div>
              <div class="form-group">
                <label>Penulis</label>
                <input type="text" name="penulis" class="form-control" placeholder="Penulis" value="<?php echo $row['penulis']; ?>" required>
              </div>
              <div class="form-group">
                <label>Penerbit</label>
                <input type="text" name="penerbit" class="form-control" placeholder="Penerbit" value="<?php echo $row['penerbit']; ?>" required>
              </div>
              <div class="form-group">
                <label>Tahun</label>
                <input type="text" name="tahun" class="form-control" placeholder="Tahun" value="<?php echo $row['tahun']; ?>" required>
              </div>
              <div class="form-group">
                <label>Stok</label>
                <input type="text" name="stok" class="form-control" placeholder="Stok" value="<?php echo $row['stok']; ?>" required>
              </div>
              <div class="form-group">
                <label>Harga Pokok</label>
                <input type="text" name="harga_pokok" class="form-control" placeholder="Harga Pokok" value="<?php echo $row['harga_pokok']; ?>" required>
              </div>
              <div class="form-group">
                <label>Harga Jual</label>
                <input type="text" name="harga_jual" class="form-control" placeholder="Harga Jual" value="<?php echo $row['harga_jual']; ?>" required>
              </div>
              <div class="form-group">
                <label>Gambar</label>
                <img src="../toko-buku/dist/img/<?php echo $row['gambar']; ?>" style="width: 120px;float: left;margin-bottom: 5px;">
                <input type="file" name="gambar">
              </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              <button type="submit" class="btn btn-primary" title="Simpan Data"><i class="glyphicon glyphicon-floppy-disk"></i> Simpan</button>
            </div>
          </form>
        </div>
        <!-- /.box -->
      </div>
    </div>
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<script type="text/javascript">
  function confirmEdit() {
    return confirm("Apakah Anda yakin ingin mengubah data buku?");
  }
</script>