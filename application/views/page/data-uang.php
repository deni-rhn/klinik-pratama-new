<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header" style="margin-bottom: 20px;">
    <h1 class="text-center">
      Data Laporan Keuangan
    </h1>
  </section>

  <!-- Main content -->
  <section class="content" id="uangLap">
    <div class="row">
      <div class="col-xs-12">

        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Laporan Penjualan Obat</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
              <table class="table table-striped">
                  <thead>
                      <tr>
                          <th>No</th>
                          <th>Tanggal</th>
                          <th>Kode Obat</th>
                          <th>Jumlah</th>
                          <th>Total</th>
                      </tr>
                  </thead>
                  <tbody>
                  <?php $i = 1;?>
                  <?php foreach ($uang['biaya_obat'] as $mon) { ?>
                      <tr>
                          <td><?php echo $i;?></td>
                          <td><?php echo $mon->waktu_daftar ?></td>
                          <td><?php echo $mon->kode_obat ?></td>
                          <td><?php echo $mon->jumlah ?></td>
                          <td><?php echo $mon->harga_total ?></td>
                      </tr>
                  <?php $i += 1; } ?>
                  </tbody>
              </table>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->

        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Laporan Keuangan Jasa Dokter</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
              <table class="table table-striped">
                  <thead>
                      <tr>
                          <th>No</th>
                          <th>Tanggal</th>
                          <th>Nama Dokter</th>
                          <th>Total</th>
                      </tr>
                  </thead>
                  <tbody>
                  <?php $i = 1;?>
                  <?php foreach ($uang['biaya_dokter'] as $dok) { ?>
                      <tr>
                          <td><?php echo $i;?></td>
                          <td><?php echo $dok->waktu_daftar ?></td>
                          <td><?php echo $dok->nama_dokter ?></td>
                          <td><?php echo $dok->harga ?></td>
                      </tr>
                  <?php $i += 1; } ?>
                  </tbody>
              </table>
          </div>
          <!-- /.box-body -->
        </div>

        <div class="box">
          <!-- /.box-header -->
          <div class="box-body">
            <a href="#" id="pringUang" class="btn btn-info no-print"><i class="fa fa-print"></i> Print</a>
            <div style="float:right;">
              <p style="font-weight:900;">Total Pendapatan : <span><h4 style="font-weight:900;"><?php echo $uang['total']; ?></h4></span></p>
            </div>
          </div>
        </div>


      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
