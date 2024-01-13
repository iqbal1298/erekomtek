<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }


    public function index()
    {
        if ($this->session->userdata('username')) {
            redirect('user');
        }
        $this->form_validation->set_rules('username', 'Usernamee', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login';
            $this->load->view('frontpage/index');
            $this->load->view('frontpage/wrapper', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Username atau Password tidak boleh kosong!</div>');

            redirect('frontpage/#login');
        } else {
            // validasinya success
            $this->_login();
        }
    }


    private function _login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        if (empty($username) || empty($password)) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Username atau Password tidak boleh kosong!</div>');
            redirect('frontpage/#login');
        }

        $user = $this->db->get_where('user', ['username' => $username])->row_array();
        //usernya ada
        if ($user) {
            if ($user['is_active'] == 1) {
                //cek password
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'username' => $user['username'],
                        'role_id' => $user['role_id']
                    ];
                    $this->session->set_userdata($data);
                    if ($user['role_id'] == 1) {
                        redirect('admin');
                    } else {
                        redirect('user');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password salah!</div>');
                    redirect('frontpage/#login');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Akun belum terdaftar/belum aktivasi!</div>');
                redirect('frontpage/#login');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Username Salah</div>');
            redirect('frontpage/#login');
        }
    }




    public function registration()
    {
        $this->load->library('form_validation');

        if ($this->session->userdata('username')) {
            redirect('user');
        }
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password1', 'password', 'required|trim|min_length[3]|matches[password2]', ['matches' => 'Password tidak cocok!', 'min_length' => 'Password terlalu pendek!']);
        $this->form_validation->set_rules('password2', 'password', 'required|trim|min_length[3]|matches[password1]');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('nohp', 'Nohp', 'required|trim');


        if ($this->form_validation->run() == false) {
            $data = array(
                'title' => 'E-Rekomtek',
                'isi' => 'frontpage/index'
            );

            $this->load->view('frontpage/wrapper', $data);
        } else {
            $data = [
                'name' => $this->input->post('name'),
                'username' => $this->input->post('username'),
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'email' => $this->input->post('email'),
                'no_hp' => $this->input->post('nohp'),
                'role_id' => 2,
                'is_active' => 1,
                'date_created' => time()
            ];

            $this->db->insert('user', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat! Anda berhasil mendaftar, silakan login untuk membuat permohonan!</div>');
            redirect('frontpage/#login');
        }

        // if (validation_errors()) {
        //     $this->session->set_flashdata('errors', validation_errors());
        // }
        // redirect('frontpage/#pendaftaran');
    }



    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('role_id');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Anda berhasil Logged Out</div>');
        redirect('frontpage/#login');
    }

    public function blocked()
    {
        echo 'access blocked!';
    }
}
