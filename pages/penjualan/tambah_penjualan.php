<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      TAMBAH PENJUALAN
    </h1>
    <ol class="breadcrumb">
      <li><a href="index.php"><i class="fa fa-dashboard"></i> HOME</a></li>
      <li class="active">TAMBAH PENJUALAN</li>
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
          <form role="form" method="post" action="pages/penjualan/simpan_penjualan_proses.php">
            <div class="box-body">
              <div class="form-group">
                <label>Buku</label>
                <select class="form-control" name="buku" required>
                  <option value="">- Pilih -</option>
                  <?php
                  include "conf/conn.php";
                  $query = mysqli_query($koneksi, "SELECT * FROM buku") or die(mysqli_error($koneksi));
                  while ($row = mysqli_fetch_array($query)) {
                    echo '<option value="' . $row['id_buku'] . '">' . $row['judul'] . '</option>';
                  }
                  ?>
                </select>
              </div>
              <div class="form-group">
                <label>Kasir</label>
                <select class="form-control" name="kasir" required>
                  <option value="">- Pilih -</option>
                  <?php
                  include "conf/conn.php";
                  $query = mysqli_query($koneksi, "SELECT * FROM kasir") or die(mysqli_error($koneksi));
                  while ($row = mysqli_fetch_array($query)) {
                    echo '<option value="' . $row['id_kasir'] . '">' . $row['nama'] . '</option>';
                  }
                  ?>
                </select>
              </div>
              <div class="form-group">
                <label>Jumlah</label>
                <input type="text" name="jumlah" class="form-control" placeholder="Jumlah">
              </div>
              <div class="form-group">
                <label>Total</label>
                <input type="text" name="total" class="form-control" placeholder="Total">
              </div>
              <div class="form-group">
                <label for="tanggal">Tanggal</label>
                <input type="date" name="tanggal" class="form-control" placeholder="Tanggal">
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