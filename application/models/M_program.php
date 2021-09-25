<?php
class M_program extends CI_Model
{

    function get_all_program()
    {
        $tahun = $this->session->userdata('tahun');
        $hsl = $this->db->query("SELECT * FROM tb_program,tb_grandp where tb_program.idgrandp=tb_grandp.idgrandp and tb_grandp.tahun='$tahun' ");
        return $hsl;
    }
    function get_kode()
    {
        $tahun = $this->session->userdata('tahun');
        $hsl = $this->db->query("SELECT * FROM tb_grandp where tahun='$tahun' ");
        return $hsl;
    }
    function simpan_data($nmprogram, $idgrandp, $kdprogram)
    {
        $hsl = $this->db->query("INSERT INTO tb_program(nmprogram,idgrandp,kdprogram) VALUES ('$nmprogram','$idgrandp','$kdprogram')");
        return $hsl;
    }
    function edit_data($nmprogram, $idprogram, $kdprogram)
    {
        //$id_panitia = $this->session->userdata('id_panitia');
        $hsl = $this->db->query("UPDATE tb_program SET kdprogram='$kdprogram',nmprogram='$nmprogram' where idprogram='$idprogram'");
        return $hsl;
    }
}
