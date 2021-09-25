<?php
class M_akunlvl5 extends CI_Model
{

	function get_all_lvl5()
	{
		$hsl = $this->db->query("SELECT * FROM tb_lvl5 ");
		return $hsl;
	}

	function get_akun1()
	{
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
	function get_akun4($idlvl3)
	{
		$hsl = $this->db->query("SELECT * FROM tb_lvl4 where idlvl3='$idlvl3' ");
		return $hsl->result();
	}

	function simpan_data($nmakun5, $idlvl4, $kdakun5)
	{
		$id_panitia = $this->session->userdata('id_panitia');
		$hsl = $this->db->query("INSERT INTO tb_lvl5(nmakun5,idlvl4,kdakun5) VALUES ('$nmakun5','$idlvl4','$kdakun5')");
		return $hsl;
	}
	function cekpenerimaan($idlvl5)
	{
		$hsl = $this->db->query("SELECT * FROM tb_penerimaan WHERE idlvl5='$idlvl5'");
		return $hsl; //return $result->result();
	}
	
	function cekpenyaluran($idlvl5)
	{
		$hsl = $this->db->query("SELECT * FROM tb_penyaluran WHERE idlvl5='$idlvl5'");
		return $hsl; //return $result->result();	
	}
	function cekkewajiban($idlvl5)
	{
		$hsl = $this->db->query("SELECT * FROM tb_kewajiban WHERE idlvl5='$idlvl5'");
		return $hsl; //return $result->result();	
	}
	function ceksaldo($idlvl5)
	{
		$hsl = $this->db->query("SELECT * FROM tb_saldo WHERE idlvl5='$idlvl5'");
		return $hsl; //return $result->result();
	}
	
	function hapus_akun($idlvl5)
	{

		$hsl = $this->db->query("DELETE FROM tb_lvl5 WHERE idlvl5='$idlvl5'");
		return $hsl;
	}
}
