<?php
class Tambahprogram extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('masukpanitia') != TRUE) {
			$url = base_url('adminpanitia');
			redirect($url);
		};
		$this->load->model('m_program');
	}
	function index()
	{
		//	$kode=$this->session->userdata('idadmin');
		//		$x['user']=$this->m_peserta->get_peserta_login($kode);
		//$x['data'] = $this->m_grandp->get_akun1();
		//$this->load->view('panitia/v_tambahgrandp', $x);
		$x['data'] = $this->m_program->get_kode();
		$this->load->view('panitia/v_tambahprogram', $x);
	}

	function simpan_data()
	{
		$nmprogram = strip_tags($this->input->post('nmprogram'));
		$idgrandp = $this->input->post('idgrandp');
		$kdprogram = $this->input->post('kdprogram');

		$this->m_program->simpan_data($nmprogram, $idgrandp, $kdprogram);
		echo $this->session->set_flashdata('msg', 'success');
		redirect('panitia/program');
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
		$nmprogram = strip_tags($this->input->post('nmprogram'));
		$idprogram = $this->input->post('idprogram');
		$kdprogram = $this->input->post('kdprogram');


		$this->m_program->edit_data($nmprogram, $idprogram, $kdprogram);
		echo $this->session->set_flashdata('msg', 'success-edit-program');
		redirect('panitia/rkakl');
	}
}
