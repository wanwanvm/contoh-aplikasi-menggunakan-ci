<?php
class M_aktiva extends CI_Model
{

    function get_all_aktiva()
    {
        $tahun = $this->session->userdata('tahun');
        // $q="SELECT * FROM projects WHERE Year(Date) = '$year' and Month(Date) = '$month'";
        $hsl = $this->db->query("SELECT * FROM tb_aktiva,tb_lvl5 where tb_aktiva.kdakun5=tb_lvl5.kdakun5 and year(tb_aktiva.tgltransaksi)='$tahun' ");
        return $hsl;
    }
    function get_kdakun5()
    {
        // $tahun = $this->session->userdata('tahun');
        $hsl = $this->db->query("SELECT * FROM tb_lvl1,tb_lvl2,tb_lvl3,tb_lvl4,tb_lvl5 WHERE tb_lvl1.kdakun1=tb_lvl2.kdakun1 and tb_lvl2.kdakun2=tb_lvl3.kdakun2 and tb_lvl3.kdakun3=tb_lvl4.kdakun3 and tb_lvl4.kdakun4=tb_lvl5.kdakun4 and tb_lvl1.kdakun1='1' ");
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
    function simpan_data($kdaktiva, $kdakun5, $nmaktiva, $nomaktiva, $nobukti, $tgltransaksi)
    {
        $kdadmin = $this->session->userdata('kdadmin');
        $tgl_a = date('Y-m-d', strtotime($tgltransaksi));
        // $tgl = date_to_en('$tgltransaksi');
        $hsl = $this->db->query("INSERT INTO tb_aktiva(kdaktiva, kdakun5, nmaktiva, kdadmin , nomaktiva, nobukti, tgltransaksi) VALUES ('$kdaktiva', '$kdakun5', '$nmaktiva','$kdadmin', '$nomaktiva', '$nobukti','$tgl_a')");
        return $hsl;
    }
    // Membuat kode
    public function kode()
    {
        $this->db->select('RIGHT(tb_aktiva.kdaktiva,2) as kdaktiva', FALSE);
        $this->db->order_by('kdaktiva', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get('tb_aktiva');  //cek dulu apakah ada sudah ada kode di tabel.    
        if ($query->num_rows() <> 0) {
            //cek kode jika telah tersedia    
            $data = $query->row();
            $kode = intval($data->kdaktiva) + 1;
        } else {
            $kode = 1;  //cek jika kode belum terdapat pada table
        }
        $tgl = date('dmY');
        $batas = str_pad($kode, 3, "0", STR_PAD_LEFT);
        $kodetampil = "AA" . "5" . $tgl . $batas;  //format kode
        return $kodetampil;
    }
}
