<?php
class M_komponen extends CI_Model
{

    function get_all_komponen()
    {
        $tahun = $this->session->userdata('tahun');
        $hsl = $this->db->query("SELECT * FROM tb_program,tb_grandp,tb_subprogram,tb_komponen where tb_komponen.idsubp=tb_subprogram.idsubp and tb_subprogram.idprogram=tb_program.idprogram and tb_program.idgrandp=tb_grandp.idgrandp and tb_grandp.tahun='$tahun' ");
        return $hsl;
    }
    function get_kode()
    {
        $tahun = $this->session->userdata('tahun');
        $hsl = $this->db->query("SELECT * FROM tb_grandp where tahun='$tahun' ");
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
    function simpan_data($nmkomp, $idsubp, $kdkomp)
    {
        //$id_panitia = $this->session->userdata('id_panitia');
        $hsl = $this->db->query("INSERT INTO tb_komponen(nmkomp, idsubp, kdkomp) VALUES ('$nmkomp',' $idsubp',' $kdkomp')");
        return $hsl;
    }
	 function edit_data($nmkomp, $idkomp, $kdkomp)
    {
        //$id_panitia = $this->session->userdata('id_panitia');
        $hsl = $this->db->query("UPDATE tb_komponen SET kdkomp='$kdkomp',nmkomp='$nmkomp' where idkomp='$idkomp'");
        return $hsl;
    }
}
