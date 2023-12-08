<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      DATA BUKU
    </h1>
    <ol class="breadcrumb">
      <li><a href="index.php"><i class="fa fa-dashboard"></i> HOME</a></li>
      <li class="active">DATA BUKU</li>
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
          <form role="form" method="post" action="pages/buku/simpan_buku_proses.php">
            <div class="box-body">
              <div class="form-group">
                <label>Judul</label>
                <input type="text" name="judul" class="form-control" placeholder="Judul" required>
              </div>
              <div class="form-group">
                <label>NOISBN</label>
                <input type="text" name="noisbn" class="form-control" placeholder="NOISBN" required>
              </div>
              <div class="form-group">
                <label>Penulis</label>
                <input type="text" name="penulis" class="form-control" placeholder="Penulis" required>
              </div>
              <div class="form-group">
                <label>Penerbit</label>
                <input type="text" name="penerbit" class="form-control" placeholder="Penerbit" required>
              </div>
              <div class="form-group">
                <label>Tahun</label>
                <input type="text" name="tahun" class="form-control" placeholder="Tahun" required>
              </div>
              <div class="form-group">
                <label>Stok</label>
                <input type="text" name="stok" class="form-control" placeholder="Stok" required>
              </div>
              <div class="form-group">
                <label>Harga Pokok</label>
                <input type="text" name="harga_pokok" class="form-control" placeholder="Harga Pokok" required>
              </div>
              <div class="form-group">
                <label>Harga Jual</label>
                <input type="text" name="harga_jual" class="form-control" placeholder="Harga Jual" required>
              </div>
              <div class="form-group">
                <label>Gambar Buku</label>
                <input type="file" name="gambar">
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