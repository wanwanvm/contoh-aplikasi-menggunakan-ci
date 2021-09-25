<?php
class M_akunlvl1 extends CI_Model
{

	function get_all_lvl1()
	{
		//$tahun = $this->session->userdata('tahun');
		$hsl = $this->db->query("SELECT * FROM tb_lvl1  ");
		return $hsl;
	}
	function simpan_data($nmakun1, $kdakun1)
	{
		//$id_panitia = $this->session->userdata('id_panitia');
		$tahun = $this->session->userdata('tahun');
		$hsl = $this->db->query("INSERT INTO tb_lvl1(nmakun1,kdakun1,tahun) VALUES ('$nmakun1','$kdakun1','$tahun')");
		return $hsl;
	}
	function cekakun($idlvl1)
	{
		$hsl = $this->db->query("SELECT * FROM tb_lvl2 WHERE idlvl1='$idlvl1'");
		return $hsl; //return $result->result();
	}
	function hapus_akun($idlvl1)
	{

		$hsl = $this->db->query("DELETE FROM tb_lvl1 WHERE idlvl1='$idlvl1'");
		return $hsl;
	}
}
