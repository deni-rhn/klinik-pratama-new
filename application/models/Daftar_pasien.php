<?php

class Daftar_pasien extends CI_Model {

    public function __construct(){
        $this->load->database();
    }


    public function daftarkan(){
        // set time zone
        date_default_timezone_set("Asia/Jakarta");
        $bdate = date("Y-m-d",strtotime($this->input->post('tanggal_lahir')));
        $age = date_diff(date_create($bdate), date_create('now'));
        if($age->y > 0){
            $age = $age->y ." tahun";
        }else{
            $age = $age->m ." bulan" ;
        }
        $data_pasien = array(
                                // 'alergi'            => $this->input->post('alergi'),
                                'No_Rm'             => $this->input->post('no_RM'),
                                'No_BPJS'           => $this->input->post('no_BPJS'),
                                'No_KTP'            => $this->input->post('no_KTP'),
                                'No_HP'             => $this->input->post('hp'),
                                // 'prolanis'          => $this->input->post('prolanis'),
                                'Nama_pasien'       => $this->input->post('nama_pasien'),
                                'Jenis_kelamin'     => $this->input->post('jenis_kelamin'),
                                'Tanggal_lahir'     => date("Y-m-d",strtotime($this->input->post('tanggal_lahir'))),
                                'umur'              => $age,
                                // 'Bin_binti'         => $this->input->post('binti'),
                                'Pekerjaan'         => $this->input->post('pekerjaan'),
                                'Agama'             => $this->input->post('agama'),
                                'Dusun'             => $this->input->post('dusun'),
                                'Rt'                => $this->input->post('RT'),
                                'Rw'                => $this->input->post('RW'),
                                'Desa'              => $this->input->post('desa'),
                                'Kecamatan'         => $this->input->post('kecamatan'),
                                'Kabupaten'         => $this->input->post('kabupaten'),
                                'Provinsi'          => $this->input->post('provinsi'),
                                'status_antrian'    => 0,
                                'no_antrian'        => $this->input->post('nomor_antrian'),
                                'waktu_daftar'      => date("Y-m-d H:i:s"),
                                'pemeriksa'         => $this->input->post('pemeriksa'),
                                'pendidikan'        => $this->input->post('pendidikan'),
                                'kawin'             => $this->input->post('kawin')
                            );
        $this->db->insert('pasien',$data_pasien);
        redirect(base_url('pendaftaran/pasien'));
        return $data_pasien;
    }


    public function get_nomor_antrian(){
        $this->db->order_by('waktu_daftar','ASC');
        $query = $this->db->get_where('pasien', array('status_antrian' => 0));
        $antrian = $query->result();
        if(count($antrian) == 0){
            $antrian = 1;
        }else {
            $antrian = $antrian[count($antrian)-1]->no_antrian + 1;
        }
        return $antrian;
    }


    public function get_data_antrian(){
        $this->db->order_by('no_antrian','ASC');
        $query = $this->db->get_where('pasien', array('status_antrian' => 0));
        $mydt = array();

        foreach ($query->result() as $antri ) {
            $mypasien = array(  $antri->no_antrian,
                                $antri->No_Rm,
                                $antri->Nama_pasien,
                                $antri->Jenis_kelamin,
                                $antri->umur .' '.'tahun' ,
                                $antri->alergi,
                                $antri->Dusun.', RT '.$antri->Rt.' RW '.$antri->Rw.' Desa '.$antri->Desa.' Kec.'.$antri->Kecamatan.' Kab. '.$antri->Kabupaten.' Prov.'.$antri->Provinsi ,
                                $antri->No_HP,
                                $antri->Pekerjaan,
                                $antri->Agama,
                                '<button style="margin-bottom:5px;width:100%;" type="button" class="btn btn-primary" onclick="openmodal('.$antri->id.')" >Edit</button><span>
                                <buttton type="button" class="btn btn-success" onclick="resepObat('.$antri->id.')">Resep Obat</buttton> </span>'
                            );
            array_push($mydt,$mypasien);
        }

        echo json_encode($mydt);

    }

    public function user_select(){
        $id = $this->input->post('id');
        $this->db->select('pasien.Nama_pasien');
        $this->db->from('pasien');
        $this->db->where('pasien.id',$id);
        $query = $this->db->get()->result();

        $data_p = $this->db->get_where('data_pasien', array('id_pasien' => $id));

        $dt_tbl = array();
        $mytbl = array( 'id'            => $id,
                        'nama'          => $query[0]->Nama_pasien,
                        'data_pasien'   => array()
                    );

        foreach($data_p->result() as $pasien ){
            $arr = array( 'id' => $pasien->id,
                          'tanggal' => $pasien->tanggal,
                          'subyektif_objectif' => $pasien->subyektif_objectif,
                          'pemeriksaan' => $pasien->Pemeriksaan_penunjang,
                          'assesment' => $pasien->assesment,
                          'planing'=>$pasien->planning,
                          'paraf'=>$pasien->paraf );
            array_push($mytbl['data_pasien'],$arr);
        }


        array_push($dt_tbl,$mytbl);

        echo json_encode($dt_tbl);

    }

    public function save_data(){
        $data = $this->input->post('dataPasien');
        foreach($data[0]['data_pasien'] as $dt){
             if (array_key_exists("status",$dt)){
                if($dt['status'] == "1"){
                    $arr = array(
                        'id_pasien'             => $this->input->post('id'),
                        'tanggal'               => $dt['tanggal'],
                        'subyektif_objectif'    => $dt['subyektif_objectif'],
                        'assesment'             => $dt['assesment'],
                        'Pemeriksaan_penunjang' => $dt['pemeriksaan'],
                        'planning'              => $dt['planing'],
                        'paraf'                 => $dt['paraf'],
                        'status'                => 1
                    );

                    $this->db->insert('data_pasien',$arr);
                }else if($dt['status'] == "2"){
                    $this->db->delete('data_pasien', array('id' => $dt['id']));
                }

             }

        }

        echo json_encode($data);
    }

    public function pasien_all(){
        $query = $this->db->get('pasien');

        $arr = array();
        foreach($query->result() as $dta  ){
            $tb = array(
                            '',
                            $dta->No_Rm,
                            $dta->Nama_pasien,
                            $dta->Jenis_kelamin,
                            $dta->umur,
                            $dta->alergi,
                            $dta->Dusun.', RT '.$dta->Rt.' RW '.$dta->Rw.' Desa '.$dta->Desa.' Kec.'.$dta->Kecamatan.' Kab. '.$dta->Kabupaten.' Prov.'.$dta->Provinsi ,
                            $dta->No_HP,
                            $dta->Pekerjaan,
                            '<a  class="btn btn-danger" onclick="editoption('.$dta->id.');return false;" >edit</a>'.'<br>' .
                            '<a style="margin-top:5px;" class="btn btn-warning" onclick="cetakKib('.$dta->id.');return false;" >Cetak KIB</a>'.'<br>' .
                            '<a style="margin-top:5px;" class="btn btn-info" onclick="showmore('.$dta->id.');return false;" >Info Lebih</a>'.'<br>' 

                         );
            array_push($arr,$tb);
        }

        echo json_encode($arr);

    }

    public function one_user(){
        $id = $this->input->post('id');
        $query = $this->db->get_where('pasien', array('id' => $id ));
        echo json_encode($query->result());
    }


    public function delete_pasien(){
        $id = $this->input->post('id');
        $query = $this->db->delete('pasien',array('id'=>$id));
        $todl = $this->db->delete('data_pasien',array('id_pasien'=>$id));
        echo $id;
    }

    public function getRm()
    {
        $id = $this->input->post('id');
        $query = $this->db->get_where('pasien', array('id' => $id ));
        $getRow = $query->row();
        return $getRow->No_RM;
    }

    public function update(){
        $id = $this->input->post('id');
        $arr = $this->input->post('d_pasien');
        $bdate = date("Y-m-d",strtotime($arr['Tanggal_lahir']));
        $age = date_diff(date_create($bdate), date_create('now'));
        if($age->y > 0){
            $age = $age->y ." tahun";
        }else{
            $age = $age->m ." bulan" ;
        }
        $arr['umur'] = $age;
        $this->db->where('id',$id);
        $this->db->update('pasien', $arr);

        echo "berhasil";
    }

    public function status_antrian(){
        $id = $this->input->post('id');
        $biaya_obat = $this->input->post('obatDibeli');
        $biaya_dokter = $this->input->post('doktor');

        foreach ($biaya_obat as $bo) {
            $obat = array( 'id_pasien' => $id,'kode_obat' => $bo['kodeObat'] ,'jumlah' => $bo['jumlahKapsul'] ,'harga_total'=> $bo['total'], 'status' => 1);
            $this->db->insert('biaya_obat', $obat);
        }

        foreach ($biaya_dokter as $bd) {
            $dokter = array( 'id_pasien' => $id,'id_dokter' => $bd['id'],'harga'=>$bd['harga'],'nama_dokter'=>$bd['nama'], 'status' => 1);
            $this->db->insert('biaya_dokter', $dokter);
        }

        $antrian_status = array( 'status_antrian' => 1 );
        $this->db->where('id',$id);
        $this->db->update('pasien', $antrian_status);

        echo "berhasil";

        // echo json_encode($biaya_dokter);
        // $arr = array('status_antrian'=>1);

        // // $cek_n = $this->db->get("kode_obat")->result();
        // // $cek_o = array();
        // // foreach($cek_n as $cek){
        // //     array_push($cek_o,$cek->kode);
        // // }

        // // $status = array();
        // // foreach($data as $dt){
        // //     if($dt['status'] == 0){
        // //         if(in_array($dt['kode_obat'],$cek_o)){
        // //             array_push($status,1);
        // //         }else{
        // //             array_push($status,0);
        // //         }
        // //     }
        // // }

        // // if(in_array(0,$status)){
        // //     echo "eror";
        // // }else{
        // //     $this->db->where('id',$id);
        // //     $this->db->update('pasien', $arr);
        // //     foreach($data as $dt){
        // //         if($dt['status'] == 0){
        // //             $newup = array('id_pasien' => $dt['id_pasien'],'kode_obat' => $dt['kode_obat'],'status'=> 1);
        // //             $this->db->insert('invoice',$newup);
        // //         }
        // //     }
        // //     echo "benar";
        // // }

    }

    public function laopranPasien($filter1, $filter2)
    {
      $query = $this->db->query("SELECT * FROM pasien WHERE waktu_daftar BETWEEN '".$filter1."' AND '".$filter2."' ");
      return $query->result_array();

    }

    public function laporanMedis()
    {
      $query = $this->db->query(
        "SELECT p.id, dp.tanggal, p.nama_pasien, p.pemeriksa, dp.subyektif_objectif, dp.assesment, dp.Pemeriksaan_penunjang,
        dp.planning FROM pasien p
        INNER JOIN data_pasien dp ON dp.id_pasien = p.id"
      );

      return $query->result_array();
    }

    public function obatPasien($idPasien)
    {
      $query = $this->db->query(
        "SELECT p.id, p.nama_pasien, p.waktu_daftar, bo.kode_obat, bo.jumlah,
        bo.harga_total, bd.harga, bd.nama_dokter
        FROM pasien p INNER JOIN biaya_obat bo ON bo.id_pasien = p.id
        INNER JOIN biaya_dokter bd on bd.id_pasien = p.id
        WHERE p.id = '".$idPasien."'
        "
      );

      return $query->result_array();
    }

    public function laporanMedisRange($tgl1, $tgl2)
    {
      $query = $this->db->query(
        "SELECT p.nama_pasien, p.pemeriksa, dp.*, i.kode_obat, pdt.total from data_pasien dp
        inner join invoice i on i.id_pasien = dp.id_pasien
        inner join pasien p on p.id = dp.id_pasien
        inner join pendapatan pdt on pdt.id_pasien = dp.id_pasien
        where dp.tanggal BETWEEN '".$tgl1."' AND '".$tgl2."' "
      );

      return $query->result_array();
    }

    public function antrikanLagi($pasienId)
    {
      $today = date('Y-m-d');
      $minus = "SELECT DATEDIFF(DAY,  DATEADD(day, -1, $today), GETDATE())";
      $latest = $this->db->query(
        "SELECT max(no_antrian) + 1 as latest from pasien where waktu_daftar = '". $today ."' OR '". $minus ."' "
      );

      $getLatest = $latest->row()->latest;
      // $juml = $getLatest + 1
      // $add = $getLatest + 1;
      // return $getLatest;
      // $put = array( 'status_antrian' => 0,
      //               'no_antrian'     => $getLatest);
      // $this->db->where('id',$pasienId);
      // $this->db->update('pasien', $put);

      $update = $this->db->query(
        "UPDATE pasien SET status_antrian = 0, waktu_daftar = '". $today ."',
        no_antrian = '". $getLatest ."' where id = '". $pasienId ."' "
      );
      // redirect(base_url('datapasien/antrian'));

    }


}
