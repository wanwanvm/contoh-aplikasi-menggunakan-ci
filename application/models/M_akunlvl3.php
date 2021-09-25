<?php
class M_akunlvl3 extends CI_Model
{

	function get_all_lvl3()
	{
		$hsl = $this->db->query("SELECT * FROM tb_lvl3 ");
		return $hsl;
	}

	function get_akun1()
	{
		//$tahun = $this->session->userdata('tahun');
		$hsl = $this->db->query("SELECT * FROM tb_lvl1  ");
		return $hsl;
	}
	function get_akun2($idlvl1)
	{
		$hsl = $this->db->query("SELECT * FROM tb_lvl2 where idlvl1='$idlvl1' ");
		return $hsl->result();
	}
	function simpan_data($nmakun3, $kdakun3, $idlvl2)
	{
		$id_panitia = $this->session->userdata('id_panitia');
		$hsl = $this->db->query("INSERT INTO tb_lvl3(nmakun3,kdakun3,idlvl2) VALUES ('$nmakun3','$kdakun3','$idlvl2')");
		return $hsl;
	}
	function cekakun($idlvl3)
	{
		$hsl = $this->db->query("SELECT * FROM tb_lvl4 WHERE idlvl3='$idlvl3'");
		return $hsl; //return $result->result();
	}
	function hapus_akun($idlvl3)
	{

		$hsl = $this->db->query("DELETE FROM tb_lvl3 WHERE idlvl3='$idlvl3'");
		return $hsl;
	}
}
