<?php

include('../toko_buku/conf/conn.php');

$id = $_GET['id'];

$query = "SELECT * FROM penjualan WHERE id_penjualan = $id LIMIT 1";

$result = mysqli_query($koneksi, $query);

$row = mysqli_fetch_array($result);
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      UBAH PENJUALAN
    </h1>
    <ol class="breadcrumb">
      <li><a href="index.php"><i class="fa fa-dashboard"></i> HOME</a></li>
      <li class="active">UBAH PENJUALAN</li>
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
          <form role="form" method="post" action="pages/penjualan/update_penjualan_proses.php">
            <div class="box-body">
              <input type="hidden" name="id" value="<?php echo $id; ?>">
              <div class="form-group">
                <label for="buku">Buku</label>
                <select class="form-control" id="buku" name="buku">
                  <?php
                  $queryBuku = mysqli_query($koneksi, "SELECT id_buku, judul FROM buku");
                  while ($bukuRow = mysqli_fetch_assoc($queryBuku)) {
                    $selected = ($bukuRow['id_buku'] == $row['id_buku']) ? "selected" : "";
                    echo "<option value='" . $bukuRow['id_buku'] . "' $selected>" . $bukuRow['judul'] . "</option>";
                  }
                  ?>
                </select>
              </div>
              <div class="form-group">
                <label for="kasir">Kasir</label>
                <select class="form-control" id="kasir" name="kasir">
                  <?php
                  $queryKasir = mysqli_query($koneksi, "SELECT id_kasir, nama FROM kasir");
                  while ($kasirRow = mysqli_fetch_assoc($queryKasir)) {
                    $selected = ($kasirRow['id_kasir'] == $row['id_kasir']) ? "selected" : "";
                    echo "<option value='" . $kasirRow['id_kasir'] . "' $selected>" . $kasirRow['nama'] . "</option>";
                  }
                  ?>
                </select>
              </div>
              <div class="form-group">
                <label>Jumlah</label>
                <input type="text" name="jumlah" class="form-control" placeholder="Jumlah" value="<?php echo $row['jumlah']; ?>" required>
              </div>
              <div class="form-group">
                <label>Total</label>
                <input type="text" name="total" class="form-control" placeholder="Jumlah" value="<?php echo $row['total']; ?>" required>
              </div>
              <div class="form-group">
                <label>Tanggal</label>
                <input type="date" name="tanggal" class="form-control" placeholder="Jumlah" value="<?php echo $row['tanggal']; ?>" required>
              </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              <button type="submit" class="btn btn-primary" title="Simpan Data"> <i class="glyphicon glyphicon-floppy-disk"></i> Simpan</button>
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