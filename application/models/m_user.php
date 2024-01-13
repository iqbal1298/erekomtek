<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_user extends CI_Model
{
    public function TampilData()
    {
        return $this->db->get('user')->result_array();
    }


    public function hapusDataUser($id)
    {

        $userToHapus = $this->db->get_where('user', ['id' => $id])->row_array();

        $this->db->where('id', $id);
        $this->db->delete('user');

        if ($userToHapus['role_id'] == 1 && $this->session->userdata('role_id') == 1) {
            $this->logoutPaksa();
        }
    }
    private function logoutPaksa()
    {
        $CI = &get_instance();
        $CI->load->library('session');
        $CI->session->unset_userdata('username');
        $CI->session->unset_userdata('role_id');

        redirect('frontpage/#login');
    }



    public function edit_data($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
    public function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    public function insertUser($data)
    {
        $this->db->insert('user', $data);
    }
}
