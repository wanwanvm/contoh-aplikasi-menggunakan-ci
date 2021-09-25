<?php
class Saldodana extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('masukpanitia') != TRUE) {
            $url = base_url('adminpanitia');
            redirect($url);
        };
        $this->load->model('m_saldodana');
    }


    function index()
    {
        //	$kode=$this->session->userdata('idadmin');
        //		$x['user']=$this->m_peserta->get_peserta_login($kode);
        $x['data'] = $this->m_saldodana->get_all_saldodana();
        $this->load->view('panitia/v_saldodana', $x);
    }
}
