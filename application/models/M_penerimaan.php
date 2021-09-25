<?php
class M_penerimaan extends CI_Model
{

    function get_all_penerimaan()
    {
        $tahun = $this->session->userdata('tahun');
        // $q="SELECT * FROM projects WHERE Year(Date) = '$year' and Month(Date) = '$month'";
        $hsl = $this->db->query("SELECT * FROM tb_penerimaan,tb_lvl5,tb_transaksi,tb_rekening where tb_penerimaan.idtrans=tb_transaksi.idtrans and tb_penerimaan.idrek=tb_rekening.idrek and tb_penerimaan.idlvl5=tb_lvl5.idlvl5 and year(tb_penerimaan.tgltransaksi)='$tahun' ");
        return $hsl;
    }
    function get_kdakun5()
    {
        // $tahun = $this->session->userdata('tahun');
        $hsl = $this->db->query("SELECT * FROM tb_lvl1,tb_lvl2,tb_lvl3,tb_lvl4,tb_lvl5 WHERE tb_lvl1.idlvl1=tb_lvl2.idlvl1 and tb_lvl2.idlvl2=tb_lvl3.idlvl2 and tb_lvl3.idlvl3=tb_lvl4.idlvl3 and tb_lvl4.idlvl4=tb_lvl5.idlvl4 and tb_lvl1.idlvl1='4' ");
        return $hsl;
    }
	  function get_idtrans()
    {
        // $tahun = $this->session->userdata('tahun');
        $hsl = $this->db->query("SELECT * FROM  tb_transaksi");
        return $hsl;
    }
  function get_idrek()
    {
        // $tahun = $this->session->userdata('tahun');
        $hsl = $this->db->query("SELECT * FROM  tb_rekening");
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
    function simpan_data($kdpenerimaan, $idlvl5, $nmpenerimaan, $nompenerimaan, $nobukti, $tgltransaksi,$idtrans,$idrek)
    {
        $kdadmin = $this->session->userdata('kdadmin');
        $tgl_a = date('Y-m-d', strtotime($tgltransaksi));
        // $tgl = date_to_en('$tgltransaksi');
        $hsl = $this->db->query("INSERT INTO tb_penerimaan(kdpenerimaan, idlvl5, nmpenerimaan, kdadmin , nompenerimaan, nobukti, tgltransaksi,idtrans,idrek) 
		VALUES ('$kdpenerimaan', '$idlvl5', '$nmpenerimaan','$kdadmin', '$nompenerimaan', '$nobukti','$tgl_a','$idtrans','$idrek')");
        return $hsl;
    }
    // Membuat kode
    public function kode()
    {
        $this->db->select('RIGHT(tb_penerimaan.kdpenerimaan,3) as kdpenerimaan', FALSE);
        $this->db->order_by('kdpenerimaan', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get('tb_penerimaan');  //cek dulu apakah ada sudah ada kode di tabel.    
        if ($query->num_rows() <> 0) {
            //cek kode jika telah tersedia    
            $data = $query->row();
            $kode = intval($data->kdpenerimaan) + 1;
        } else {
            $kode = 1;  //cek jika kode belum terdapat pada table
        }
        $tgl = date('dmY');
        $batas = str_pad($kode, 4, "0", STR_PAD_LEFT);
        $kodetampil = "PP" . "5" . $tgl . $batas;  //format kode
        return $kodetampil;
    }
}
