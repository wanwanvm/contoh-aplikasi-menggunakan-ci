<?php
class Cetakpagu extends CI_Controller
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
       //$this->load->view('panitia/v_cetakpagu', $x);
		$tahun = $this->session->userdata('tahun');
		$this->load->library('dompdf_gen');
        $paper_size = 'A4';
        $orientation = 'portrait';
        $this->load->view('panitia/v_cetakpagu', $x);
        $html = $this->output->get_output();
        $this->dompdf->set_paper($paper_size, $orientation);
        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream($tahun."pagu.pdf",array('Attachment' => 0));
		
    }
}
