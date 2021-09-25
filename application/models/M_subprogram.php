<?php
class M_subprogram extends CI_Model
{

    function get_all_subprogram()
    {
        $tahun = $this->session->userdata('tahun');
        $hsl = $this->db->query("SELECT * FROM tb_program,tb_grandp,tb_subprogram where tb_subprogram.idprogram=tb_program.idprogram and tb_program.idgrandp=tb_grandp.idgrandp and tb_grandp.tahun='$tahun' ");
        return $hsl;
    }
    function get_kode()
    {
        $tahun = $this->session->userdata('tahun');
        $hsl = $this->db->query("SELECT * FROM tb_grandp where tahun='$tahun' ");
        return $hsl;
    }


    function get_program($grandp)
    {
        //  $tahun = $this->session->userdata('tahun');
        $hsl = $this->db->query("SELECT * FROM tb_program where idgrandp='$grandp' ");
        return $hsl->result();
    }

    function simpan_data($nmsubp, $program, $kdsubp)
    {
        //$id_panitia = $this->session->userdata('id_panitia');
        $hsl = $this->db->query("INSERT INTO tb_subprogram(nmsubp,idprogram,kdsubp) VALUES ('$nmsubp','$program','$kdsubp')");
        return $hsl;
    }
    function cekakun($kdakun5)
    {
        $hsl = $this->db->query("SELECT * FROM tb_penerimaan WHERE kdakun5='$kdakun5'");
        return $hsl; //return $result->result();
    }
    function hapus_akun($kdakun5)
    {

        $hsl = $this->db->query("DELETE FROM tb_lvl5 WHERE kdakun5='$kdakun5'");
        return $hsl;
    }
    function edit_data($nmsubp, $idsubp, $kdsubp)
    {
        //$id_panitia = $this->session->userdata('id_panitia');
        $hsl = $this->db->query("UPDATE tb_subprogram SET kdsubp='$kdsubp',nmsubp='$nmsubp' where idsubp='$idsubp'");
        return $hsl;
    }
}
