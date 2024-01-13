<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        //session agar user tidak bisa masuk halaman jika belum login  meski menggganti url browser (rekomtek_helper.php)
        is_logged_in();
    }


    public function index()
    {

        $data['title'] = 'Selamat Datang';
        //memanggil nama agar muncul saat login success
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();

        $this->load->model('m_rekomtek');

        $data['rekomtek_data'] = $this->m_rekomtek->rekomtekByNamaPemohon($data['user']['name']);


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/index', $data);
        $this->load->view('templates/footer');
    }

    public function edit()
    {

        $data['title'] = 'Edit Profile';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        $this->form_validation->set_rules('name', 'Full Name', 'required|trim');

        //submit edit profile jika success 
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/editprofile', $data);
            $this->load->view('templates/footer');
        } else {

            $name = $this->input->post('name');
            $email = $this->input->post('email');
            $no_hp = $this->input->post('no_hp');
            $alamat_pemohon = $this->input->post('alamat_pemohon');
            $nama_perusahaan = $this->input->post('nama_perusahaan');
            $alamat_perusahaan = $this->input->post('alamat_perusahaan');
            $nama_direktur = $this->input->post('nama_direktur');
            $pekerjaan = $this->input->post('pekerjaan');

            $this->db->set('name', $name);
            $this->db->set('no_hp', $no_hp);
            $this->db->set('alamat_pemohon', $alamat_pemohon);
            $this->db->set('nama_perusahaan', $nama_perusahaan);
            $this->db->set('alamat_perusahaan', $alamat_perusahaan);
            $this->db->set('nama_direktur', $nama_direktur);
            $this->db->set('pekerjaan', $pekerjaan);
            $this->db->where('email', $email);
            $this->db->update('user');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Profil berhasil diubah!</div>');
            redirect('user/edit');
        }
    }
    public function editrekomtek($id)
    {
        $data['title'] = 'Data Anda';
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();

        $where = array('id' => $id);
        $data['rekomtek'] = $this->m_rekomtek->edit_data($where, 'rekomtek')->result();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/edituser', $data);
        $this->load->view('templates/footer');
    }

    public function updaterekomtek()
    {
        $id = $this->input->post('id');
        $nama_pemohon = $this->input->post('nama_pemohon');
        $alamat_pemohon = $this->input->post('alamat_pemohon');
        $no_hp = $this->input->post('no_hp');
        $email = $this->input->post('email');
        $jenis_izin = $this->input->post('jenis_izin');
        $balai = $this->input->post('balai');
        $sumber_air = $this->input->post('sumber_air');
        $longitude = $this->input->post('longitude');
        $latitude = $this->input->post('latitude');
        $kelurahan_desa = $this->input->post('kelurahan_desa');
        $kecamatan = $this->input->post('kecamatan');
        $kabupaten_kota = $this->input->post('kabupaten_kota');
        $provinsi = $this->input->post('provinsi');
        $balai2 = $this->input->post('balai2');
        $wilayah_sungai = $this->input->post('wilayah_sungai');
        $das = $this->input->post('das');
        $tujuan = $this->input->post('tujuan');
        $cara_pengambilan = $this->input->post('cara_pengambilan');
        $cara_pembuangan = $this->input->post('cara_pembuangan');
        $volume_pengambilan_literdetik = $this->input->post('volume_pengambilan_literdetik');
        $jamhari_pengambilan = $this->input->post('jamhari_pengambilan');
        $haribulan_pengambilan = $this->input->post('haribulan_pengambilan');
        $volume_pengambilan_perbulan = $this->input->post('volume_pengambilan_perbulan');
        $jangka_waktu = $this->input->post('jangka_waktu');

        $data = array(
            'nama_pemohon' => $nama_pemohon,
            'alamat_pemohon' => $alamat_pemohon,
            'no_hp' => $no_hp,
            'email' => $email,
            'jenis_izin' => $jenis_izin,
            'balai' => $balai,
            'sumber_air' => $sumber_air,
            'longitude' => $longitude,
            'latitude' => $latitude,
            'kelurahan_desa' =>  $kelurahan_desa,
            'kecamatan' =>  $kecamatan,
            'kabupaten_kota' => $kabupaten_kota,
            'provinsi' =>  $provinsi,
            'balai2' =>  $balai2,
            'wilayah_sungai' =>  $wilayah_sungai,
            'das' => $das,
            'tujuan' => $tujuan,
            'cara_pengambilan' => $cara_pengambilan,
            'cara_pembuangan' => $cara_pembuangan,
            'volume_pengambilan_literdetik' => $volume_pengambilan_literdetik,
            'jamhari_pengambilan' => $jamhari_pengambilan,
            'haribulan_pengambilan' => $haribulan_pengambilan,
            'volume_pengambilan_perbulan' =>  $volume_pengambilan_perbulan,
            'jangka_waktu' => $jangka_waktu

        );
        $where = array(
            'id' => $id
        );
        $this->m_rekomtek->update_data($where, $data, 'rekomtek');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Permohonan berhasil diperbarui!</div>');
        redirect('user');
    }
}
