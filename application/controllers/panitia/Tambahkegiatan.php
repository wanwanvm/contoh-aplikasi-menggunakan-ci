<?php
class Tambahkegiatan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('masukpanitia') != TRUE) {
            $url = base_url('adminpanitia');
            redirect($url);
        };
        $this->load->model('m_kegiatan');
    }
    function index()
    {
        //	$kode=$this->session->userdata('idadmin');
        //		$x['user']=$this->m_peserta->get_peserta_login($kode);
        //$x['data'] = $this->m_grandp->get_akun1();
        //$this->load->view('panitia/v_tambahgrandp', $x);
        $x['data'] = $this->m_kegiatan->get_kode();
        $this->load->view('panitia/v_tambahkegiatan', $x);
    }

    function get_program()
    {
        $idgrandp = $this->input->post('idgrandp');
        $data = $this->m_kegiatan->get_program($idgrandp);
        echo json_encode($data);
    }
    function get_subprogram()
    {
        $idprogram = $this->input->post('idprogram');
        $data = $this->m_kegiatan->get_subprogram($idprogram);
        echo json_encode($data);
    }
    function get_komponen()
    {
        $idsubp = $this->input->post('idsubp');
        $data = $this->m_kegiatan->get_komponen($idsubp);
        echo json_encode($data);
    }

    function simpan_data()
    {
        $nmkegiatan = strip_tags($this->input->post('nmkegiatan'));
        $idkomp = $this->input->post('idkomp');
        $kdkegiatan = $this->input->post('kdkegiatan');
        $pagu = $this->input->post('pagu');
        $volume = $this->input->post('volume');
        $satuan = $this->input->post('satuan');
        $hargasatuan = $this->input->post('hargasatuan');


        $this->m_kegiatan->simpan_data($nmkegiatan, $idkomp, $kdkegiatan, $pagu, $volume, $satuan, $hargasatuan);
        echo $this->session->set_flashdata('msg', 'success');
        redirect('panitia/kegiatan');
    }
	
	 function edit_data()
    {
	
	
      
        $idkegiatan = strip_tags($this->input->post('idkegiatan'));
      $nmkegiatan = strip_tags($this->input->post('nmkegiatan'));
	    $kdkegiatan = $this->input->post('kdkegiatan');
        $pagu = $this->input->post('pagu');
        $volume = $this->input->post('volume');
        $satuan = $this->input->post('satuan');
        $hargasatuan = $this->input->post('hargasatuan');
		$realisasi = $this->input->post('realisasi');
		
		if($realisasi>$pagu)
		{
		 echo $this->session->set_flashdata('msg', 'warning');
        redirect('panitia/rkakl');
		}
		else
		{
        $this->m_kegiatan->ubah_data($idkegiatan, $nmkegiatan, $kdkegiatan, $pagu, $volume, $satuan, $hargasatuan, $realisasi);
        echo $this->session->set_flashdata('msg', 'success-edit');
        redirect('panitia/rkakl');
		
    	}
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
}
