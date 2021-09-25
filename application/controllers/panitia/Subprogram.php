<?php
class Subprogram extends CI_Controller
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
        $x['data'] = $this->m_subprogram->get_all_subprogram();
        $this->load->view('panitia/v_subprogram', $x);
    }

    function hapus_akun()
    {
        //$kdakun4 = strip_tags($this->input->get('kdakun4'));
        $kdakun5 = strip_tags(str_replace("'", "", $this->input->get('kdakun5')));
        //cel email
        $cekakun = $this->m_akunlvl5->cekakun($kdakun5);
        //echo json_encode($cadmin);
        if ($cekakun->num_rows() > 0) {
            //echo $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert"><span class="fa fa-close"></span></button>  Tidak Dapat Di hapus karena akun sudah di gunakan di Level 5 </div>');
            echo $this->session->set_flashdata('msg', 'penerimaan-cek');
            redirect('panitia/akunlvl5');
        } else {
            $this->m_akunlvl5->hapus_akun($kdakun5);
            echo $this->session->set_flashdata('msg', 'success-hapus');
            redirect('panitia/akunlvl5');
        }
    }
}
