<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      DATA MULTI BARANG
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
            <?php require_once 'kantong_belanja.php'; ?>
          </div>
          <div class="box-body table-responsive">
            <table id="buku" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>NO</th>
                  <th>ID BUKU</th>
                  <th>JUDUL BUKU</th>
                  <th>HARGA</th>
                  <th>PEMBELIAN</th>
                  <th>AKSI</th>
                </tr>
              </thead>
              <tbody>
                <?php
                include 'conf/conn.php';
                $no = 0;
                $query = mysqli_query($koneksi, "SELECT * FROM buku ORDER BY id_buku DESC");
                while ($row = mysqli_fetch_array($query)) {
                ?>
                  <tr>
                    <form method="POST" action="index.php?page=data_multiitem">
                      <input type="hidden" name="id" value="<?= $row['id_buku']; ?>"></input>
                      <td><?php echo $no = $no + 1; ?></td>
                      <td><?php echo $row['id_buku']; ?></td>
                      <td><?php echo $row['judul']; ?></td>
                      <td><?php echo $row['harga_jual']; ?></td>
                      <td>
                        <input class="form-control" type="number" name="pembelian" value="1" min="1" max="<?= $row['stok']; ?>">
                      </td>
                      <td>
                        <button class="btn btn-primary" type="submit" name="submit">
                          <i class="fa fa-shopping-cart"></i>
                        </button>
                      </td>
                  </tr>
                  </form>
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
  <!-- /.content-wrapper -->
</div>
<!-- Javascript Datatable -->
<script type="text/javascript">
  $(document).ready(function() {
    $('#buku').DataTable();
  });
</script>