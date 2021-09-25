<?php
class Penyaluran extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('masukpanitia') != TRUE) {
			$url = base_url('adminpanitia');
			redirect($url);
		};
		$this->load->model('m_penyaluran');
	}


	function index()
	{
		//	$kode=$this->session->userdata('idadmin');
		//		$x['user']=$this->m_peserta->get_peserta_login($kode);
		$x['data'] = $this->m_penyaluran->get_all_penyaluran();


		$this->load->view('panitia/v_penyaluran', $x);
	}
	function hapus_data()
	{
		//$kdakun4 = strip_tags($this->input->get('kdakun4'));
		$kdpenyaluran = strip_tags(str_replace("'", "", $this->input->get('kdpenyaluran')));
		//cel email
		//$cekidkegiatan = $this->m_akunlvl5->cekpenerimaan($idlvl5);
		//$cekpenyaluran = $this->m_akunlvl5->cekpenyaluran($idlvl5);
		//echo json_encode($cadmin);
		//if ($cekpenerimaan->num_rows() > 0) {
		//echo $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert"><span class="fa fa-close"></span></button>  Tidak Dapat Di hapus karena akun sudah di gunakan di Level 5 </div>');
		//echo $this->session->set_flashdata('msg', 'penerimaan-cek');
		//redirect('panitia/akunlvl5');
		//} else if ($cekpenyaluran->num_rows() > 0) {
		//echo $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert"><span class="fa fa-close"></span></button>  Tidak Dapat Di hapus karena akun sudah di gunakan di Level 5 </div>');
		//echo $this->session->set_flashdata('msg', 'penyaluran-cek');
		//redirect('panitia/akunlvl5');
		//} else {
		$query_idkegiatan = $this->db->query("SELECT * from tb_penyaluran where kdpenyaluran='$kdpenyaluran'");
		foreach ($query_idkegiatan->result_array() as $t) :
			$idkegiatan = $t['idkegiatan'];
			$nompenyaluran = $t['nompenyaluran'];
			$query_pagu = $this->db->query("SELECT * from tb_kegiatan where idkegiatan='$idkegiatan'");
			foreach ($query_pagu->result_array() as $p) :
				$sisapagu = $p['sisapagu'];
				$balikpagu = $nompenyaluran + $sisapagu;
			endforeach;
		endforeach;
		$this->m_penyaluran->hapus_data($kdpenyaluran, $idkegiatan, $balikpagu);

		echo $this->session->set_flashdata('msg', 'success-hapus');


		redirect('panitia/penyaluran');
		//}
	}
	function edit_data()
	{
		//$kdakun4 = strip_tags($this->input->get('kdakun4'));
		$kdpenyaluran = strip_tags(str_replace("'", "", $this->input->get('kdpenyaluran')));
		$x['data3'] = $this->m_penyaluran->cekpenyaluran($kdpenyaluran);
		$x['data'] = $this->m_penyaluran->get_kdakun5();
		$x['keg'] = $this->m_penyaluran->get_kegiatan();
		$x['jabat'] = $this->m_penyaluran->get_pejabat();
		$this->load->view('panitia/v_editpenyaluran', $x);
	}
}
