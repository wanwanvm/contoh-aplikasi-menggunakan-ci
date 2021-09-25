<?php
class Tambahkewajiban extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('masukpanitia') != TRUE) {
            $url = base_url('adminpanitia');
            redirect($url);
        };
        $this->load->model('m_kewajiban');
    }
    function index()
    {
        //	$kode=$this->session->userdata('idadmin');
        //		$x['user']=$this->m_peserta->get_peserta_login($kode);
        //$x['data'] = $this->m_grandp->get_akun1();
        //$this->load->view('panitia/v_tambahgrandp', $x);
        $x['kode'] = $this->m_kewajiban->kode();
        $x['data'] = $this->m_kewajiban->get_kdakun5();
        $this->load->view('panitia/v_tambahkewajiban', $x);
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

        $kdkewajiban = $this->m_kewajiban->kode();
        // $kdsaldo = $this->input->post('kdsaldo');
        $idlvl5 = $this->input->post('idlvl5');
        $nmkewajiban = strip_tags($this->input->post('nmkewajiban'));
        $nomkewajiban = $this->input->post('nomkewajiban');
        $nobukti = $this->input->post('nobukti');
        $tgltransaksi = $this->input->post('tgltransaksi');
        // $tgltransaksi = date_to_en($tgl);



        $this->m_kewajiban->simpan_data($kdkewajiban, $idlvl5, $nmkewajiban, $nomkewajiban, $nobukti, $tgltransaksi);
        echo $this->session->set_flashdata('msg', 'success');
        /*$this->load->view('panitia/v_login');
        $this->load->library('dompdf_gen');
        $paper_size = 'A4';
        $orientation = 'landscape';
        $html = $this->output->get_output();
        $this->dompdf->set_paper($paper_size, $orientation);
        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("laporan_mahasiswa.pdf", array('Attachment' => 0));
        */
        redirect('panitia/kewajiban');
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
