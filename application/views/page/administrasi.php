
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header" style="margin-bottom: 20px;">
      <h1 class="text-center">
        Administrasi Pasien
      </h1>
    </section>

    <!-- Main content -->
    <section class="invoice">
      <!-- title row -->
      <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header">
            <i class="fa fa-globe"></i> ALMUBAROK
            <!-- <small class="pull-right">Date: 6/02/2019</small> -->
          </h2>
        </div>
        <!-- /.col -->
      </div>
      <!-- info row -->
      <div class="row invoice-info">
        <div class="col-sm-4 invoice-col">
          From
          <address>
            <strong>ALMUBAROK</strong><br>
            Alamat<br>
            Phone: (804) 123-5432<br>
            Email: info@almubarok.com
          </address>
        </div>
        <!-- /.col -->
        <div class="col-sm-8 invoice-col">
          To
          <address>
            <strong><?php echo $invoice['nama'];?></strong><br>
            <?php echo $invoice['alamat'];?><br>
            Phone: <?php echo $invoice['hp'];?><br>
          </address>
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
          <!-- <b>Invoice #007612</b><br> -->
          <br>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      <!-- Table row -->
      <h4 class="text-center" >Data Pemerikasaan</h4>
      <hr>
      <div class="row">
        <div class="col-xs-12 table-responsive">
          <table class="table table-striped">
            <thead>
            <tr>
              <th>Tanggal</th>
              <th>Subyektif/Objektif</th>
              <th>Assesment</th>
              <th>Pemeriksaan Penunjang</th>
              <th>Planning</th>
              <th class="text-right" >Paraf</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach( $invoice['data_pasien'] as $dps ){?>
              <tr>
                <td><?php echo $dps->tanggal;?></td>
                <td><?php echo $dps->subyektif_objectif;?></td>
                <td><?php echo $dps->assesment;?></td>
                <td><?php echo $dps->Pemeriksaan_penunjang;?></td>
                <td><?php echo $dps->planning;?></td>
                <td class="text-right" ><?php echo $dps->paraf;?></td>
              </tr>
            <?php };?>
            </tbody>
          </table>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      <hr>
      <h4 class="text-center" >Biaya Obat</h4>
      <hr>
      <!-- Table row -->
      <div class="row">
        <div class="col-xs-12 table-responsive">
          <table class="table table-striped">
            <thead>
            <tr>
              <th>Qty</th>
              <th>Obat</th>
              <th class="text-right" >Subtotal</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach( $invoice['biaya_obat'] as $obt ){?>
              <tr>
                <td><?php echo $obt->jumlah;?></td>
                <td><?php echo $obt->kode_obat;?></td>
                <td class="text-right" ><?php echo $obt->harga_total;?></td>
              </tr>
            <?php };?>
            </tbody>
          </table>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      <hr>
      <h4 class="text-center" >Biaya Dokter</h4>
      <hr>
      <!-- Table row -->
      <div class="row">
        <div class="col-xs-12 table-responsive">
          <table class="table table-striped">
            <thead>
            <tr>
              <th>No</th>
              <th>Nama Dokter</th>
              <th class="text-right" >Subtotal</th>
            </tr>
            </thead>
            <tbody>

            <?php $i = 1;  foreach( $invoice['biaya_dokter'] as $dktr ){?>
              <tr>
                <td><?php echo $i;?></td>
                <td><?php echo $dktr->nama_dokter;?></td>
                <td class="text-right" ><?php echo $dktr->harga;?></td>
              </tr>
            <?php $i++; };?>
            </tbody>
          </table>
        </div>
        <!-- /.col -->
      </div>
      <div class="row">
        <!-- accepted payments column -->
        <div class="col-xs-6">
          <!-- <h3 class="lead">LUNAS</h3> -->
        </div>
        <!-- /.col -->
        <div class="col-xs-6">
          <!-- <p class="lead">Pada Tanggal 8/02/2019</p> -->

          <div class="table-responsive">
            <table class="table">
              <tr class="text-right" >
                <th style="width:50%">Total:</th>
                <td><?php echo $invoice['total'];?></td>
              </tr>
            </table>
          </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->


      <!-- this row will not appear when printing -->
      <div class="row no-print">
        <div class="col-xs-12">
          <a href="#" id="print_v" class="btn btn-default"><i class="fa fa-print"></i> Print</a>
          <button id="save_in" style="margin-bottom:5px;float:right;" type="button" class="btn btn-primary" data-id="<?php echo $invoice['id'];?>" data-total="<?php echo $invoice['total'];?>" data-nama="<?php echo $invoice['nama'];?>" >Pasien Selesai</button>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->