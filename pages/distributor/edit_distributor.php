<?php

include('../toko_buku/conf/conn.php');

$id = $_GET['id'];

$query = "SELECT * FROM distributor WHERE id_distributor = $id LIMIT 1";

$result = mysqli_query($koneksi, $query);

$row = mysqli_fetch_array($result);
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      UBAH DISTRIBUTOR
    </h1>
    <ol class="breadcrumb">
      <li><a href="index.php"><i class="fa fa-dashboard"></i> HOME</a></li>
      <li class="active">UBAH DISTRIBUTOR</li>
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
          <form role="form" method="post" action="pages/distributor/update_distributor_proses.php">
            <div class="box-body">
              <input type="hidden" name="id" value="<?php echo $row['id_distributor']; ?>">
              <div class="form-group">
                <label>Nama Distributor</label>
                <input type="text" name="nama_distributor" class="form-control" placeholder="Nim" value="<?php echo $row['nama_distributor']; ?>" required>
              </div>
              <div class="form-group">
                <label>Alamat</label>
                <input type="text" name="alamat" class="form-control" placeholder="Alamat" value="<?php echo $row['alamat']; ?>" required>
              </div>
              <div class="form-group">
                <label>Telepon</label>
                <input type="text" name="telepon" class="form-control" placeholder="Telepon" value="<?php echo $row['telepon']; ?>" required>
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