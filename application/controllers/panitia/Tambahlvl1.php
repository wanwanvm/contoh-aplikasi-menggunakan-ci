<?php
class Tambahlvl1 extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('masukpanitia') != TRUE) {
            $url = base_url('adminpanitia');
            redirect($url);
        };
        $this->load->model('m_akunlvl1');
    }
    function index()
    {
        //	$kode=$this->session->userdata('idadmin');
        //		$x['user']=$this->m_peserta->get_peserta_login($kode);
        // $x['data'] = $this->m_akunlvl4->get_akun1();
        $this->load->view('panitia/v_tambahlvl1');
    }


    function simpan_data()
    {

        $nmakun1 = strip_tags($this->input->post('nmakun1'));
        $kdakun1 = $this->input->post('kdakun1');

        $this->m_akunlvl1->simpan_data($nmakun1, $kdakun1);
        echo $this->session->set_flashdata('msg', 'success');
        redirect('panitia/akunlvl1');
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
