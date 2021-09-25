<?php
class M_penyaluran extends CI_Model
{

    function get_all_penyaluran()
    {
        $tahun = $this->session->userdata('tahun');
        // $q="SELECT * FROM projects WHERE Year(Date) = '$year' and Month(Date) = '$month'";
        $hsl = $this->db->query("SELECT * FROM peserta ");
        return $hsl;
    }
    function get_kdakun5()
    {
        // $tahun = $this->session->userdata('tahun');
        $hsl = $this->db->query("SELECT * FROM tb_lvl1,tb_lvl2,tb_lvl3,tb_lvl4,tb_lvl5 WHERE tb_lvl1.idlvl1=tb_lvl2.idlvl1 
        and tb_lvl2.idlvl2=tb_lvl3.idlvl2 and tb_lvl3.idlvl3=tb_lvl4.idlvl3 and tb_lvl4.idlvl4=tb_lvl5.idlvl4 and tb_lvl1.idlvl1='5' ");
        return $hsl;
    }
    function get_kegiatan()
    {
        $tahun = $this->session->userdata('tahun');
        // $q="SELECT * FROM projects WHERE Year(Date) = '$year' and Month(Date) = '$month'";
        $hsl = $this->db->query(" SELECT * FROM tb_grandp,tb_program,tb_subprogram,tb_komponen,tb_kegiatan WHERE tb_grandp.idgrandp = tb_program.idgrandp AND tb_program.idprogram = tb_subprogram.idprogram AND tb_subprogram.idsubp=tb_komponen.idsubp AND tb_komponen.idkomp=tb_kegiatan.idkomp and tb_grandp.tahun = '$tahun' 
        ");
        return $hsl;
    }
    function get_pejabat()
    {
        //$tahun = $this->session->userdata('tahun');
        // $q="SELECT * FROM projects WHERE Year(Date) = '$year' and Month(Date) = '$month'";
        $hsl = $this->db->query(" SELECT * FROM tb_pejabat");
        return $hsl;
    }

    function get_pagu($idkegiatan)
    {
        //  $tahun = $this->session->userdata('tahun');
        $hsl = $this->db->query("SELECT * FROM tb_kegiatan where idkegiatan='$idkegiatan' ");
        return $hsl->result();
    }
    function get_subprogram($idprogram)
    {
        //  $tahun = $this->session->userdata('tahun');
        $hsl = $this->db->query("SELECT * FROM tb_subprogram where idprogram='$idprogram' ");
        return $hsl->result();
    }
    function simpan_data($kdpenyaluran, $idlvl5, $idkegiatan, $nmpenyaluran, $nompenyaluran, $nmpenerima, $jabatan, $alamat, $tgltransaksi, $image_name, $ketua, $bendahara, $upsisapagu)
    {
        $kdadmin = $this->session->userdata('kdadmin');
        $tgl_a = date('Y-m-d', strtotime($tgltransaksi));
        // $tgl = date_to_en('$tgltransaksi');
        $hsl = $this->db->query("INSERT INTO tb_penyaluran(kdpenyaluran, idlvl5,idkegiatan, kdadmin ,nmpenyaluran, nompenyaluran, nmpenerima,jabatan,alamat, tgltransaksi,image,ketua,bendahara) 
        VALUES 
        ('$kdpenyaluran', '$idlvl5','$idkegiatan','$kdadmin', '$nmpenyaluran','$nompenyaluran','$nmpenerima','$jabatan','$alamat','$tgl_a','$image_name','$ketua','$bendahara')");

        $hslku = $this->db->query("UPDATE tb_kegiatan SET sisapagu='$upsisapagu' WHERE idkegiatan='$idkegiatan'");
        return $hslku;
        return $hsl;
    }
    function edit_data($kdpenyaluran, $idlvl5, $nmpenyaluran, $nmpenerima, $jabatan, $alamat, $tgltransaksi, $ketua, $bendahara)
    {
        $kdadmin = $this->session->userdata('kdadmin');
        $tgl_a = date('Y-m-d', strtotime($tgltransaksi));
        // $tgl = date_to_en('$tgltransaksi');

        $hslku = $this->db->query("UPDATE tb_penyaluran SET idlvl5='$idlvl5',nmpenyaluran='$nmpenyaluran', nmpenerima='$nmpenerima',jabatan='$jabatan',alamat='$alamat',tgltransaksi='$tgl_a',ketua='$ketua',bendahara='$bendahara',kdadmin='$kdadmin' WHERE kdpenyaluran='$kdpenyaluran'");
        return $hslku;
    }

    // Membuat kode
    public function kode()
    {
        $this->db->select('RIGHT(tb_penyaluran.kdpenyaluran,3) as kdpenyaluran', FALSE);
        $this->db->order_by('kdpenyaluran', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get('tb_penyaluran');  //cek dulu apakah ada sudah ada kode di tabel.    
        if ($query->num_rows() <> 0) {
            //cek kode jika telah tersedia    
            $data = $query->row();
            $kode = intval($data->kdpenyaluran) + 1;
        } else {
            $kode = 1;  //cek jika kode belum terdapat pada table
        }
        $tgl = date('dmY');
        $batas = str_pad($kode, 4, "0", STR_PAD_LEFT);
        $kodetampil = "PP" . "5" . $tgl . $batas;  //format kode
        return $kodetampil;
    }
    function hapus_data($kdpenyaluran, $idkegiatan, $balikpagu)
    {

        $hsl = $this->db->query("DELETE FROM tb_penyaluran WHERE kdpenyaluran='$kdpenyaluran'");
        $hslku = $this->db->query("UPDATE tb_kegiatan SET sisapagu='$balikpagu' WHERE idkegiatan='$idkegiatan'");
        //return $hslku;
        return $hsl;
    }
    function cekpenyaluran($kdpenyaluran)
    {
        $hsl = $this->db->query("SELECT * FROM tb_penyaluran WHERE kdpenyaluran='$kdpenyaluran'");
        return $hsl; //return $result->result();	
    }
}
