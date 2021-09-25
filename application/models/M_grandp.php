<?php
class M_grandp extends CI_Model
{

    function get_all_grandp()
    {
        $tahun = $this->session->userdata('tahun');
        $hsl = $this->db->query("SELECT * FROM tb_grandp where tahun='$tahun' ");
        return $hsl;
    }

    function simpan_data($kdgrandp, $nmgrandp, $tahun)
    {
        $hsl = $this->db->query("INSERT INTO tb_grandp(idgrandp,kdgrandp,nmgrandp,tahun) VALUES ('','$kdgrandp','$nmgrandp','$tahun')");
        return $hsl;
    }
    function edit_data($nmgrandp, $idgrandp, $kdgrandp)
    {
        //$id_panitia = $this->session->userdata('id_panitia');
        $hsl = $this->db->query("UPDATE tb_grandp SET kdgrandp='$kdgrandp',nmgrandp='$nmgrandp' where idgrandp='$idgrandp'");
        return $hsl;
    }
}
