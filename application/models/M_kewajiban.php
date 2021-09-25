<?php
class M_kewajiban extends CI_Model
{

    function get_all_kewajiban()
    {
        $tahun = $this->session->userdata('tahun');
        // $q="SELECT * FROM projects WHERE Year(Date) = '$year' and Month(Date) = '$month'";
        $hsl = $this->db->query("SELECT * FROM tb_kewajiban,tb_lvl5 where tb_kewajiban.idlvl5=tb_lvl5.idlvl5 and year(tb_kewajiban.tgltransaksi)='$tahun' ");
        return $hsl;
    }
    function get_kdakun5()
    {
        // $tahun = $this->session->userdata('tahun');
        $hsl = $this->db->query("SELECT * FROM tb_lvl1,tb_lvl2,tb_lvl3,tb_lvl4,tb_lvl5 WHERE tb_lvl1.idlvl1=tb_lvl2.idlvl1 and tb_lvl2.idlvl2=tb_lvl3.idlvl2 and tb_lvl3.idlvl3=tb_lvl4.idlvl3 and tb_lvl4.idlvl4=tb_lvl5.idlvl4 and tb_lvl1.idlvl1='2' ");
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
    function simpan_data($kdkewajiban, $idlvl5, $nmkewajiban, $nomkewajiban, $nobukti, $tgltransaksi)
    {
        $kdadmin = $this->session->userdata('kdadmin');
        $tgl_a = date('Y-m-d', strtotime($tgltransaksi));
        // $tgl = date_to_en('$tgltransaksi');
        $hsl = $this->db->query("INSERT INTO tb_kewajiban(kdkewajiban, idlvl5, nmkewajiban, kdadmin , nomkewajiban, nobukti, tgltransaksi) VALUES ('$kdkewajiban', '$idlvl5', '$nmkewajiban','$kdadmin', '$nomkewajiban', '$nobukti','$tgl_a')");
        return $hsl;
    }
    // Membuat kode
    public function kode()
    {
        $this->db->select('RIGHT(tb_kewajiban.kdkewajiban,3) as kdkewajiban', FALSE);
        $this->db->order_by('kdkewajiban', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get('tb_kewajiban');  //cek dulu apakah ada sudah ada kode di tabel.    
        if ($query->num_rows() <> 0) {
            //cek kode jika telah tersedia    
            $data = $query->row();
            $kode = intval($data->kdkewajiban) + 1;
        } else {
            $kode = 1;  //cek jika kode belum terdapat pada table
        }
        $tgl = date('dmY');
        $batas = str_pad($kode, 4, "0", STR_PAD_LEFT);
        $kodetampil = "KK" . "5" . $tgl . $batas;  //format kode
        return $kodetampil;
    }
}
