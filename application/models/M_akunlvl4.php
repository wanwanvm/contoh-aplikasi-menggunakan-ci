<?php
class M_akunlvl4 extends CI_Model
{

	function get_all_lvl4()
	{
		$hsl = $this->db->query("SELECT * FROM tb_lvl4 ");
		return $hsl;
	}
	function get_akun1()
	{
		//$tahun = $this->session->userdata('tahun');
		$hsl = $this->db->query("SELECT * FROM tb_lvl1 ");
		return $hsl;
	}
	function get_akun2($idlvl1)
	{
		$hsl = $this->db->query("SELECT * FROM tb_lvl2 where idlvl1='$idlvl1' ");
		return $hsl->result();
	}
	function get_akun3($idlvl2)
	{
		$hsl = $this->db->query("SELECT * FROM tb_lvl3 where idlvl2='$idlvl2' ");
		return $hsl->result();
	}
	function get_akun33($idlvl3)
	{
		$hsl = $this->db->query("SELECT * FROM tb_lvl3 where idlvl3='$idlvl3' ");
		return $hsl->result();
	}

	function simpan_data($nmakun4, $idlvl3, $kdakun4)
	{
		//$id_panitia = $this->session->userdata('id_panitia');
		$hsl = $this->db->query("INSERT INTO tb_lvl4(nmakun4,idlvl3,kdakun4) VALUES ('$nmakun4','$idlvl3','$kdakun4')");
		return $hsl;
	}
	function cekakun($idlvl4)
	{
		$hsl = $this->db->query("SELECT * FROM tb_lvl5 WHERE idlvl4='$idlvl4'");
		return $hsl; //return $result->result();
	}
	function hapus_akun($idlvl4)
	{

		$hsl = $this->db->query("DELETE FROM tb_lvl4 WHERE idlvl4='$idlvl4'");
		return $hsl;
	}
}
