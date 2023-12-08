<?php

include('../toko_buku/conf/conn.php');

$id = $_GET['id'];

$query = "SELECT * FROM pasok WHERE id_pasok = $id LIMIT 1";

$result = mysqli_query($koneksi, $query);

$row = mysqli_fetch_array($result);
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      UBAH PASOK
    </h1>
    <ol class="breadcrumb">
      <li><a href="index.php"><i class="fa fa-dashboard"></i> HOME</a></li>
      <li class="active">UBAH PASOK</li>
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
          <form role="form" method="post" action="pages/pasok/update_pasok_proses.php">
            <div class="box-body">
              <input type="hidden" name="id" value="<?php echo $id; ?>">
              <div class="form-group">
                <label for="distributor">Distributor</label>
                <select class="form-control" id="distributor" name="distributor">
                  <?php
                  $queryDistributor = mysqli_query($koneksi, "SELECT id_distributor, nama_distributor FROM distributor");
                  while ($distributorRow = mysqli_fetch_assoc($queryDistributor)) {
                    $selected = ($distributorRow['id_distributor'] == $row['id_distributor']) ? "selected" : "";
                    echo "<option value='" . $distributorRow['id_distributor'] . "' $selected>" . $distributorRow['nama_distributor'] . "</option>";
                  }
                  ?>
                </select>
              </div>
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
                <label>Jumlah</label>
                <input type="text" name="jumlah" class="form-control" placeholder="Jumlah" value="<?php echo $row['jumlah']; ?>" required>
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