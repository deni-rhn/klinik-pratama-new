<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header" style="margin-bottom: 20px;">
    <h1 class="text-center">
      Riwayat Pasien
    </h1>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">

        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Riwayat Medis dan Administrasi Pasien</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
              <table class="table table-striped">
                  <thead>
                      <tr>
                          <th>No</th>
                          <th>Tanggal</th>
                          <th>Pasien</th>
                          <th>Dokter</th>
                          <th>Administrasi</th>
                          <th>Obat</th>
                          <th>Jumlah</th>
                          <th>Administrasi</th>
                      </tr>
                  </thead>
                  <tbody>
                  <?php $i = 1;?>
                  <?php foreach ($obat as $data) {?>
                      <tr>
                          <td><?php echo $i;?></td>
                          <td><?php echo $data['waktu_daftar'] ?></td>
                          <td><?php echo $data['nama_pasien'] ?></td>
                          <td><?php echo $data['nama_dokter'] ?></td>
                          <td><?php echo $data['harga'] ?></td>
                          <td><?php echo $data['kode_obat'] ?></td>
                          <td><?php echo $data['jumlah'] ?></td>
                          <td><?php echo $data['harga_total'] ?></td>
                      </tr>
                  <?php $i += 1; } ?>
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
