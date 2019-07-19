  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header" style="margin-bottom: 20px;">
      <h1 class="text-center">
        Form Pendaftaran Pasien
      </h1>
    </section>


    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- /.col (left) -->

        <div class="col-md-offset-1 col-md-8">
        <form  action="<?php echo base_url('kodeobat/kirimdata');?>" method="post" >
            <div class="box box-primary">
              <div class="box-header">
                <h3 class="box-title">Isi Dengan Lengkap Form Dibawah ini</h3>
              </div>
              <div class="box-body">

                <div class="form-group">
                  <label>Jenis Obat</label>
                  <input class="form-control" type="text" placeholder="Jenis Obat" name="kode">
                </div>

                <div class="form-group">
                  <label>Nama Obat</label>
                  <input class="form-control" type="text" placeholder="Masukan Nama Obat" name="nama_obat">
                </div>

                <div class="form-group">
                  <label>Harga Obat</label>
                  <input class="form-control" type="text" placeholder="Masukan Nama Obat" name="harga" id="rupiah">
                </div>

                <div class="form-group">
                  <label>Stok Obat</label>
                  <input class="form-control" type="text" placeholder="Masukan Stok Obat" name="stok" id="stok">
                </div>

                <div class="form-group">
                  <label>Status Persediaan</label>
                  <select class="form-control" name="status_persediaan" id="status_persediaan">
                    <option value="TERSEDIA">TERSEDIA</option>
                    <option value="KOSONG">KOSONG</option>
                  </select>
                </div>

                <br>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary" style="width: 30%;">Submit</button>
                </div>
                <br>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
          </form>
        </div>

        <!-- /.col (right) -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>
