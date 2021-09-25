<?php
class Tambahpenyaluran extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('masukpanitia') != TRUE) {
            $url = base_url('adminpanitia');
            redirect($url);
        };
        $this->load->model('m_penyaluran');
    }
    function index()
    {
        //	$kode=$this->session->userdata('idadmin');
        //		$x['user']=$this->m_peserta->get_peserta_login($kode);
        //$x['data'] = $this->m_grandp->get_akun1();
        //$this->load->view('panitia/v_tambahgrandp', $x);
        $x['kode'] = $this->m_penyaluran->kode();
        $x['data'] = $this->m_penyaluran->get_kdakun5();
        $x['keg'] = $this->m_penyaluran->get_kegiatan();
        $x['jabat'] = $this->m_penyaluran->get_pejabat();
        $this->load->view('panitia/v_tambahpenyaluran', $x);
    }

    function get_pagu()
    {
        $idkegiatan = $this->input->post('idkegiatan');
        $data = $this->m_penyaluran->get_pagu($idkegiatan);
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

        $kdpenyaluran = $this->m_penyaluran->kode();
        // $kdsaldo = $this->input->post('kdsaldo');
        $idlvl5 = $this->input->post('idlvl5');
        $idkegiatan = $this->input->post('idkegiatan');
        $nmpenyaluran = strip_tags($this->input->post('nmpenyaluran'));
        $nompenyaluran = $this->input->post('nompenyaluran');
        $nmpenerima = $this->input->post('nmpenerima');
        $jabatan = $this->input->post('jabatan');
        $alamat = $this->input->post('alamat');
        $tgltransaksi = $this->input->post('tgltransaksi');
        $ketua = $this->input->post('ketua');
        $bendahara = $this->input->post('bendahara');
        $sisapagu = $this->input->post('sisapagu');
        $upsisapagu = $sisapagu - $nompenyaluran;
        $pagu = $this->input->post('pagu');
        $thntran = date("Y", strtotime($tgltransaksi));
        $tahun = $this->session->userdata('tahun');
        if (empty($nompenyaluran)) {
            echo $this->session->set_flashdata('msg', 'error-nom');
            redirect('panitia/tambahpenyaluran');
        }
        if ($tahun != $thntran) {
            echo $this->session->set_flashdata('msg', 'error-thn');
            redirect('panitia/tambahpenyaluran');
        }

        if ($nompenyaluran > $sisapagu) {
            echo $this->session->set_flashdata('msg', 'error-pagu');
            redirect('panitia/tambahpenyaluran');
        } else {
            // $tgltransaksi = date_to_en($tgl);

            //barcode
            $this->load->library('zend');
            $this->zend->load('Zend/Barcode');
            $image_resource = Zend_Barcode::factory('code128', 'image', array('text' => $kdpenyaluran), array())->draw();
            $image_name     = $kdpenyaluran . '.jpg';
            $image_dir      = './assets/images/'; // penyimpanan file barcode
            imagejpeg($image_resource, $image_dir . $image_name);
            //batas barcode

            $this->m_penyaluran->simpan_data($kdpenyaluran, $idlvl5, $idkegiatan, $nmpenyaluran, $nompenyaluran, $nmpenerima, $jabatan, $alamat, $tgltransaksi, $image_name, $ketua, $bendahara, $upsisapagu);

            echo $this->session->set_flashdata('msg', 'success');
            redirect('panitia/penyaluran');
            /*
        $x['kode'] = $kdpenyaluran;
      //$this->load->view('panitia/v_kwitansi', $x);
        //echo $this->session->set_flashdata('msg', 'success');


        $this->load->library('dompdf_gen');
        $paper_size = 'A4';
        $orientation = 'portrait';
        $this->load->view('panitia/v_kwitansi', $x);
        $html = $this->output->get_output();
        $this->dompdf->set_paper($paper_size, $orientation);
        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("laporan_mahasiswa.pdf",array('Attachment' => 0));
		
	*/
        }
    }
    function cetak_kwitansi()
    {
        $nik = $this->input->get('nik');
        //$x['kode'] = $kdpenyaluran;
        //$this->load->view('panitia/v_kwitansi', $x);
        //echo $this->session->set_flashdata('msg', 'success');


        $this->load->library('dompdf_gen');
        $paper_size = 'A4';
        $orientation = 'portrait';
        $this->load->view('panitia/v_kwitansi', $nik);
        $html = $this->output->get_output();
        $this->dompdf->set_paper($paper_size, $orientation);
        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream($nik . "-formulir.pdf", array('Attachment' => 0));
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


        //  $tanggal = date_to_en($tgl_lahir);

        $kdpenyaluran = $this->input->post('kdpenyaluran');
        // $kdsaldo = $this->input->post('kdsaldo');
        $idlvl5 = $this->input->post('idlvl5');
        // $idkegiatan = $this->input->post('idkegiatan');
        $nmpenyaluran = strip_tags($this->input->post('nmpenyaluran'));
        $nompenyaluran = $this->input->post('nompenyaluran');
        $nmpenerima = $this->input->post('nmpenerima');
        $jabatan = $this->input->post('jabatan');
        $alamat = $this->input->post('alamat');
        $tgltransaksi = $this->input->post('tgltransaksi');
        $ketua = $this->input->post('ketua');
        $bendahara = $this->input->post('bendahara');
        //$sisapagu=$this->input->post('sisapagu');
        //$upsisapagu=$sisapagu-$nompenyaluran;
        //$pagu=$this->input->post('pagu');
        $thntran = date("Y", strtotime($tgltransaksi));
        $tahun = $this->session->userdata('tahun');

        if ($tahun != $thntran) {
            echo $this->session->set_flashdata('msg', 'error-thn');
            redirect('panitia/penyaluran');
        } else {

            $this->m_penyaluran->edit_data($kdpenyaluran, $idlvl5, $nmpenyaluran, $nmpenerima, $jabatan, $alamat, $tgltransaksi, $ketua, $bendahara);

            echo $this->session->set_flashdata('msg', 'success');
            redirect('panitia/penyaluran');
            //proses
        }
    }
}
