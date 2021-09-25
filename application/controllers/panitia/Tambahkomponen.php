<?php
class Tambahkomponen extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('masukpanitia') != TRUE) {
            $url = base_url('adminpanitia');
            redirect($url);
        };
        $this->load->model('m_komponen');
    }
    function index()
    {
        //	$kode=$this->session->userdata('idadmin');
        //		$x['user']=$this->m_peserta->get_peserta_login($kode);
        //$x['data'] = $this->m_grandp->get_akun1();
        //$this->load->view('panitia/v_tambahgrandp', $x);
        $x['data'] = $this->m_komponen->get_kode();
        $this->load->view('panitia/v_tambahkomponen', $x);
    }

    function get_program()
    {
        $idgrandp = $this->input->post('idgrandp');
        $data = $this->m_komponen->get_program($idgrandp);
        echo json_encode($data);
    }
    function get_subprogram()
    {
        $idprogram = $this->input->post('idprogram');
        $data = $this->m_komponen->get_subprogram($idprogram);
        echo json_encode($data);
    }
    function simpan_data()
    {
        $nmkomp = strip_tags($this->input->post('nmkomp'));
        $idsubp = $this->input->post('idsubp');
        $kdkomp = $this->input->post('kdkomp');


        $this->m_komponen->simpan_data($nmkomp, $idsubp, $kdkomp);
        echo $this->session->set_flashdata('msg', 'success');
        redirect('panitia/komponen');
    }
    function edit_data()
    {
        $nmkomp = strip_tags($this->input->post('nmkomp'));
        $idkomp = $this->input->post('idkomp');
        $kdkomp = $this->input->post('kdkomp');


        $this->m_komponen->edit_data($nmkomp, $idkomp, $kdkomp);
        echo $this->session->set_flashdata('msg', 'success-edit-komp');
        redirect('panitia/rkakl');
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
