<?php
class M_akunlvl2 extends CI_Model
{

	function get_all_lvl2()
	{
		$hsl = $this->db->query("SELECT * FROM tb_lvl2 ");
		return $hsl;
	}
	function get_akun1()
	{
		//	$tahun = $this->session->userdata('tahun');
		$hsl = $this->db->query("SELECT * FROM tb_lvl1  ");
		return $hsl;
	}
	function simpan_data($nmakun2, $kdakun2, $idlvl1)
	{
		//$id_panitia = $this->session->userdata('id_panitia');
		$hsl = $this->db->query("INSERT INTO tb_lvl2(nmakun2,kdakun2,idlvl1) VALUES ('$nmakun2','$kdakun2','$idlvl1')");
		return $hsl;
	}
	function cekakun($idlvl2)
	{
		$hsl = $this->db->query("SELECT * FROM tb_lvl3 WHERE idlvl2='$idlvl2'");
		return $hsl; //return $result->result();
	}
	function hapus_akun($idlvl2)
	{

		$hsl = $this->db->query("DELETE FROM tb_lvl2 WHERE idlvl2='$idlvl2'");
		return $hsl;
	}
}
