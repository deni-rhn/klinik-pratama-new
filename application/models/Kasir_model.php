<?php

class Kasir_model extends CI_Model {

    public function __construct(){
        $this->load->database();
    }

    public function getpasienkasir()
    {
        $mydt = array();
        $query = $this->db->get_where('pasien',array('status_antrian'=>1))->result();
        $i = 0;
        foreach($query as $d){
            $isar = array($i += 1,$d->Nama_pasien,'<a href="'. base_url('kasir/invoice/').$d->id.'"><button style="margin-bottom:5px;float:right;" type="button" class="btn btn-primary" >Cek Invoice</button></a>'.'<br><br>'.'<a href="'. base_url('kasir/invoice/').$d->id.'">');
            array_push($mydt,$isar);
        }

        echo json_encode($mydt);

    }


    public function get_invoice($id){
       $this->db->select(array('pasien.id','pasien.Nama_pasien','pasien.Dusun','pasien.Rt','pasien.Rw','pasien.Desa','pasien.Kecamatan','pasien.Kabupaten','pasien.Provinsi','pasien.No_hp'));
       $this->db->from('pasien');
       $this->db->where('pasien.id',$id);
       $this->db->where('waktu_daftar', date("Y-m-d"));
       $query = $this->db->get()->result();

       $data = array('id'=>$query[0]->id,'nama'=>$query[0]->Nama_pasien,'alamat'=> $query[0]->Dusun.', RT '.$query[0]->Rt.' RW '.$query[0]->Rw.' Desa '.$query[0]->Desa.' Kec.'.$query[0]->Kecamatan.' Kab. '.$query[0]->Kabupaten.' Prov.'.$query[0]->Provinsi,'hp'=>$query[0]->No_hp);
    //    $obat = array();
    //    $final = array();
    //    $total = 0;


    //     foreach($query as $key){
    //         if(!in_array($key->kode,$obat)){
    //             array_push($obat,$key->kode);
    //         }
    //     }

    //     foreach($obat as $obt){
    //         array_push($final,array( $obt => array( "qty" => 0,"harga" => "","nama_obat" => "" ) ) );
    //     }

    //     foreach($final as $kys => $ky){
    //         foreach($ky as $k => $y){
    //            foreach($query as $dt){
    //                if($dt->kode == $k ){
    //                    $text_r = str_replace("Rp.","",$dt->harga);
    //                    $text_f = str_replace(".","",$text_r);
    //                     //harga obat dijumlahkan
    //                    if($final[$kys][$k]['harga'] != "" ){
    //                     $final[$kys][$k]['harga'] += $text_f;
    //                    }else{
    //                     $final[$kys][$k]['harga'] = $text_f;
    //                    }
    //                    $final[$kys][$k]['nama_obat'] = $dt->nama_obat;
    //                    $final[$kys][$k]['qty'] += 1;
    //                }
    //            }
    //         }
    //     }


    //     // mengubah ke format rupiah
    //     foreach($final as $u){
    //         foreach($u as $f){
    //             $total += $f['harga'];
    //         }
    //     }

    //     foreach($final as $k => $harga){
    //         foreach($harga as $ky => $hrg){
    //             $hasil_rupiah = "Rp " . number_format($hrg['harga'],0,'','.');
    //             $final[$k][$ky]['harga'] = $hasil_rupiah;

    //         }
    //     }

    //     $total = "Rp " . number_format($total,0,'','.');
    //     $total_push = array("total"=>$total);
    //     array_push($data['obat'],$final);
    //     array_push($data,$total_push);

        //get data pasien
        $data['data_pasien'] = $this->db->get_where('data_pasien', array('id_pasien' => $id, 'status' => 1))->result();
        $data['biaya_obat'] = $this->db->get_where('biaya_obat', array('id_pasien' => $id, 'status' => 1))->result();
        $data['biaya_dokter'] = $this->db->get_where('biaya_dokter', array('id_pasien' => $id, 'status' => 1))->result();

        // menghitung total
        $nilai = 0;

        foreach ($data['biaya_obat'] as $obat){
            $removeRp = str_replace(".","",str_replace("Rp. ","",$obat->harga_total));
            $nilai = $nilai + $removeRp;
        }

        foreach ($data['biaya_dokter'] as $obat){
            $removeRp = str_replace(".","",str_replace("Rp. ","",$obat->harga));
            $nilai = $nilai + $removeRp;
        }

        $data['total'] = $total = "Rp " . number_format($nilai,0,'','.');
        return $data;

    }


    public function save_data(){
        $this->db->insert('pendapatan',$this->input->post('data'));
        $id_pasien = $this->input->post('data');
        $this->db->set('status_antrian',2);
        $this->db->where('id',$id_pasien['id_pasien']);
        $this->db->update('pasien');
        $this->db->set('status', 2);
        $this->db->where('id_pasien', $id_pasien['id_pasien']);
        $this->db->update('data_pasien');
        $this->db->set('status', 2);
        $this->db->where('id_pasien', $id_pasien['id_pasien']);
        $this->db->update('biaya_obat');
        $this->db->set('status', 2);
        $this->db->where('id_pasien', $id_pasien['id_pasien']);
        $this->db->update('biaya_dokter');
        echo 1;

    }

    public function total_pendapatan(){
        $this->db->select(array('pendapatan.id_pasien','pasien.Nama_pasien','pendapatan.total'));
        $this->db->from('pendapatan');
        $this->db->join('pasien','pasien.id = pendapatan.id_pasien');
        $this->db->where('status_antrian',2);
        $query = $this->db->get()->result();

        $data = array('data'=>$query);
        $total = 0;
        foreach($query as $q){
            $total +=  str_replace('.',"",str_replace('Rp',"",$q->total));
        }
        $data['total'] = "Rp " . number_format($total,0,'','.');


        return $data;

    }

    public function laporanUang()
    {
      $this->db->select(array('pasien.waktu_daftar', 'biaya_obat.*'));
      $this->db->from('biaya_obat');
      $this->db->join('pasien','pasien.id = biaya_obat.id_pasien');
      $data['biaya_obat'] = $this->db->get()->result();

      // $data['biaya_obat'] = $this->db->get('biaya_obat')->result();
      $this->db->select(array('pasien.waktu_daftar','biaya_dokter.*'));
      $this->db->from('biaya_dokter');
      $this->db->join('pasien','pasien.id = biaya_dokter.id_pasien');
      $data['biaya_dokter'] = $this->db->get()->result();

      // menghitung total
      $nilai = 0;

      foreach ($data['biaya_obat'] as $obat){
          $removeRp = str_replace(".","",str_replace("Rp. ","",$obat->harga_total));
          $nilai = $nilai + $removeRp;
      }

      foreach ($data['biaya_dokter'] as $obat){
          $removeRp = str_replace(".","",str_replace("Rp. ","",$obat->harga));
          $nilai = $nilai + $removeRp;
      }

      $data['total'] = $total = "Rp " . number_format($nilai,0,'','.');
      return $data;

    }


}
