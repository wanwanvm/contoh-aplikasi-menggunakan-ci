<?php
class Tambahaktiva extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('masukpanitia') != TRUE) {
            $url = base_url('adminpanitia');
            redirect($url);
        };
        $this->load->model('m_aktiva');
    }
    function index()
    {
        //	$kode=$this->session->userdata('idadmin');
        //		$x['user']=$this->m_peserta->get_peserta_login($kode);
        //$x['data'] = $this->m_grandp->get_akun1();
        //$this->load->view('panitia/v_tambahgrandp', $x);
        $x['kode'] = $this->m_aktiva->kode();
        $x['data'] = $this->m_aktiva->get_kdakun5();
        $this->load->view('panitia/v_tambahaktiva', $x);
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


        //  $tanggal = date_to_en($tgl_lahir);

        $kdaktiva = $this->m_aktiva->kode();
        // $kdsaldo = $this->input->post('kdsaldo');
        $kdakun5 = $this->input->post('kdakun5');
        $nmaktiva = strip_tags($this->input->post('nmaktiva'));
        $nomaktiva = $this->input->post('nomaktiva');
        $nobukti = $this->input->post('nobukti');
        $tgltransaksi = $this->input->post('tgltransaksi');
        // $tgltransaksi = date_to_en($tgl);



        $this->m_aktiva->simpan_data($kdaktiva, $kdakun5, $nmaktiva, $nomaktiva, $nobukti, $tgltransaksi);
        echo $this->session->set_flashdata('msg', 'success');
        redirect('panitia/aktiva');
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
