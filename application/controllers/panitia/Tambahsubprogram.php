<?php
class Tambahsubprogram extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('masukpanitia') != TRUE) {
            $url = base_url('adminpanitia');
            redirect($url);
        };
        $this->load->model('m_subprogram');
    }
    function index()
    {
        //	$kode=$this->session->userdata('idadmin');
        //		$x['user']=$this->m_peserta->get_peserta_login($kode);
        //$x['data'] = $this->m_grandp->get_akun1();
        //$this->load->view('panitia/v_tambahgrandp', $x);
        $x['data'] = $this->m_subprogram->get_kode();
        $this->load->view('panitia/v_tambahsubprogram', $x);
    }

    function get_program()
    {
        $grandp = $this->input->post('grandp');
        $data = $this->m_subprogram->get_program($grandp);
        echo json_encode($data);
    }
    function simpan_data()
    {
        $nmsubp = strip_tags($this->input->post('nmsubp'));
        $program = $this->input->post('program');
        $kdsubp = $this->input->post('kdsubp');

        $this->m_subprogram->simpan_data($nmsubp, $program, $kdsubp);
        echo $this->session->set_flashdata('msg', 'success');
        redirect('panitia/subprogram');
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
    function edit_data()
    {
        $nmsubp = strip_tags($this->input->post('nmsubp'));
        $idsubp = $this->input->post('idsubp');
        $kdsubp = $this->input->post('kdsubp');


        $this->m_subprogram->edit_data($nmsubp, $idsubp, $kdsubp);
        echo $this->session->set_flashdata('msg', 'success-edit-subp');
        redirect('panitia/rkakl');
    }
}
