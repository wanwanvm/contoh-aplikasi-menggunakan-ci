<?php
class Login extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_loginpanitia');
    }
    function index()
    {
        $this->load->view('panitia/v_login');
    }
    function auth()
    {
        $username = strip_tags(str_replace("'", "", $this->input->post('username')));
        $password = strip_tags(str_replace("'", "", $this->input->post('password')));
        $tahun = strip_tags(str_replace("'", "", $this->input->post('tahun')));
        $upp = $username;
        $ppp = $password;
        $cpanitia = $this->m_loginpanitia->cekpanitia($upp, $ppp);
        //echo json_encode($cadmin);
        if ($cpanitia->num_rows() > 0) {
            $this->session->set_userdata('masukpanitia', true);
            $this->session->set_userdata('user', $upp);
            $xcpanitia = $cpanitia->row_array();

            if (password_verify($ppp, $xcpanitia['password'])) {
                //$this->session->set_userdata('akses','1');
                $kdadmin = $xcpanitia['kdadmin'];
                $username = $xcpanitia['username'];
                $this->session->set_userdata('kdadmin', $kdadmin);
                $this->session->set_userdata('username', $username);
                $this->session->set_userdata('tahun', $tahun);
                redirect('panitia/dashboard');
            } else {
                // login gagal

                echo $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert"><span class="fa fa-close"></span></button> Username Atau Password Salah</div>');
                redirect('panitia/login');
            }
        } else {
            echo $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert"><span class="fa fa-close"></span></button> Username Atau Password Salah</div>');
            redirect('panitia/login');
        }
    }

    function logout()
    {
        $this->session->sess_destroy();
        redirect('panitia/login');
    }
}
