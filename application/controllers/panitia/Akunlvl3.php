<?php
class Akunlvl3 extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masukpanitia') !=TRUE){
            $url=base_url('adminpanitia');
            redirect($url);
        };
		$this->load->model('m_akunlvl3');
		
	}


	function index(){
//	$kode=$this->session->userdata('idadmin');
//		$x['user']=$this->m_peserta->get_peserta_login($kode);
$x['data']=$this->m_akunlvl3->get_all_lvl3();
		$this->load->view('panitia/v_akunlvl3',$x);
	}

	function hapus_akun()
	{
		//$kdakun4 = strip_tags($this->input->get('kdakun4'));
		$idlvl3 = strip_tags(str_replace("'", "", $this->input->get('idlvl3')));
		//cel email
		$cekakun = $this->m_akunlvl3->cekakun($idlvl3);
		//echo json_encode($cadmin);
		if ($cekakun->num_rows() > 0) {
			//echo $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert"><span class="fa fa-close"></span></button>  Tidak Dapat Di hapus karena akun sudah di gunakan di Level 5 </div>');
			echo $this->session->set_flashdata('msg', 'cek-akun3');
			redirect('panitia/akunlvl3');
		} else {
			$this->m_akunlvl3->hapus_akun($idlvl3);
			echo $this->session->set_flashdata('msg', 'success-hapus');
			redirect('panitia/akunlvl3');
		}
	}

}