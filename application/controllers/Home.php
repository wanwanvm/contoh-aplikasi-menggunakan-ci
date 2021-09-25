<?php
class Home extends CI_Controller
{
	function __construct()
	{
		parent::__construct();

		if ($this->session->userdata('masukpanitia') != TRUE) {
			$url = base_url('adminpanitia');
			redirect($url);
		};
		//$this->load->model('m_berita');
		//$this->load->model('m_galeri');
		//$this->load->model('m_pengumuman');
		//	$this->load->model('m_agenda');
		//$this->load->model('m_files');
		//$this->load->model('m_pengunjung');
		//	$this->m_pengunjung->count_visitor();
	}
	function index()
	{
		//	$x['berita']=$this->m_berita->get_berita_home();
		//$x['pengumuman']=$this->m_pengumuman->get_pengumuman_home();
		//	$x['agenda']=$this->m_agenda->get_agenda_home();
		//	$x['tot_pelatih']=$this->db->get('tbl_pelatih')->num_rows();
		//	$x['tot_atlet']=$this->db->get('tbl_atlet')->num_rows();
		//	$x['tot_files']=$this->db->get('tbl_files')->num_rows();
		//	$x['tot_agenda']=$this->db->get('tbl_agenda')->num_rows();
		//$this->load->view('depan/v_home');
		$url = base_url('adminpanitia');
		redirect($url);
	}
}
