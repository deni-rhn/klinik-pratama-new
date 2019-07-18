<div class="modal fade" id="addModal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <form action="<?php echo base_url('/dokter/submitDokter'); ?>" method="post">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Modal Header</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Nama Dokter</label> <br>
                        <input class="form-control" type="text" placeholder="Masukan Nama" name="nama" style="width:100%;">
                    </div>
                    <div class="form-group">
                        <label>SIP Dokter</label> <br>
                        <input class="form-control" type="number" placeholder="SIP Dokter" name="sip" style="width:100%;">
                    </div>
                    <div class="form-group">
                        <label>Spesialis</label> <br>
                        <input class="form-control" type="text" placeholder="Spesialis" name="spesialis" style="width:100%;">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </form>
        </div>

    </div>
</div>

<div class="modal fade" id="dokterEdit" role="dialog">
    <div class="modal-dialog modal-lg">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title nameF">Form</h4>
            </div>
            <div class="modal-body">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>Nama Dokter</th>
                        <th>SIP Dokter</th>
                    </tr>
                    </thead>
                    <tbody class="edit" >
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>


<div class="modal fade" id="formRujukan" role="dialog">
    <div class="modal-dialog modal-lg">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title nameF">Rujukan</h4>
            </div>
            <div class="modal-body">
                <form id="rujukan_pasien" action="<?php echo base_url('rujukan/submitRujukan');?>" method="post" >
                    <div class="contain">
                        <div class="head-section text-center">
                            <h1 class="blt">KLINIK ALMUBAROK</h1>
                            <p class="ngaglik">Ngaglik, Ngeposari, Semanu, Gunugkidul, DIY</p>
                            <p class="bhn">Telp. 0877 3973 1439</p>
                            <p class="bhn">SURAT IJIN No. :
                              <span ><input type="text" class="form-control text-center" name="nomorRujukan" placeholder="Masukkan nomor rujukan"/></span></p>
                        </div>
                        <div class="content-section">
                            <h3 class="text-center">SURAT RUJUKAN</h3>
                            <div style="display: flex;">
                                <p class="blt hjk">Kepada yang terhormat : </p>
                                <span class="spd"><input class="blt k" name="yth" type="text" class="form-control" placeholder="........................................"></span>
                            </div>
                            <div style="display: flex;">
                                <p class="blt hlk">di : </p>
                                <span class="jui"><input class="blt" name="tempat" type="text" class="form-control" placeholder="........................................" style="border: 0 !important;"></span>
                            </div>
                            <div class="data-pasien">
                                <p class="blt">Dengan hormat,</p>
                                <p class="blt kio">Bersama ini kami kirimkan pasien,</p>
                                <table class="blt">
                                    <tr class="mb">
                                        <td width="50%">Nama :</td>
                                        <td width="50%"><input type="text" name="nama-pasien"></td>
                                    </tr>
                                    <tr>
                                        <td>Umur / Jenis Kelamin :</td>
                                        <td><input type="text" name="umur"> <span>
                                        <select name="kelamin">
                                            <option value="laki-laki">Laki-laki</option>
                                            <option value="perempuan">Perempuan</option>
                                        </select></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Alamat :</td>
                                        <td><textarea name="alamat" cols="30" rows="3"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td>Diagnosa :</td>
                                        <td>
                                            <textarea name="diagnosa" cols="30" rows="3"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Tindakan / Terapi Sementara :</td>
                                        <td>
                                            <textarea name="tindakan" cols="30" rows="3"></textarea>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Keterangan :</td>
                                        <td>
                                            <textarea name="keterangan" cols="30" rows="3"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Rumah Sakit Rujukan :</td>
                                        <td>
                                          <select name="rsRujukan">
                                              <option value="RSUD Wonosari">RSUD Wonosari</option>
                                              <option value="RS Umum Nur Rohmah">RS Umum Nur Rohmah</option>
                                              <option value="RS Umum Pelita Husada">RS Umum Pelita Husada</option>
                                              <option value="RS Bethesda Wonosari">RS Bethesda Wonosari</option>
                                              <option value="RS Panti Rahayu">RS Panti Rahayu</option>
                                              <option value="RS Umum PKU Muhammadiyah Wonosari">RS Umum PKU Muhammadiyah Wonosari</option>
                                              <option value="RS Bethesda">RS Bethesda</option>
                                              <option value="RS Umum Panti Rapih">RS Umum Panti Rapih</option>
                                              <option value="RSUP Dr. Sardito">RSUP Dr. Sardito</option>
                                              <option value="RS Mata Dr. Yap">RS Mata Dr. Yap</option>
                                          </select>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="permohonan blt">
                                <label class="cnt">Mohon konsultasi / penanganan lanjut / alih rawat
                                    <input type="radio" checked="checked" name="permohonan" value="Mohon konsultasi / penanganan lanjut / alih rawat">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="cnt">Mohon pemeriksaan Laboratorium / Rontgent
                                    <input type="radio" name="permohonan" value="Mohon pemeriksaan Laboratorium / Rontgent">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="tambahan blt">
                                <input class="kjl" type="text" name="catatan-tambahan" placeholder="..................................................................">
                            </div>
                            <div class="end blt">
                                <p>Demikian atas perhatian dan bantuannya kami ucapkan terimakasih.</p>
                            </div>
                            <div class="row blt">
                                <div class="col-md-6 catatan">
                                    <p class="blt">Catatan</p>
                                    <textarea name="catatan" cols="30" rows="5"></textarea>
                                </div>
                                <div class="col-md-6 ttd text-center">
                                    <span>Gunungkidul :</span> <span><input class="yui" type="date" name="validasi"></span>
                                    <p class="ghy">Dokter Pemeriksa</p>
                                    <span>dr.</span> <span>
<!--                                <select name="dokter" id="dokter">-->
                                        <!--                                    <option value="">dokter siapa</option>-->
                                        <!--                                </select>-->
                                <input type="text" name="dokter" placeholder="Dokter Pemeriksa">
                            </span>
                                    <br>
                                    <span>SIP.</span> <span><input type="text" name="sip-dokter"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center" style="margin-top: 20px;">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <span>
                          <a href="#" id="print_rujukan" class="btn btn-info"><i class="fa fa-print"></i> Print</a>
                        </span>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="detailRujukan" role="dialog">
    <div class="modal-dialog modal-lg">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title nameF">Form</h4>
            </div>
            <div class="modal-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Kelamin</th>
                            <th>Umur</th>
                            <th>Alamat</th>
                            <th>Diagnosa</th>
                            <th>Tindakan</th>
                            <th>Permohonan</th>
                            <th>Keterangan</th>
                            <th>RS Rujukan</th>
                            <th>Keterangan</th>
                            <th>Pemeriksa</th>
                        </tr>
                    </thead>
                    <tbody class="look" >

                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>

<!--Resep obat-->
<div class="modal fade" id="resepModal" role="dialog">
    <div class="modal-dialog modal-lg">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title nameF">Form</h4>
            </div>
            <div class="modal-body">
            <div class="form-group">
                <div class="daftar collapse" id="demo">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Kode</th>
                                <th>Nama</th>
                                <th>Harga</th>
                            </tr>
                        </thead>
                        <tbody id="allobt">

                        </tbody>
                    </table>
                </div>
                <button type="button" class="btn btn-success" data-toggle="collapse" data-target="#demo">Cek Kode Obat</button>
                <br>
                <br>
                 <div class="row">
                    <div class="col-md-6">
                        <label>Kode Obat</label>
                            <input class="form-control" type="text" placeholder="Kode Obat" name="kodeObt" id="kodeO">
                            <br>
                        <label>Jumlah Obat</label>
                            <input class="form-control" type="number" placeholder="Kode Obat" name="jumlahobat" id="jumlahobat">
                        <br>
                        <button type="button" class="btn btn-success save_k">add</button>
                    </div>
                    <div class="col-md-6">
                        <label>Doktor</label>
                        <select class="form-control" style="width:100%;" name="doktor" id="name_doktor" >
                        </select>
                        <br>
                        <label>Harga Dokter</label>
                            <input class="form-control" type="text" placeholder="Harga dokter" id="hargadokter">
                        <br>
                        <button type="button" class="btn btn-success" id="inidoktor" >add</button>
                    </div>
                 </div>
                </div>
                <hr>
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th class="text-center" >No</th>
                        <th class="text-center" >Kode Obat</th>
                        <th class="text-center" >Jumlah Obat</th>
                        <th class="text-center" >Total Obat</th>
                        <th class="text-center" >action</th>
                    </tr>
                    </thead>
                    <tbody class="mytb_ob" >
                    </tbody>
                </table>
                <hr>
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th class="text-center" >No</th>
                        <th class="text-center" >Nama Dokter</th>
                        <th class="text-center" >Harga</th>
                        <th class="text-center" >Action</th>
                    </tr>
                    </thead>
                    <tbody class="mytb_doktor" >
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button id="save_k" type="button" class="btn btn-success">Masukan Kekasir</button>
            </div>
        </div>

    </div>
</div>

<!-- edit -->
<div class="modal fade" id="editDoktr" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Edit</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Nama Dokter</label> <br>
                        <input id="namaD" class="form-control" type="text" placeholder="Masukan Nama" name="nama" style="width:100%;">
                    </div>
                    <div class="form-group">
                        <label>SIP Dokter</label> <br>
                        <input id="sipD" class="form-control" type="number" placeholder="SIP Dokter" name="sip" style="width:100%;">
                    </div>
                    <div class="form-group">
                        <label>Sepesialis</label> <br>
                        <input id="sepeD" class="form-control" type="number" placeholder="SIP Dokter" name="sepesial" style="width:100%;">
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-success" id="dokterEd" >Save Edit</button>
                    <button class="btn btn-warning" id="deleteEd" >Delete</button>
                </div>
        </div>

    </div>
</div>

<script>

    var DTB,idpsn,Dokterid;
    var totalObat = [];
    var alldokter = [];
    var doktorTbl = [];

    function modalDokter(id) {
        $('.edit').html("");
        $.post("<?php echo base_url('/dokter/dokterId')?>", {id: id})
            .done(function (data) {
                $.each(JSON.parse(data), function(l,k){
                    $('.edit').append(
                        `<tr>
                            <td>${k['nama']}</td>
                            <td>${k['sip']}</td>
                            <td>${k['spesialis']}</td>
                        </tr>`
                    );
                });
            });
        $('#dokterEdit').modal('show');
    }

    function editDokter(id) {
        $.post("<?php echo base_url('/dokter/dokterId')?>", {id: id})
            .done(function (data) {
                var d = JSON.parse(data);
                Dokterid = d[0].id;
                $("#namaD").val(d[0].nama);
                $("#sipD").val(d[0].sip);
                $("#sepeD").val(d[0].sepesialis)
            });
        $('#editDoktr').modal('show');
    }


    $('#dokterEd').click(function(){
        var ed = {id:Dokterid,nama:$("#namaD").val(),sip:$("#sipD").val(),spesialis: $("#sepeD").val()}
        console.log(ed);
        $.post("<?php echo base_url('/dokter/edit')?>", ed)
            .done(function (data) {
              console.log(data);
                window.location.replace("<?php echo base_url("/dokter/listed");?>");
        });
    });

    $('#deleteEd').click(function(){
        $.post("<?php echo base_url('/dokter/delete')?>", {id: Dokterid})
            .done(function (data) {
                window.location.replace("<?php echo base_url("/dokter/listed");?>");
        });
    });

    function riwayatP(id){
      console.log(id);
      $.post( "<?php echo base_url('/datapasien/obat_pasien');?>", { id: id})
      .done(function( data ) {
        console.log(data);
        $('#obatPas').modal('show');
      });
    }

    function doktor_tbl(dt){
        $('.mytb_doktor').html("");
        $i = 1;
        $.each(dt,function(k,v){
                    $('.mytb_doktor').append(
                        `<tr>
                            <td>${$i}</td>
                            <td>${v['nama']}</td>
                            <td>${v['harga']}</td>
                            <td class="text-center" ><a class="btn btn-danger" onclick="doktordel(${v['key']});return false;">Delete</a></td>
                        </tr>`
                    );
                    $i++;
        });
    }

    function doktordel(del_id){
        updt = [];
        $.each(doktorTbl,function(k,v){
            if(del_id != v.key){
                updt.push(doktorTbl[k]);
            }
        });
        doktorTbl = updt;
        doktor_tbl(doktorTbl);
    }


    $('#inidoktor').click(function(){
        var doktorid = $("#name_doktor").val();
        var hargadoktor = $("#hargadokter").val();
        $.each(alldokter,function(k,v){
            if(v.id == doktorid){
                if(doktorTbl.length == 0){
                    var arr = {key:1,id:v.id,nama:v.nama,harga:hargadoktor};
                    doktorTbl.push(arr);
                }else{
                    var arr = {key:doktorTbl[doktorTbl.length-1].key+1,id:v.id,nama:v.nama,harga:hargadoktor};
                    doktorTbl.push(arr);
                }
            }
        });
        $("#hargadokter").val("");
        doktor_tbl(doktorTbl);
    });


    $(document).ready(function(){

        $.get( "<?php echo base_url('dokter/getDokter')?>", function( data ) {
            $('#tblDokter').DataTable( {
                data: JSON.parse(data),
                columns: [
                    { title: "Nama Dokter" },
                    { title: "SIP Dokter" },
                    { title: "Spesialis" },
                    { title: "action" }
                ],

            });
        });

        $.get( "<?php echo base_url('dokter/dokterselect')?>", function( data ) {
            alldokter = JSON.parse(data);
            $.each(JSON.parse(data),function(k,v){
                $('#name_doktor').append(`<option value="${v.id}" >${v.nama}</option>`);
            });
        });

    });

    function modalAdd()
    {
        $('#addModal').modal('show');
    }

    function rujukanAdd()
    {
        $('#formRujukan').modal('show');
    }

    $(document).ready(function(){

        $.get( "<?php echo base_url('rujukan/allRujukan')?>", function( data ) {
            $('#tblRujukan').DataTable( {
                data: JSON.parse(data),
                columns: [
                    { title: "No" },
                    { title: "Nama" },
                    { title: "Jenis Kelamin" },
                    { title: "Umur" },
                    { title: "Alamat" },
                    { title: "Diagnosa" },
                    { title: "Tindakan" },
                    { title: "action" }
                ],

            });


        });

        $.get( "<?php echo base_url('kasir/kasirdata')?>", function( data ) {
            $('#iskasir').DataTable( {
                data: JSON.parse(data),
                columns: [
                    { title: "No" },
                    { title: "Nama" },
                    { title: "action" }
                ],

            });

        });
    });

    function detail(id) {
        $('.look').html("");
        $.post("<?php echo base_url('/rujukan/rujukanById')?>", {id: id})
            .done(function (data) {
                $.each(JSON.parse(data), function(l,k){
                    $('.look').append(
                        `<tr>
                            <td>${k['nama']}</td>
                            <td>${k['jenis_kelamin']}</td>
                            <td>${k['umur']}</td>
                            <td>${k['alamat']}</td>
                            <td>${k['diagnosa']}</td>
                            <td>${k['tindakan']}</td>
                            <td>${k['permohonan']}</td>
                            <td>${k['tambahan']}</td>
                            <td>${k['rsRujukan']}</td>
                            <td>${k['keterangan']}</td>
                            <td>${k['dokter_pemeriksa']}</td>
                        </tr>`
                    );
                });
            });
        $('#detailRujukan').modal('show');
    }


    function _tbl(dt){
        $('.mytb_ob').html("");
        $i = 1;
        $.each(dt,function(k,v){
                    // console.log(v['kode_obat']);
                    $('.mytb_ob').append(
                        `<tr>
                            <td>${$i}</td>
                            <td>${v['kodeObat']}</td>
                            <td>${v['jumlahKapsul']}</td>
                            <td>${v['total']}</td>
                            <td class="text-center" ><a class="btn btn-danger" onclick="del_obt(${v['id']});return false;">Delete</a></td>
                        </tr>`
                    );
                    $i++;
        });
    }

    // delete
    function del_obt(del_id){
        updt = [];
        $.each(totalObat,function(k,v){
            if(del_id != v.id){
                updt.push(totalObat[k]);
            }
        });
        totalObat = updt;
        _tbl(totalObat);
    }

    function resepObat(id) {
        totalObat = [];
        doktorTbl = [];
        $('.mytb_ob').html("");
        $('.mytb_doktor').html("");
        $('#allobt').html("");
        $.get( "<?php echo base_url('kodeobat/get')?>", function( data ) {
            var parse = JSON.parse(data);
            $.each(parse,function(k,v){
                    $('#allobt').append(
                        `<tr>
                            <td>${v[1]}</td>
                            <td>${v[2]}</td>
                            <td>${v[3]}</td>
                        </tr>`
                    );
            });
        });

        $.post("<?php echo base_url('datapasien/get_invoice')?>", {id_p: id})
            .done(function (data) {
                DTB = JSON.parse(data);
                $i = 1;
                $.each(JSON.parse(data),function(k,v){
                    // console.log(v['kode_obat']);
                    $('.mytb_ob').append(
                        `<tr>
                            <td>${$i}</td>
                            <td>${v['kode_obat']}</td>
                            <td>${v['harga']}</td>
                        </tr>`
                    );
                    $i++;
                });
            });

        $('#resepModal').modal('show');

        $(".save_k").click(function(){
        if($("#kodeO").val() != ""){
            var isObt = [];
            $.get( "<?php echo base_url('kodeobat/get')?>", function( data ) {
                var parse = JSON.parse(data);
                $.each(parse,function(k,v){
                    var replaceRp = v[3].replace("Rp. ","");
                    var isNumber = parseInt(replaceRp.replace(".",""));
                    DTB.push({nama:v[1],harga:isNumber});
                });
                var kapsul = $("#jumlahobat").val();
                $.each(DTB,function(k,v){
                    if(v.nama == $("#kodeO").val()){
                        var duit = kapsul * v.harga;
                        var	number_string = duit.toString(),
                            sisa 	= number_string.length % 3,
                            rupiah 	= number_string.substr(0, sisa),
                            ribuan 	= number_string.substr(sisa).match(/\d{3}/g);
                        if (ribuan) {
                            separator = sisa ? '.' : '';
                            rupiah += separator + ribuan.join('.');
                        }
                        if(totalObat.length == 0){
                            totalObat.push({id:1,kodeObat:$("#kodeO").val(),jumlahKapsul:kapsul,total:"Rp. " + rupiah.toString()});
                        }else{
                            totalObat.push({id:totalObat[totalObat.length-1].id+1,kodeObat:$("#kodeO").val(),jumlahKapsul:kapsul,total:"Rp. " + rupiah.toString()});
                        }
                        $("#kodeO").val("");
                        $("#jumlahobat").val("");
                    }
                });
                _tbl(totalObat);
                DTB = [];
            });
        }
        // $("#kodeO").val("");
        });
        idpsn = id;
    }

    //lihat kode obat
    $('#kodeS').click(function(){
        $('.daftar').hide();
    });

    $("#save_k").click(function(){
        if(totalObat.length > 0 && doktorTbl.length > 0 ){
        $.post("<?php echo base_url('datapasien/change_status_antrian')?>", {id: idpsn,obatDibeli:totalObat,doktor:doktorTbl})
            .done(function (data) {
                if(data == "eror"){
                    alert("data kode obat anda ada yang salah");
                    window.location.replace("<?php echo base_url("/datapasien/antrian");?>");
                }else{
                    window.location.replace("<?php echo base_url("/kasir");?>");
                }
            });
        }else{
            alert("harap kode obat dan biaya dokter diisi");
            console.log(doktorTbl);
        }
    });

    $('#print_rujukan').click(function(){
       var printContents = document.getElementById('formRujukan').innerHTML;
       var originalContents = document.body.innerHTML;
       document.body.innerHTML = printContents;
       window.print();
       document.body.innerHTML = originalContents;
    });

        // convert rupiah
        var rupiah = document.getElementById('hargadokter');
		rupiah.addEventListener('keyup', function(e){
			rupiah.value = formatRupiah(this.value, 'Rp. ');
		});

		/* formatRupiah */
		function formatRupiah(angka, prefix){
			var number_string = angka.replace(/[^,\d]/g, '').toString(),
			split   		= number_string.split(','),
			sisa     		= split[0].length % 3,
			rupiah     		= split[0].substr(0, sisa),
			ribuan     		= split[0].substr(sisa).match(/\d{3}/gi);

			if(ribuan){
				separator = sisa ? '.' : '';
				rupiah += separator + ribuan.join('.');
			}

			rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
			return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
		}

    $('#pringUang').click(function(){
       var printContents = document.getElementById('uangLap').innerHTML;
       var originalContents = document.body.innerHTML;
       document.body.innerHTML = printContents;
       window.print();
       document.body.innerHTML = originalContents;
    });

    $('#pringMedis').click(function(){
       var printContents = document.getElementById('medPrint').innerHTML;
       var originalContents = document.body.innerHTML;
       document.body.innerHTML = printContents;
       window.print();
       document.body.innerHTML = originalContents;
    });

    $('#pringPas').click(function(){
       var printContents = document.getElementById('pasienPrint').innerHTML;
       var originalContents = document.body.innerHTML;
       document.body.innerHTML = printContents;
       window.print();
       document.body.innerHTML = originalContents;
    });


</script>
