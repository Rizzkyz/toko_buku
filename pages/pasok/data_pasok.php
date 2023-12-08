<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      DATA PASOK
    </h1>
    <ol class="breadcrumb">
      <li><a href="index.php"><i class="fa fa-dashboard"></i> HOME</a></li>
      <li class="active">DATA PASOK</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box box-primary">
          <div class="box-header">
            <a href="index.php?page=tambah_pasok" class="btn btn-primary" role="button" title="Tambah Data"><i class="glyphicon glyphicon-plus"></i> Tambah</a>
          </div>
          <div class="box-body table-responsive">
            <table id="pasok" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>#</th>
                  <th>DISTRIBUTOR</th>
                  <th>BUKU</th>
                  <th>JUMLAH</th>
                  <th>TANGGAL</th>
                  <th>AKSI</th>
                </tr>
              </thead>
              <tbody>
                <?php
                include "../toko_buku/conf/conn.php";
                $no = 0;
                $query = mysqli_query($koneksi, "SELECT pasok.*, distributor.*, buku.* FROM pasok
                INNER JOIN distributor ON pasok.id_distributor = distributor.id_distributor
                INNER JOIN buku ON pasok.id_buku = buku.id_buku order by pasok.id_pasok DESc")
                  or die(mysqli_error($koneksi));
                while ($row = mysqli_fetch_array($query)) {
                ?>
                  <tr>
                    <td><?php echo $no = $no + 1; ?></td>
                    <td><?php echo $row['nama_distributor']; ?></td>
                    <td><?php echo $row['judul']; ?></td>
                    <td><?php echo $row['jumlah']; ?></td>
                    <td><?php echo $row['tanggal']; ?></td>
                    <td>
                      <a href="index.php?page=ubah_pasok&id=<?= $row['id_pasok']; ?>" class="btn btn-success" role="button" title="Ubah Data"><i class="glyphicon glyphicon-edit"></i></a>
                      <a href="javascript:void(0);" class="btn btn-danger" role="button" title="Hapus Data" onclick="hapusPasok(<?= $row['id_pasok']; ?>);"><i class="glyphicon glyphicon-trash"></i></a>
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
    $('#pasok').DataTable();
  });

  function hapusPasok(id) {
    if (confirm("Apakah Anda yakin ingin menghapus data ini?")) {
      window.location.href = "pages/pasok/hapus_pasok.php?id=" + id;
    }
  }
</script>