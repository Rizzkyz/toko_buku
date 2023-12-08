<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      PEMILIK
    </h1>
    <ol class="breadcrumb">
      <li><a href="index.php"><i class="fa fa-dashboard"></i> HOME</a></li>
      <li class="active">DATA PEMILIK</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box box-primary">
          <div class="box-body table-responsive">
            <table id="distributor" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>#</th>
                  <th>KASIR</th>
                  <th>TOTAL</th>
                  <th>TANGGAL</th>
                  <th>AKSI</th>
                </tr>
              </thead>
              <tbody>

                <?php
                include "../toko_buku/conf/conn.php";
                $no = 0;
                $query = mysqli_query($koneksi, "SELECT penjualan.*, kasir.* FROM penjualan
                INNER JOIN kasir ON penjualan.id_kasir = kasir.id_kasir order by penjualan.id_penjualan DESc");
                while ($row = mysqli_fetch_array($query)) {
                ?>
                  <tr>
                    <td><?php echo $no = $no + 1; ?></td>
                    <td><?php echo $row['nama']; ?></td>
                    <td><?php echo $row['total']; ?></td>
                    <td><?php echo $row['tanggal']; ?></td>
                    <td>
                      <a href="index.php?page=detail&id=<?= $row['id_penjualan']; ?>" class="btn btn-primary" role="button" title="Ubah Data"><i class="glyphicon glyphicon-th-list"></i></a>
                      <!-- <a href="javascript:void(0);" class="btn btn-danger" role="button" title="Hapus Data" onclick="hapusDistributor(<?= $row['id_distributor']; ?>);"><i class="glyphicon glyphicon-trash"></i></a> -->
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
<!-- Javascript Datatable -->
<script type="text/javascript">
  $(document).ready(function() {
    $('#distributor').DataTable();
  });

  function hapusDistributor(id) {
    if (confirm("Apakah Anda yakin ingin menghapus data ini?")) {
      window.location.href = "pages/distributor/hapus_distributor.php?id=" + id;
    }
  }
</script>