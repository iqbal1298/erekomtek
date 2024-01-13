<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kelolauser extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_user');
    }

    public function index()
    {
        $data['title'] = 'Kelola Users';
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();

        $data['users'] = $this->m_user->TampilData();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('kelolauser/index', $data);
        $this->load->view('templates/footer');
    }


    public function hapus($id)
    {


        $this->m_user->hapusDataUser($id);
        $this->session->set_flashdata('flash', 'Dihapus');

        redirect('kelolauser');
    }

    public function edit($id)
    {
        $data['title'] = 'Update';
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();

        $where = array('id' => $id);
        $data['users'] = $this->m_user->edit_data($where, 'user')->result();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('kelolauser/edituser', $data);
        $this->load->view('templates/footer');
    }
    public function update()
    {

        $this->load->library('form_validation');

        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password1', 'password', 'required|trim|min_length[3]');
        $this->form_validation->set_rules('password2', 'Ulangi Password', 'required|trim|matches[password1]');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('no_hp', 'No_hp', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->edit($this->input->post('id'));
        } else {

            $id = $this->input->post('id');
            $username = $this->input->post('username');
            $name = $this->input->post('name');
            $email = $this->input->post('email');
            $no_hp = $this->input->post('no_hp');
            $role_id = $this->input->post('role_id');

            $data = array(
                'username' => $username,
                'password' => $password,
                'name' => $name,
                'email' => $email,
                'no_hp' => $no_hp,
                'role_id' => $role_id

            );

            $password = $this->input->post('password1');
            if (!empty($password)) {
                $data['password'] = password_hash($password, PASSWORD_DEFAULT);
            }
            $where = array(
                'id' => $id
            );
            $this->m_user->update_data($where, $data, 'user');
            $this->session->set_flashdata('message3', '<div class="alert alert-success" role="alert">Akun berhasil diupdate!</div>');
            redirect('kelolauser');
        }
    }
    public function addUserView()
    {
        $data['title'] = 'Add New User';
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('kelolauser/tambahuser', $data);
        $this->load->view('templates/footer');
    }

    public function aksitambah()
    {

        $this->load->library('form_validation');

        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password1', 'password', 'required|trim|min_length[3]|matches[password2]', ['matches' => 'Password dont match!', 'min_length' => 'Password too short!']);
        $this->form_validation->set_rules('password2', 'password', 'required|trim|min_length[3]|matches[password1]');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('no_hp', 'No_hp', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->addUserView();
        } else {
            $DataInsert = [
                'name' => $this->input->post('name'),
                'username' => $this->input->post('username'),
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'email' => $this->input->post('email'),
                'no_hp' => $this->input->post('no_hp'),
                'role_id' => $this->input->post('role_id'),
                'is_active' => 1,
                'date_created' => time()
            ];
            $this->m_user->insertUser($DataInsert);
            $this->session->set_flashdata('message3', '<div class="alert alert-success" role="alert">Akun berhasil ditambahkan!</div>');
            redirect(base_url('kelolauser'));
        }
    }
}
