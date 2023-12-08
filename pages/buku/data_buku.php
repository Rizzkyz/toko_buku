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
      <div class="col-xs-12">
        <div class="box box-primary">
          <div class="box-header">
            <a href="index.php?page=tambah_buku" class="btn btn-primary" role="button" title="Tambah Data"><i class="glyphicon glyphicon-plus"></i> Tambah</a>
            <a href="pages/report.php" class="btn btn-success" role="button" title="Print Data"><i class="glyphicon glyphicon-print"></i> Print</a>
          </div>
          <div class="box-body table-responsive">
            <table id="buku" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>#</th>
                  <th>JUDUL</th>
                  <th>NOISBN</th>
                  <th>PENULIS</th>
                  <th>PENERBIT</th>
                  <th>TAHUN</th>
                  <th>STOK</th>
                  <th>HARGA POKOK</th>
                  <th>HARGA JUAL</th>
                  <th>GAMBAR</th>
                  <th>AKSI</th>
                </tr>
              </thead>
              <tbody>

                <?php
                include "conf/conn.php";
                $no = 0;
                $query = mysqli_query($koneksi, "SELECT * FROM buku ORDER BY id_buku DESC")
                  or die(mysqli_error($koneksi));
                while ($row = mysqli_fetch_array($query)) {
                ?>

                  <tr>
                    <td><?php echo $no = $no + 1; ?></td>
                    <td><?php echo $row['judul']; ?></td>
                    <td><?php echo $row['noisbn']; ?></td>
                    <td><?php echo $row['penulis']; ?></td>
                    <td><?php echo $row['penerbit']; ?></td>
                    <td><?php echo $row['tahun']; ?></td>
                    <td><?php echo $row['stok']; ?></td>
                    <td><?php echo $row['harga_pokok']; ?></td>
                    <td><?php echo $row['harga_jual']; ?></td>
                    <td><img src="dist/img/<?= $row["gambar"]; ?>" width="100"></td>

                    <td>
                      <a href="index.php?page=ubah_buku&id=<?= $row['id_buku']; ?>" class="btn btn-success" role="button" title="Ubah Data"><i class="glyphicon glyphicon-edit"></i> Ubah</a>
                      <a href="pages/buku/hapus_buku.php?id=<?= $row['id_buku']; ?>" class="btn btn-danger" role="button" title="Hapus Data" onclick="return confirm('Apakah Anda yakin ingin menghapus data buku ini?')"><i class="glyphicon glyphicon-trash"></i> Hapus</a>
                    </td>
                  </tr>

                <?php } ?>

              </tbody>
            </table>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Javascript Datatable -->
<script type="text/javascript">
  $(document).ready(function() {
    $('#buku').DataTable();
  });

  function hapusdistributor(id) {
    if (confirm("Apakah Anda yakin ingin menghapus data ini?")) {
      window.location.href = "pages/buku/hapus_buku.php?id=" + id;
    }
  }
</script>