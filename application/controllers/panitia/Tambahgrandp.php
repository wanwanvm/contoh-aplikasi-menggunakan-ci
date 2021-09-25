<?php
class Tambahgrandp extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('masukpanitia') != TRUE) {
			$url = base_url('adminpanitia');
			redirect($url);
		};
		$this->load->model('m_grandp');
	}
	function index()
	{
		//	$kode=$this->session->userdata('idadmin');
		//		$x['user']=$this->m_peserta->get_peserta_login($kode);
		//$x['data'] = $this->m_grandp->get_akun1();
		//$this->load->view('panitia/v_tambahgrandp', $x);
		$this->load->view('panitia/v_tambahgrandp');
	}

	function get_akun2()
	{
		$kdakun1 = $this->input->post('kdakun1');
		$data = $this->m_akunlvl4->get_akun2($kdakun1);
		echo json_encode($data);
	}
	function get_akun3()
	{
		$kdakun2 = $this->input->post('kdakun2');
		$data = $this->m_akunlvl4->get_akun3($kdakun2);
		echo json_encode($data);
	}
	function get_akun33X()
	{
		$kdakun3 = $this->input->post('kdakun3');
		$data = $this->m_akunlvl4->get_akun33($kdakun3);

		//$this->load->view('panitia/v_tambahlvl4',$x);
		echo json_encode($data);
	}
	function simpan_data()
	{
		$nmgrandp = strip_tags($this->input->post('nmgrandp'));
		$kdgrandp = $this->input->post('kdgrandp');
		$tahun = $this->input->post('tahun');

		$this->m_grandp->simpan_data($kdgrandp, $nmgrandp, $tahun);
		echo $this->session->set_flashdata('msg', 'success');
		redirect('panitia/grandp');
	}


	function hapus_media()
	{
		//	$kode=$this->input->post('kode');
		//	$album=$this->input->post('album');
		//	$gambar=$this->input->post('gambar');
		//	$path='./assets/images/'.$gambar;
		//	unlink($path);
		$id_view = $this->input->get('id_view');
		$this->m_panitiastatus->hapus_media($id_view);
		echo $this->session->set_flashdata('msg', 'success-hapus');
		redirect('panitia/pesertakeseluruhan');
	}
	function edit_data()
	{
		$nmgrandp = strip_tags($this->input->post('nmgrandp'));
		$idrgandp = $this->input->post('idgrandp');
		$kdgrandp = $this->input->post('kdgrandp');


		$this->m_grandp->edit_data($nmgrandp, $idrgandp, $kdgrandp);
		echo $this->session->set_flashdata('msg', 'success-edit-grandp');
		redirect('panitia/rkakl');
	}
}
