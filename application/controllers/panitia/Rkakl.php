<?php
class Rkakl extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('masukpanitia') != TRUE) {
			$url = base_url('adminpanitia');
			redirect($url);
		};
		$this->load->model('m_rkakl');
	}


	function index()
	{
		//	$kode=$this->session->userdata('idadmin');
		//		$x['user']=$this->m_peserta->get_peserta_login($kode);
		$x['data'] = $this->m_rkakl->get_all_kegiatan();
		$x['data2'] = $this->m_rkakl->get_all_keg();
		$this->load->view('panitia/v_rkakl', $x);
	}
	function hapus_kegiatan()
	{
		//$kdakun4 = strip_tags($this->input->get('kdakun4'));
		$idkegiatan = strip_tags(str_replace("'", "", $this->input->get('idkegiatan')));
		//cel email
		//$cekpenerimaan = $this->m_akunlvl5->cekpenerimaan($idlvl5);
		$cekpenyaluran = $this->m_rkakl->cekpenyaluran($idkegiatan);
		//echo json_encode($cadmin);
		if ($cekpenyaluran->num_rows() > 0) {
			//echo $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert"><span class="fa fa-close"></span></button>  Tidak Dapat Di hapus karena akun sudah di gunakan di Level 5 </div>');
			echo $this->session->set_flashdata('msg', 'penyaluran-cek');
			redirect('panitia/rkakl');
		} else {
			$this->m_rkakl->hapus_kegiatan($idkegiatan);
			echo $this->session->set_flashdata('msg', 'success-hapus');
			redirect('panitia/rkakl');
		}
	}
	function edit_kegiatan()
	{
		//$kdakun4 = strip_tags($this->input->get('kdakun4'));
		$idkegiatan = strip_tags(str_replace("'", "", $this->input->get('idkegiatan')));
		$x['data3'] = $this->m_rkakl->cekkegiatan($idkegiatan);
		$this->load->view('panitia/v_editkegiatan', $x);
	}
	function hapus_komp()
	{
		//$kdakun4 = strip_tags($this->input->get('kdakun4'));
		$idkomp = strip_tags(str_replace("'", "", $this->input->get('idkomp')));
		//cel email
		//$cekpenerimaan = $this->m_akunlvl5->cekpenerimaan($idlvl5);
		$cekpenyalurankomp = $this->m_rkakl->cekpenyalurankomp($idkomp);
		//echo json_encode($cadmin);
		if ($cekpenyalurankomp->num_rows() > 0) {
			//echo $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert"><span class="fa fa-close"></span></button>  Tidak Dapat Di hapus karena akun sudah di gunakan di Level 5 </div>');
			echo $this->session->set_flashdata('msg', 'penyaluran-cek-komp');
			redirect('panitia/rkakl');
		} else {
			$this->m_rkakl->hapus_komp($idkomp);
			echo $this->session->set_flashdata('msg', 'success-hapus-komp');
			redirect('panitia/rkakl');
		}
	}

	function edit_komp()
	{
		//$kdakun4 = strip_tags($this->input->get('kdakun4'));
		$idkomp = strip_tags(str_replace("'", "", $this->input->get('idkomp')));
		$x['data3'] = $this->m_rkakl->cekkomp($idkomp);
		$this->load->view('panitia/v_editkomponen', $x);
	}
	function hapus_subp()
	{
		//$kdakun4 = strip_tags($this->input->get('kdakun4'));
		$idsubp = strip_tags(str_replace("'", "", $this->input->get('idsubp')));
		//cel email
		//$cekpenerimaan = $this->m_akunlvl5->cekpenerimaan($idlvl5);
		$cekpenyaluransubp = $this->m_rkakl->cekpenyaluransubp($idsubp);
		//echo json_encode($cadmin);
		if ($cekpenyaluransubp->num_rows() > 0) {
			//echo $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert"><span class="fa fa-close"></span></button>  Tidak Dapat Di hapus karena akun sudah di gunakan di Level 5 </div>');
			echo $this->session->set_flashdata('msg', 'penyaluran-cek-subp');
			redirect('panitia/rkakl');
		} else {
			$this->m_rkakl->hapus_subp($idsubp);
			echo $this->session->set_flashdata('msg', 'success-hapus-subp');
			redirect('panitia/rkakl');
		}
	}
	function edit_subp()
	{
		//$kdakun4 = strip_tags($this->input->get('kdakun4'));
		$idsubp = strip_tags(str_replace("'", "", $this->input->get('idsubp')));
		$x['data3'] = $this->m_rkakl->ceksubp($idsubp);
		$this->load->view('panitia/v_editsubprogram', $x);
	}
	function hapus_prog()
	{
		//$kdakun4 = strip_tags($this->input->get('kdakun4'));
		$idprogram = strip_tags(str_replace("'", "", $this->input->get('idprogram')));
		//cel email
		//$cekpenerimaan = $this->m_akunlvl5->cekpenerimaan($idlvl5);
		$cekpenyaluranprog = $this->m_rkakl->cekpenyaluranprog($idprogram);
		//echo json_encode($cadmin);
		if ($cekpenyaluranprog->num_rows() > 0) {
			//echo $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert"><span class="fa fa-close"></span></button>  Tidak Dapat Di hapus karena akun sudah di gunakan di Level 5 </div>');
			echo $this->session->set_flashdata('msg', 'penyaluran-cek-prog');
			redirect('panitia/rkakl');
		} else {
			$this->m_rkakl->hapus_prog($idprogram);
			echo $this->session->set_flashdata('msg', 'success-hapus-prog');
			redirect('panitia/rkakl');
		}
	}
	function edit_prog()
	{
		//$kdakun4 = strip_tags($this->input->get('kdakun4'));
		$idprogram = strip_tags(str_replace("'", "", $this->input->get('idprogram')));
		$x['data3'] = $this->m_rkakl->cekprog($idprogram);
		$this->load->view('panitia/v_editprogram', $x);
	}
	function hapus_grandp()
	{
		//$kdakun4 = strip_tags($this->input->get('kdakun4'));
		$idgrandp = strip_tags(str_replace("'", "", $this->input->get('idgrandp')));
		//cel email
		//$cekpenerimaan = $this->m_akunlvl5->cekpenerimaan($idlvl5);
		$cekpenyalurangrandp = $this->m_rkakl->cekpenyalurangrandp($idgrandp);
		//echo json_encode($cadmin);
		if ($cekpenyalurangrandp->num_rows() > 0) {
			//echo $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert"><span class="fa fa-close"></span></button>  Tidak Dapat Di hapus karena akun sudah di gunakan di Level 5 </div>');
			echo $this->session->set_flashdata('msg', 'penyaluran-cek-grandp');
			redirect('panitia/rkakl');
		} else {
			$this->m_rkakl->hapus_grandp($idgrandp);
			echo $this->session->set_flashdata('msg', 'success-hapus-grandp');
			redirect('panitia/rkakl');
		}
	}
	function edit_grandp()
	{
		//$kdakun4 = strip_tags($this->input->get('kdakun4'));
		$idgrandp = strip_tags(str_replace("'", "", $this->input->get('idgrandp')));
		$x['data3'] = $this->m_rkakl->cekgrandp($idgrandp);
		$this->load->view('panitia/v_editgrandp', $x);
	}
}
