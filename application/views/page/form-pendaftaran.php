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

        <div class="col-md-8 col-md-offset-1">
          <form id="data_pasien" action="<?php echo base_url('pendaftaran/daftar');?>" method="post" >
            <div class="box box-primary">
              <div class="box-header">
                <h3 class="box-title">Form Pendaftaran Pasien Baru</h3>
              </div>
              <div class="box-body">

                <!-- <div class="form-group">
                  <label>Alergi</label>
                  <input class="form-control" type="text" placeholder="Masukan Jenis Alergi" name="alergi">
                </div> -->

                <div class="form-group">
                  <label>No. RM</label>
                  <input class="form-control" type="text" value="<?php echo $rm; ?>" name="no_RM" readonly>
                </div>

                <div class="form-group">
                  <label>No. BPJS</label>
                  <input class="form-control" type="text" placeholder="Masukan Nomor BPJS" name="no_BPJS">
                </div>

                <div class="form-group">
                  <label>No. Telp</label>
                  <input class="form-control" type="text" placeholder="Masukan No Telphone" name="hp">
                </div>

                <!-- <div class="form-group">
                  <label>Prolanis</label>
                  <input class="form-control" type="text" placeholder="Masukan Prolanis" name="prolanis">
                </div> -->

                <div class="form-group">
                  <label>Nama Pasien</label>
                  <input class="form-control" type="text" placeholder="Nama Pasien" name="nama_pasien">
                </div>

                <div class="form-group">
                  <label>Jenis Kelamin</label>
                  <select class="form-control" name="jenis_kelamin" >
                    <option>Laki-laki</option>
                    <option>Perempuan</option>
                  </select>
                </div>

                <div class="form-group">
                  <label>Tanggal Lahir</label>

                  <div class="input-group date">
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                    <input type="text" class="form-control pull-right" id="datepicker" name="tanggal_lahir" autocomplete="off" >
                  </div>
                </div>

                <div class="form-inline">
                  <div class="row">
                    <!-- <div class="form-group col-xs-6">
                      <label>Umur</label> <br>
                      <input class="form-control" type="number" min="1" max="200" placeholder="Masukan Umur" name="umur" style="width:100%;">
                    </div> -->
                    <!-- <div class="form-group col-xs-12">
                      <label>Bin/Binti</label> <br>
                      <input class="form-control" type="text" placeholder="Bin/Binti" name="binti" style="width:100%;">
                    </div> -->
                  </div>
                </div>
                <br>

                <div class="form-inline">
                  <div class="row">
                    <div class="form-group col-xs-6">
                      <label>Pekerjaan</label> <br>
                      <input class="form-control" type="text" placeholder="Masukan Pekerjaan" name="pekerjaan" style="width:100%;">
                    </div>
                    <div class="form-group col-xs-6">
                      <label>Agama</label> <br>
                      <select class="form-control" style="width:100%;" name="agama" >
                        <option>Islam</option>
                        <option>Kristen</option>
                        <option>Khonghucu</option>
                        <option>Katholik</option>
                        <option>Budha</option>
                        <option>Hindu</option>
                        <option>Ateis</option>
                      </select>
                    </div>
                  </div>
                </div>
                <br>

                <div class="form-group">
                  <label>Provinsi</label>
                  <select class="form-control" value="" style="width:100%;" name="provinsi" id="provinsi" placeholder="provinsi" >
                    <!-- <option value="" disabled selected>Provinsi</option> -->
                  </select>
                </div>

                <div class="form-group">
                  <label>Kabupaten</label>
                  <select class="form-control" style="width:100%;" name="kabupaten" id="kabupaten" placeholder="kabupaten" >
                    <!-- <option value="" disabled selected>Kabupaten</option> -->
                  </select>
                </div>

                <div class="form-group">
                  <label>Kecamatan</label>
                  <input class="form-control" type="text" placeholder="Masukan Kec." name="kecamatan" style="width:100%;">
                </div>

                <div class="form-group">
                  <label>Desa/Kelurahan</label>
                  <input class="form-control" type="text" placeholder="Masukan Desa" name="desa" style="width:100%;">
                </div>

                <div class="form-inline">
                  <div class="row_s">
                    <div class="form-group">
                      <label>Dusun</label><br>
                    </div>
                    <div class="row_s">
                      <div class="col-xs-6">
                        <input class="form-control" type="text" placeholder="Masukan Dusun" name="dusun" style="width:100%;">
                      </div>
                      <div class="col-xs-3">
                        <input class="form-control" type="number" placeholder="RT" name="RT" style="width:100%;">
                      </div>
                      <div class="col-xs-3">
                        <input class="form-control" type="number" placeholder="RW" name="RW" style="width:100%;">
                      </div>
                    </div>
                  </div>
                </div>
                <br/><br /><br/>
                <div class="form-group">
                  <label>Pendidikan</label>
                  <select class="form-control" style="width:100%;" name="pendidikan" >
                    <option value="Sekolah Dasar (SD)">Sekolah Dasar (SD)</option>
                    <option value="Sekolah Menengah Pertama (SMP)">Sekolah Menengah Pertama (SMP)</option>
                    <option value="Sekolah Menengah Atas/Khusus (SMA/SMK)">Sekolah Menengah Atas/Khusus (SMA/SMK)</option>
                    <option value="D III">D III</option>
                    <option value="Strata 1 (S1)">Strata 1 (S1)</option>
                    <option value="Strata 2 (S2)">Strata 2 (S2)</option>
                    <option value="Strata 3 (S3)">Strata 3 (S3)</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Status Kawin</label>
                  <select class="form-control" style="width:100%;" name="kawin" >
                    <option value="Kawin">Kawin</option>
                    <option value="Belum Kawin">Belum Kawin</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Dokter Pemeriksa</label>
                  <select class="form-control" name="pemeriksa" >
                    <?php foreach ($dokter as $pemeriksa) {?>
                      <option value="<?php echo $pemeriksa->nama; ?>"><?php echo $pemeriksa->nama; ?> <span> - <?php echo $pemeriksa->spesialis; ?> </span> </option>
                    <?php } ?>
                  </select>
                </div>

                <div class="form-inline">
                  <!-- <div class="row_s"> -->
                    <!-- <div class="form-group">
                      <label>Alamat</label><br>
                      <br>
                      <div class="row_s">
                        <div class="col-xs-12">
                          <input class="form-control" type="text" placeholder="Masukan Dusun" name="dusun" style="width:100%;">
                        </div>
                        <br/>
                        <div class="col-xs-12">
                          <input class="form-control" type="number" placeholder="RT" name="RT" style="width:100%;">
                        </div>
                        <br/>
                        <div class="col-xs-12">
                          <input class="form-control" type="number" placeholder="RW" name="RW" style="width:100%;">
                        </div>
                        <br/>
                        <div class="col-xs-12">
                          <input class="form-control" type="text" placeholder="Masukan Desa" name="desa" style="width:100%;">
                        </div>
                        <br/>
                        <div class="col-xs-12">
                          <input class="form-control" type="text" placeholder="Masukan Kec." name="kecamatan" style="width:100%;">
                        </div>
                        <div class="col-xs-12"> -->
                          <!-- <input class="form-control" type="text" placeholder="Masukan Prov." name="provinsi" id="provinsi" style="width:100%;"> -->
                          <!-- <label>Provinsi</label> <br> -->
                          <!-- <select class="form-control" value="" style="width:100%;" name="provinsi" id="provinsi" placeholder="provinsi" > -->
                            <!-- <option value="" disabled selected>Provinsi</option> -->
                          <!-- </select> -->
                        <!-- </div>
                        <br/>
                        <div class="col-xs-12"> -->
                          <!-- <input class="form-control" type="text" placeholder="Masukan Kab." name="kabupaten" id="kabupaten" style="width:100%;"> -->
                          <!-- <select class="form-control" style="width:100%;" name="kabupaten" id="kabupaten" placeholder="kabupaten" > -->
                            <!-- <option value="" disabled selected>Kabupaten</option> -->
                          <!-- </select> -->
                        <!-- </div>
                        <br/>
                      </div>
                    </div> -->
                  <!-- </div> -->
                   <div class="dp-pr" style="width:100%;">
                    <div class="modls">
                      <div class="my-pg">
                        <div class="loader"></div>
                      </div>
                      <div class="list-city">
                        <div class="gms">
                          <a id="back" href="#"><b>Ganti Provinsi..</b></a>
                        </div>
                        <div class="myls-ct"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <br>
                <div class="text-center no-print">
                  <button type="submit" class="btn btn-primary" style="width: 30%;">Submit</button>
                  <span>
                    <a href="#" id="print_v" class="btn btn-info"><i class="fa fa-print"></i> Print</a>
                  </span>

                </div>
                <br>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
          </form>
        </div>

        <div class="col-md-3">

          <div class="info-box no-print" style="margin-bottom: 25px;">
            <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Nomor Antrian</span>
              <span class="info-box-number"> <?php echo $antrian;?></span>
              <input form="data_pasien" type="text" name="nomor_antrian" value="<?php  echo $antrian;?>" style="display:none" >
            </div>
          </div>

          <!-- <div class="wrp">
            <img src="<?php echo base_url('assets/');?>dist/img/logo.jpg" style="width: 100%; height: auto;" alt="User Image">
          </div> -->
        </div>
        <!-- /.col (right) -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>
