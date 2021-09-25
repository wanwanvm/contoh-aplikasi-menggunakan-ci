<?php
class M_rkakl extends CI_Model
{
	function get_all_keg()
	{
		//$tahun = $this->session->userdata('tahun');
		$hsl = $this->db->query("SELECT * FROM  tb_kegiatan 
        ");
		return $hsl;
	}

	function get_all_kegiatan()
	{
		$tahun = $this->session->userdata('tahun');
		$hsl = $this->db->query("SELECT * FROM  tb_grandp where tahun='$tahun'
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
		$hsl = $this->db->query("INSERT INTO tb_kegiatan(nmkegiatan, idkomp, kdkegiatan, pagu, volume,satuan,hargasatuan) VALUES ('$nmkegiatan',' $idkomp',' $kdkegiatan',' $pagu','$volume','$satuan','$hargasatuan')");
		return $hsl;
	}
	function cekpenyaluran($idkegiatan)
	{
		$hsl = $this->db->query("SELECT * FROM tb_penyaluran WHERE idkegiatan='$idkegiatan'");
		return $hsl; //return $result->result();	
	}
	function hapus_kegiatan($idkegiatan)
	{

		$hsl = $this->db->query("DELETE FROM tb_kegiatan WHERE idkegiatan='$idkegiatan'");
		return $hsl;
	}
	function cekpenyalurankomp($idkomp)
	{
		$hsl = $this->db->query("SELECT * FROM tb_kegiatan,tb_komponen WHERE tb_komponen.idkomp = tb_kegiatan.idkomp and tb_komponen.idkomp='$idkomp'");
		return $hsl; //return $result->result();	
	}
	function hapus_komp($idkomp)
	{

		$hsl = $this->db->query("DELETE FROM tb_komponen WHERE idkomp='$idkomp'");
		return $hsl;
	}
	function cekpenyaluransubp($idsubp)
	{
		$hsl = $this->db->query("SELECT * FROM tb_komponen, tb_subprogram WHERE tb_subprogram.idsubp=tb_komponen.idsubp and tb_subprogram.idsubp='$idsubp'");
		return $hsl; //return $result->result();	
	}
	function hapus_subp($idsubp)
	{

		$hsl = $this->db->query("DELETE FROM tb_subprogram WHERE idsubp='$idsubp'");
		return $hsl;
	}
	function cekpenyaluranprog($idprogram)
	{
		$hsl = $this->db->query("SELECT * FROM tb_subprogram,tb_program WHERE tb_program.idprogram = tb_subprogram.idprogram and tb_program.idprogram='$idprogram'");
		return $hsl; //return $result->result();	
	}
	function hapus_prog($idprogram)
	{

		$hsl = $this->db->query("DELETE FROM tb_program WHERE idprogram='$idprogram'");
		return $hsl;
	}
	function cekpenyalurangrandp($idgrandp)
	{
		$hsl = $this->db->query("SELECT * FROM tb_program,tb_grandp WHERE tb_program.idgrandp = tb_grandp.idgrandp and tb_grandp.idgrandp='$idgrandp'");
		return $hsl; //return $result->result();	
	}
	function hapus_grandp($idgrandp)
	{

		$hsl = $this->db->query("DELETE FROM tb_grandp WHERE idgrandp='$idgrandp'");
		return $hsl;
	}
	function cekkegiatan($idkegiatan)
	{
		$hsl = $this->db->query("SELECT * FROM tb_kegiatan WHERE idkegiatan='$idkegiatan'");
		return $hsl; //return $result->result();	
	}
	function cekkomp($idkomp)
	{
		$hsl = $this->db->query("SELECT * FROM tb_komponen WHERE idkomp='$idkomp'");
		return $hsl; //return $result->result();	
	}
	function ceksubp($idsubp)
	{
		$hsl = $this->db->query("SELECT * FROM tb_subprogram WHERE idsubp='$idsubp'");
		return $hsl; //return $result->result();	
	}
	function cekprog($idprogram)
	{
		$hsl = $this->db->query("SELECT * FROM tb_program WHERE idprogram='$idprogram'");
		return $hsl; //return $result->result();	
	}
	function cekgrandp($idgrandp)
	{
		$hsl = $this->db->query("SELECT * FROM tb_grandp WHERE idgrandp='$idgrandp'");
		return $hsl; //return $result->result();	
	}
}
