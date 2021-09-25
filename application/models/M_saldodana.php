<?php
class M_saldodana extends CI_Model
{

    function get_all_saldodana()
    {
        $tahun = $this->session->userdata('tahun');
        // $q="SELECT * FROM projects WHERE Year(Date) = '$year' and Month(Date) = '$month'";
        $hsl = $this->db->query("SELECT * FROM tb_saldo,tb_lvl5 where tb_saldo.idlvl5=tb_lvl5.idlvl5 and year(tb_saldo.tgltransaksi)='$tahun' ");
        return $hsl;
    }
    function get_kdakun5()
    {
        // $tahun = $this->session->userdata('tahun');
        $hsl = $this->db->query("SELECT * FROM tb_lvl1,tb_lvl2,tb_lvl3,tb_lvl4,tb_lvl5 WHERE tb_lvl1.idlvl1=tb_lvl2.idlvl1 
        and tb_lvl2.idlvl2=tb_lvl3.idlvl2 and tb_lvl3.idlvl3=tb_lvl4.idlvl3 and tb_lvl4.idlvl4=tb_lvl5.idlvl4 and tb_lvl1.idlvl1='3' ");
        return $hsl;
    }


    function get_program($idgrandp)
    {
        //  $tahun = $this->session->userdata('tahun');
        $hsl = $this->db->query("SELECT * FROM tb_program where idgrandp='$idgrandp' ");
        return $hsl->result();
    }
    function get_subprogram($idprogram)
    {
        //  $tahun = $this->session->userdata('tahun');
        $hsl = $this->db->query("SELECT * FROM tb_subprogram where idprogram='$idprogram' ");
        return $hsl->result();
    }
    function simpan_data($kdsaldo, $idlvl5, $nmsaldo, $nomsaldo, $nobukti, $tgltransaksi)
    {
        $kdadmin = $this->session->userdata('kdadmin');
        $tgl_a = date('Y-m-d', strtotime($tgltransaksi));
        // $tgl = date_to_en('$tgltransaksi');
        $hsl = $this->db->query("INSERT INTO tb_saldo(kdsaldo, idlvl5, nmsaldo, kdadmin , nomsaldo, nobukti, tgltransaksi) VALUES ('$kdsaldo', '$idlvl5', '$nmsaldo','$kdadmin', '$nomsaldo', '$nobukti','$tgl_a')");
        return $hsl;
    }
    // Membuat kode
    public function kode()
    {
        $this->db->select('RIGHT(tb_saldo.kdsaldo,3) as kdsaldo', FALSE);
        $this->db->order_by('kdsaldo', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get('tb_saldo');  //cek dulu apakah ada sudah ada kode di tabel.    
        if ($query->num_rows() <> 0) {
            //cek kode jika telah tersedia    
            $data = $query->row();
            $kode = intval($data->kdsaldo) + 1;
        } else {
            $kode = 1;  //cek jika kode belum terdapat pada table
        }
        $tgl = date('dmY');
        $batas = str_pad($kode, 4, "0", STR_PAD_LEFT);
        $kodetampil = "SD" . "5" . $tgl . $batas;  //format kode
        return $kodetampil;
    }
}
