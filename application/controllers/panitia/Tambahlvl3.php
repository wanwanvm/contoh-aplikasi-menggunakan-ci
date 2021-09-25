<?php
class Tambahlvl3 extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('masukpanitia') != TRUE) {
            $url = base_url('adminpanitia');
            redirect($url);
        };
        $this->load->model('m_akunlvl3');
    }
    function index()
    {
        //	$kode=$this->session->userdata('idadmin');
        //		$x['user']=$this->m_peserta->get_peserta_login($kode);
        $x['data'] = $this->m_akunlvl3->get_akun1();
        $this->load->view('panitia/v_tambahlvl3', $x);
    }

    function get_akun2()
    {
        $idlvl1 = $this->input->post('idlvl1');
        $data = $this->m_akunlvl3->get_akun2($idlvl1);
        echo json_encode($data);
    }

    function simpan_data()
    {

        $nmakun3 = strip_tags($this->input->post('nmakun3'));
        $kdakun3 = $this->input->post('kdakun3');
        $idlvl2 = $this->input->post('idlvl2');

        $this->m_akunlvl3->simpan_data($nmakun3, $kdakun3, $idlvl2);
        echo $this->session->set_flashdata('msg', 'success');
        redirect('panitia/akunlvl3');
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
