<?php
class Dashboard extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masukpanitia') !=TRUE){
            $url=base_url('adminpanitia');
            redirect($url);
        };
		//$this->load->model('m_pengunjung');
	}
	function index(){
	//	$this->session->userdata('akses')=='1')
			//$x['visitor'] = $this->m_pengunjung->statistik_pengujung();
		 $this->load->view('panitia/v_dashboard');
		
	
	}
	
}