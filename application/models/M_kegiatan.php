<?php
class M_kegiatan extends CI_Model
{

    function get_all_kegiatan()
    {
        $tahun = $this->session->userdata('tahun');
        $hsl = $this->db->query("SELECT * FROM tb_program, tb_grandp, tb_subprogram, tb_komponen, tb_kegiatan where tb_kegiatan.idkomp=tb_komponen.idkomp and tb_subprogram.idsubp=tb_komponen.idsubp AND tb_subprogram.idprogram=tb_program.idprogram and tb_program.idgrandp=tb_grandp.idgrandp and tb_grandp.tahun='$tahun'
        ");
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

    function get_komponen($idsubp)
    {
        //  $tahun = $this->session->userdata('tahun');
        $hsl = $this->db->query("SELECT * FROM tb_komponen where idsubp='$idsubp' ");
        return $hsl->result();
    }
    function simpan_data($nmkegiatan, $idkomp, $kdkegiatan, $pagu, $volume, $satuan, $hargasatuan)
    {
        //$id_panitia = $this->session->userdata('id_panitia');
        $hsl = $this->db->query("INSERT INTO tb_kegiatan(nmkegiatan, idkomp, kdkegiatan, pagu, volume,satuan,hargasatuan,sisapagu) VALUES ('$nmkegiatan',' $idkomp',' $kdkegiatan',' $pagu','$volume','$satuan','$hargasatuan','$pagu')");
        return $hsl;
		
    }
	function ubah_data($idkegiatan, $nmkegiatan, $kdkegiatan, $pagu, $volume, $satuan, $hargasatuan, $realisasi)
    {
	
	$sisapagu = $pagu - $realisasi;
     
		$hsl=$this->db->query("UPDATE tb_kegiatan SET sisapagu='$sisapagu', pagu = '$pagu',kdkegiatan='$kdkegiatan',nmkegiatan='$nmkegiatan',volume='$volume',satuan='$satuan',hargasatuan='$hargasatuan' WHERE idkegiatan='$idkegiatan'");
		return $hsl;
	}
}
