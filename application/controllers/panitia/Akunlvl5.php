<?php
class Akunlvl5 extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('masukpanitia') != TRUE) {
			$url = base_url('adminpanitia');
			redirect($url);
		};
		$this->load->model('m_akunlvl5');
	}


	function index()
	{
		//	$kode=$this->session->userdata('idadmin');
		//		$x['user']=$this->m_peserta->get_peserta_login($kode);
		$x['data'] = $this->m_akunlvl5->get_all_lvl5();
		$this->load->view('panitia/v_akunlvl5', $x);
	}

	function hapus_akun()
	{
		//$kdakun4 = strip_tags($this->input->get('kdakun4'));
		$idlvl5 = strip_tags(str_replace("'", "", $this->input->get('idlvl5')));
		//cel email
		$cekpenerimaan = $this->m_akunlvl5->cekpenerimaan($idlvl5);
		$cekkewajiban = $this->m_akunlvl5->cekkewajiban($idlvl5);
		$cekpenyaluran = $this->m_akunlvl5->cekpenyaluran($idlvl5);
		$ceksaldo = $this->m_akunlvl5->ceksaldo($idlvl5);
		//echo json_encode($cadmin);
		if ($cekpenerimaan->num_rows() > 0) {
			//echo $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert"><span class="fa fa-close"></span></button>  Tidak Dapat Di hapus karena akun sudah di gunakan di Level 5 </div>');
			echo $this->session->set_flashdata('msg', 'penerimaan-cek');
			redirect('panitia/akunlvl5');
		} else if ($cekpenyaluran->num_rows() > 0) {
			//echo $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert"><span class="fa fa-close"></span></button>  Tidak Dapat Di hapus karena akun sudah di gunakan di Level 5 </div>');
			echo $this->session->set_flashdata('msg', 'penyaluran-cek');
			redirect('panitia/akunlvl5');
		
		} else if ($ceksaldo->num_rows() > 0) {
			//echo $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert"><span class="fa fa-close"></span></button>  Tidak Dapat Di hapus karena akun sudah di gunakan di Level 5 </div>');
			echo $this->session->set_flashdata('msg', 'saldo-cek');
			redirect('panitia/akunlvl5');
		
		} else if ($cekkewajiban->num_rows() > 0) {
			//echo $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert"><span class="fa fa-close"></span></button>  Tidak Dapat Di hapus karena akun sudah di gunakan di Level 5 </div>');
			echo $this->session->set_flashdata('msg', 'kewajiban-cek');
			redirect('panitia/akunlvl5');
		}
		 else {
			$this->m_akunlvl5->hapus_akun($idlvl5);
			echo $this->session->set_flashdata('msg', 'success-hapus');
			redirect('panitia/akunlvl5');
		}
	}
}
