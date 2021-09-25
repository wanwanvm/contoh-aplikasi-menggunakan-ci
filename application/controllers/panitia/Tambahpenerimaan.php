<?php
class Tambahpenerimaan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('masukpanitia') != TRUE) {
            $url = base_url('adminpanitia');
            redirect($url);
        };
        $this->load->model('m_penerimaan');
    }
    function index()
    {
        //	$kode=$this->session->userdata('idadmin');
        //		$x['user']=$this->m_peserta->get_peserta_login($kode);
        //$x['data'] = $this->m_grandp->get_akun1();
        //$this->load->view('panitia/v_tambahgrandp', $x);
        $x['kode'] = $this->m_penerimaan->kode();
        $x['data'] = $this->m_penerimaan->get_kdakun5();
		$x['data2'] = $this->m_penerimaan->get_idtrans();
		$x['data3'] = $this->m_penerimaan->get_idrek();
        $this->load->view('panitia/v_tambahpenerimaan', $x);
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

        $kdpenerimaan = $this->m_penerimaan->kode();
        // $kdsaldo = $this->input->post('kdsaldo');
        $idlvl5 = $this->input->post('idlvl5');
        $nmpenerimaan = strip_tags($this->input->post('nmpenerimaan'));
        $nompenerimaan = $this->input->post('nompenerimaan');
        $nobukti = $this->input->post('nobukti');
        $tgltransaksi = $this->input->post('tgltransaksi');
		$idtrans = $this->input->post('idtrans');
		$idrek = $this->input->post('idrek');
		
        // $tgltransaksi = date_to_en($tgl);



        $this->m_penerimaan->simpan_data($kdpenerimaan, $idlvl5, $nmpenerimaan, $nompenerimaan, $nobukti, $tgltransaksi,$idtrans,$idrek);
        echo $this->session->set_flashdata('msg', 'success');
        redirect('panitia/penerimaan');
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
