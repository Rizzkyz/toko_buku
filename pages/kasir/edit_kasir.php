<?php

include('../toko_buku/conf/conn.php');

$id = $_GET['id'];

$query = "SELECT * FROM kasir WHERE id_kasir = $id LIMIT 1";

$result = mysqli_query($koneksi, $query);

$row = mysqli_fetch_array($result);
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      UBAH KASIR
    </h1>
    <ol class="breadcrumb">
      <li><a href="index.php"><i class="fa fa-dashboard"></i> HOME</a></li>
      <li class="active">UBAH KASIR</li>
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
          <form role="form" method="post" action="pages/kasir/update_kasir_proses.php">
            <div class="box-body">
              <input type="hidden" name="id" value="<?php echo $row['id_kasir']; ?>">
              <div class="form-group">
                <label>Nama</label>
                <input type="text" name="nama" class="form-control" placeholder="Nama" value="<?php echo $row['nama']; ?>">
              </div>
              <div class="form-group">
                <label>alamat</label>
                <input type="text" name="alamat" class="form-control" placeholder="Alamat" value="<?php echo $row['alamat']; ?>">
              </div>
              <div class="form-group">
                <label>Telepon</label>
                <input type="text" name="telepon" class="form-control" placeholder="Telepon" value="<?php echo $row['telepon']; ?>">
              </div>
              <div class="form-group">
                <label>status</label>
                <input type="text" name="status" class="form-control" placeholder="Status" value=" <?php echo $row['status']; ?>">
              </div>
              <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control" placeholder="Username" value="<?php echo $row['username']; ?>">
              </div>
              <div class="form-group">
                <label>Password</label>
                <input type="text" name="password" class="form-control" placeholder="Password" value="<?php echo $row['password']; ?>">
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