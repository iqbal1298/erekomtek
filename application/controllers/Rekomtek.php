<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Rekomtek extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_rekomtek');
    }


    public function index()
    {
        $config['base_url']     = site_url('rekomtek/index');
        $config['total_rows']   = $this->db->count_all('rekomtek');
        $config['per_page']     = 5;
        $config['uri_segment']  = 3;
        $choice                 = $config["total_rows"] / $config['per_page'];
        $config["num_links"]    = floor($choice);

        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '</span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tag_close']   = '<span aria-hidden="true">&raquo</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tag_close']   = '</span></li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tag_close']  = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tag_close']   = '</span></li>';

        $this->pagination->initialize($config);
        $data['page']   = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        $data['title'] = 'Data Pemohon';
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();

        $data['rekomtek'] = $this->m_rekomtek->TampilData($config["per_page"], $data['page']);
        $data['pagination'] = $this->pagination->create_links();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('rekomtek/index', $data);
        $this->load->view('templates/footer');
    }



    public function ditolak()
    {

        $status = $this->input->get('status') ? $this->input->get('status') : 'Rekomtek Ditolak';
        $config['base_url']     = site_url('rekomtek/index?status=' . $status);
        $config['total_rows']   = $this->m_rekomtek->hitungStatus($status);

        $data['title'] = 'Data Pemohon';
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();

        $data['rekomtek'] = $this->m_rekomtek->TampilDatabyStatus($status);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('rekomtek/rekomtek_ditolak', $data);
        $this->load->view('templates/footer');
    }

    public function disetujui()
    {

        $status = $this->input->get('status') ? $this->input->get('status') : 'Rekomtek Anda Disetujui';
        $config['base_url']     = site_url('rekomtek/index?status=' . $status);
        $config['total_rows']   = $this->m_rekomtek->hitungStatus($status);

        $data['title'] = 'Data Pemohon';
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();

        $data['rekomtek'] = $this->m_rekomtek->TampilDatabyStatus($status);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('rekomtek/rekomtek_disetujui', $data);
        $this->load->view('templates/footer');
    }

    public function dalamproses()
    {

        $config['base_url']     = site_url('rekomtek/index');

        $data['title'] = 'Data Pemohon';
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();

        $this->db->where_not_in('status', ['Rekomtek Anda DIsetujui', 'Rekomtek Ditolak']);
        $data['rekomtek'] = $this->m_rekomtek->TampilDataDalamProses();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('rekomtek/rekomtek_dalamproses', $data);
        $this->load->view('templates/footer');
    }



    public function detail($id)
    {

        $data['title'] = 'Detail';
        // $data['files'] = directory_map("./uploads/file");

        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();

        $data['rekomtek'] = $this->m_rekomtek->getRekomtekById($id);
        $data['id'] = $id;

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('rekomtek/detailrekomtek', $data);
        $this->load->view('templates/footer');
    }



    public function hapus($id)
    {
        $this->m_rekomtek->hapusDataRekomtek($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('rekomtek');
    }


    public function formview()
    {
        $data['kode'] = $this->m_rekomtek->kode();

        $data['title'] = 'Form Permohonan';
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();
        $data['data']   = $this->db->get('rekomtek')->result();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('rekomtek/formrekomtek', $data);
        $this->load->view('templates/footer');
    }

    public function aksiInsert()
    {
        $this->form_validation->set_rules('nama_pemohon', 'Nama Pemohon', 'required');
        $this->form_validation->set_rules('no_hp', 'No HP', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('jenis_izin', 'Jenis Izin', 'callback_validate_jenis_izin');
        $this->form_validation->set_rules('balai', 'Balai', 'callback_validate_balai');
        $this->form_validation->set_rules('sumber_air', 'Sumber Air', 'required', ['required' => 'Sumber Air harus diisi']);
        $this->form_validation->set_rules('longitude', 'Longitude', 'required', ['required' => 'Longitude harus diisi']);
        $this->form_validation->set_rules('latitude', 'Latitude', 'required', ['required' => 'Latitude harus diisi']);
        $this->form_validation->set_rules('kelurahan_desa', 'Kelurahan/Desa', 'required', ['required' => 'Kelurahan/Desa harus diisi']);
        $this->form_validation->set_rules('kecamatan', 'Kecamatan', 'required', ['required' => 'Kecamatan harus diisi']);
        $this->form_validation->set_rules('kabupaten_kota', 'Kabupaten/Kota', 'required', ['required' => 'Kabupaten/Kota Air harus diisi']);
        $this->form_validation->set_rules('provinsi', 'Provinsi', 'callback_validate_provinsi');
        $this->form_validation->set_rules('balai2', 'Balai2', 'callback_validate_balai2');
        $this->form_validation->set_rules('wilayah_sungai', 'Wilayah Sungai', 'callback_validate_wilayah_sungai');

        $this->form_validation->set_rules('tujuan', 'Tujuan Pengambilan Air', 'required', ['required' => 'Tujuan harus diisi']);
        $this->form_validation->set_rules('cara_pengambilan', 'Cara Pengambilan Air', 'required', ['required' => 'Cara Pengambilan harus diisi']);
        $this->form_validation->set_rules('cara_pembuangan', 'Cara Pengambilan Air', 'required', ['required' => 'Cara Pembuangan harus diisi']);
        $this->form_validation->set_rules('volume_pengambilan_literdetik', 'Volume Pengambilan (liter/detik)', 'required', ['required' => 'Volume Pengambilan harus diisi']);
        $this->form_validation->set_rules('jamhari_pengambilan', 'Jam/Hari Pengambilan', 'required', ['required' => 'Jam/Hari Pengambilan harus diisi']);
        $this->form_validation->set_rules('haribulan_pengambilan', 'Hari/Bulan Pengambilan', 'required', ['required' => 'Hari/bulan Pengambilan harus diisi']);
        $this->form_validation->set_rules('volume_pengambilan_perbulan', 'Volume Pengambilan (per Bulan)', 'required', ['required' => 'Volume Pengambilan harus diisi']);
        $this->form_validation->set_rules('jangka_waktu', 'Jangka Waktu Izin (tahun)', 'required', ['required' => 'Jangka Waktu Izin harus diisi']);
        $this->form_validation->set_rules('status', 'Status', 'required');
        $this->form_validation->set_rules('no_pengajuan', 'Nomor Pengajuan', 'required');
        $this->form_validation->set_rules('tgl', 'Tanggal', 'required');




        $this->form_validation->set_message('validate_jenis_izin', 'Jenis Izin harus dipilih!');
        $this->form_validation->set_message('validate_balai', 'Balai harus dipilih!');
        $this->form_validation->set_message('validate_balai2', 'Balai harus dipilih!');
        $this->form_validation->set_message('validate_provinsi', 'Provinsi harus dipilih!');
        $this->form_validation->set_message('validate_wilayah_sungai', 'WS harus dipilih!');



        if ($this->form_validation->run() == FALSE) {
            $data['kode'] = $this->m_rekomtek->kode();

            $data['title'] = 'Form Permohonan';
            $data['user'] = $this->db->get_where('user', ['username' =>
            $this->session->userdata('username')])->row_array();
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('templates/topbar');
            $this->load->view('rekomtek/formrekomtek', $data, FALSE);
            $this->load->view('templates/footer');
        } else {
            $upload_path = './uploads/file/';
            $allowed_types = 'pdf|jpg|png|doc';

            $berkas = [];

            for ($i = 1; $i <= 4; $i++) {
                $file_name = 'berkas' . $i;
                if (!empty($_FILES[$file_name]['name'])) {

                    $config['upload_path'] = $upload_path;
                    $config['allowed_types'] = $allowed_types;

                    $this->load->library('upload', $config);

                    if (!$this->upload->do_upload($file_name)) {
                        echo "Upload gagal";
                        die();
                    } else {
                        $berkas[$file_name] = $this->upload->data('file_name');
                    }
                }
            }

            $tgl = $this->input->post('tgl');
            $tgl = DateTime::createFromFormat('d-m-Y', $tgl)->format('Y-m-d');

            $data = array(
                'nama_pemohon' => $this->input->post('nama_pemohon'),
                'no_hp' => $this->input->post('no_hp'),
                'email' => $this->input->post('email'),
                'jenis_izin' => $this->input->post('jenis_izin'),
                'balai' => $this->input->post('balai'),
                'sumber_air' => $this->input->post('sumber_air'),
                'longitude' => $this->input->post('longitude'),
                'latitude' => $this->input->post('latitude'),
                'kelurahan_desa' => $this->input->post('kelurahan_desa'),
                'kecamatan' => $this->input->post('kecamatan'),
                'kabupaten_kota' => $this->input->post('kabupaten_kota'),
                'provinsi' => $this->input->post('provinsi'),
                'balai2' => $this->input->post('balai2'),
                'wilayah_sungai' => $this->input->post('wilayah_sungai'),

                'tujuan' => $this->input->post('tujuan'),
                'cara_pengambilan' => $this->input->post('cara_pengambilan'),
                'cara_pembuangan' => $this->input->post('cara_pembuangan'),
                'volume_pengambilan_literdetik' => $this->input->post('volume_pengambilan_literdetik'),
                'jamhari_pengambilan' => $this->input->post('jamhari_pengambilan'),
                'haribulan_pengambilan' => $this->input->post('haribulan_pengambilan'),
                'volume_pengambilan_perbulan' => $this->input->post('volume_pengambilan_perbulan'),
                'jangka_waktu' => $this->input->post('jangka_waktu'),
                'berkas1' => $berkas['berkas1'] ?? '',
                'berkas2' => $berkas['berkas2'] ?? '',
                'berkas3' => $berkas['berkas3'] ?? '',
                'berkas4' => $berkas['berkas4'] ?? '',
                'status' => $this->input->post('status'),
                'no_pengajuan' => $this->input->post('no_pengajuan'),
                'tgl' => $tgl
            );


            $this->m_rekomtek->insertDataRTK($data);
            $this->session->set_flashdata('pesan', 'Data berhasil disimpan dengan nomor pengajuan: ' . $this->input->post('no_pengajuan'));
            $this->_kirimEmail($no_pengajuan, 'success');

            $role_id = $this->session->userdata('role_id'); // Anda perlu menyesuaikan ini dengan cara Anda mengambil peran.

            if ($role_id == 2) {
                redirect(base_url('rekomtek/formview'));
            } else {
                redirect(base_url('rekomtek'));
            }
        }
    }




    public function validate_jenis_izin($value)
    {
        return $value !== 'Pilih Jenis Izin';
    }

    public function validate_balai($value)
    {
        return $value !== 'Pilih Balai';
    }

    public function validate_balai2($value)
    {
        return $value !== 'Pilih Balai';
    }

    public function validate_provinsi($value)
    {
        return $value !== 'Provinsi';
    }
    public function validate_wilayah_sungai($value)
    {
        return $value !== 'Wilayah Sungai';
    }






    private function _kirimEmail($no_pengajuan, $type)
    {
        $config = [
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_user' => 'cobacobasmtp@gmail.com',
            'smtp_pass' => 'fwtybdovxxtmcwfe',
            'smtp_port' => 465,
            'mailtype' => 'html',
            'charset' => 'utf-8',
            'newline' => "\r\n"
        ];

        $this->load->library('email', $config);
        $this->email->initialize($config);

        $this->email->from('cobacobasmtp@gmail.com', 'Coba Rekomtek');
        $this->email->to($this->input->post('email'));

        if ($type == 'success') {

            $this->email->subject('Permohonan Berhasil');
            $this->email->message('Selamat, permohonan berhasil!');
        }

        if ($this->email->send()) {
            return true;
        } else {
            echo $this->email->print_debugger();
            die;
        }
    }





    public function tracking()
    {
        $data['title'] = 'Tracking';
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('rekomtek/trackingrekomtek', $data);
        $this->load->view('templates/footer');
    }


    public function edit($id)
    {
        $data['title'] = 'Update';
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();

        $where = array('id' => $id);
        $data['rekomtek'] = $this->m_rekomtek->edit_data($where, 'rekomtek')->result();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('rekomtek/edit', $data);
        $this->load->view('templates/footer');
    }
    public function update()
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

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data pemohon berhasil diperbarui!</div>');
        redirect('rekomtek');
    }



    public function statusview($id)
    {
        $data['title'] = 'Update Status';
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();

        $where = array('id' => $id);
        $data['rekomtek'] = $this->m_rekomtek->edit_data($where, 'rekomtek')->result();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('rekomtek/statusrekomtek', $data);
        $this->load->view('templates/footer');
    }
    public function status($id)
    {
        $this->form_validation->set_rules('status', 'Status', 'required', array(
            'required' => '%s Harus diisi !!'
        ));
        $this->form_validation->set_rules('tgl_update', 'Tanggal', 'required', array(
            'required' => '%s Harus diisi !!'
        ));
        $this->form_validation->set_rules('ket_status', 'Keterangan', 'required', array(
            'required' => '%s Harus diisi !!'
        ));
        if ($this->form_validation->run() == FALSE) {
            $data['title'] = 'Update Status';
            $data['user'] = $this->db->get_where('user', ['username' =>
            $this->session->userdata('username')])->row_array();

            $data['rekomtek'] = $this->m_rekomtek->edit_data(array('id' => $id), 'rekomtek')->result();

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('templates/topbar', FALSE);
            $this->load->view('rekomtek/statusrekomtek', $data);
            $this->load->view('templates/footer');
        } else {

            $data = array(
                'id' => $id,
                'status' => $this->input->post('status'),
                'tgl_update' => $this->input->post('tgl_update'),
                'ket_status' => $this->input->post('ket_status'),

            );


            $this->m_rekomtek->editstatus($data);


            $this->_sendEmail2($id, 'ok');


            $this->session->set_flashdata('pesan', 'Status Berhasil Diupdate ');
            redirect('rekomtek');
        }
    }




    private function _sendEmail2($id)
    {

        $rekomtek = $this->m_rekomtek->details($id);

        if (!empty($rekomtek)) {
            $email = $rekomtek[0]->email;
            $status_tracking = $rekomtek[0]->status;

            $config = [
                'protocol' => 'smtp',
                'smtp_host' => 'ssl://smtp.googlemail.com',
                'smtp_user' => 'cobacobasmtp@gmail.com',
                'smtp_pass' => 'fwtybdovxxtmcwfe',
                'smtp_port' => 465,
                'mailtype' => 'html',
                'charset' => 'utf-8',
                'newline' => "\r\n"
            ];

            $this->load->library('email', $config);
            $this->email->initialize($config);


            $this->email->from('cobacobasmtp@gmail.com', 'E-Rekomtek');
            $this->email->to($email);

            $this->email->subject('Status rekomtek Anda diupdate');
            $this->email->message('Status rekomtek Anda saat ini: ' . $status_tracking . '. <a href="' . base_url('frontpage') . '">Klik di sini</a> untuk melacak detailnya.');



            if ($this->email->send()) {
                $this->session->set_flashdata('pesan', 'Status berhasil di update dan email berhasil terkirim');
                redirect('rekomtek');
            } else {
                $this->session->set_flashdata('pesan', 'Email gagal terkirim');
                redirect('rekomtek');
            }
        } else {
            // Data rekomtek tidak ditemukan
            $this->session->set_flashdata('pesan', 'Email gagal terkirim karena alamat email tidak ditemukan.');
            redirect('rekomtek');
        }
    }


    //Algoritma Sequential Search
    public function search()
    {
        $data['title'] = 'Hasil Pencarian';
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('rekomtek/search_result', $data);
        $this->load->view('templates/footer');
    }

    public function searching()
    {
        $this->load->model('m_rekomtek');
        $data['title'] = 'Hasil Pencarian';
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();

        $search_value = $this->input->post('search_value');
        $result = $this->m_rekomtek->sequentialSearch($search_value);

        if (!empty($result)) {
            redirect('rekomtek/searched/' . urlencode($search_value));
        } else {
            $data['not_found'] = true;
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('rekomtek/search_result', $data);
            $this->load->view('templates/footer');
        }
    }

    public function searched($search_value = null)
    {
        $this->load->model('m_rekomtek');

        $data['title'] = 'Hasil Pencarian';
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();

        $result = $this->m_rekomtek->sequentialSearch($search_value);
        $data['result'] = $result;

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('rekomtek/search_result', $data);
        $this->load->view('templates/footer');
    }



    //Algoritma Sequential Search
    public function searchglobal()
    {
        $data['title'] = 'Hasil Pencarian';
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('rekomtek/search_resultglobal', $data);
        $this->load->view('templates/footer');
    }

    public function searchingglobal()
    {
        $this->load->model('m_rekomtek');
        $data['title'] = 'Hasil Pencarian';
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();

        $search_value = $this->input->post('search_value');
        $result = $this->m_rekomtek->sequentialSearch($search_value);

        if (!empty($result)) {
            redirect('rekomtek/searchedd/' . urlencode($search_value));
        } else {
            $data['not_found'] = true;
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('rekomtek/search_resultglobal', $data);
            $this->load->view('templates/footer');
        }
    }

    public function searchedd($search_value = null)
    {
        $this->load->model('m_rekomtek');

        $data['title'] = 'Hasil Pencarian';
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();

        $result = $this->m_rekomtek->sequentialSearch($search_value);
        $data['result'] = $result;

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('rekomtek/search_resultglobal', $data);
        $this->load->view('templates/footer');
    }





    public function cetak($id)
    {
        $this->load->model('m_rekomtek');
        $data['rekomtek'] = $this->m_rekomtek->getRekomtekById($id);
        $this->load->library('pdf');
        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "data-rekomtek.pdf";
        $this->pdf->load_view('rekomtek/data_rekomtekpdf', $data);
    }




    public function rekomtekview($id)
    {
        $data['title'] = 'Upload Rekomtek';
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();

        $data['rtk'] = $this->m_rekomtek->getRekomtekByIdr($id);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('rekomtek/tambahrekomtek', $data);
        $this->load->view('templates/footer');
    }

    public function rekomtekAksi($id)
    {
        $this->form_validation->set_rules('no_rekomtek', 'No_rekomtek', 'required', array(
            'required' => '%s Harus diisi !!'
        ));
        $this->form_validation->set_rules('tgl_rekomtek', 'Tgl_rekomtek', 'required', array(
            'required' => '%s Harus diisi !!'
        ));

        $config['upload_path'] = './uploads/rekomtek/';
        $config['allowed_types'] = 'pdf';
        $config['max_size'] = 2048; // 2MB
        $config['file_name'] = 'rekomtek_' . date('YmdHis');

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('berkas1')) {
            $error = $this->upload->display_errors();
            $this->session->set_flashdata('error', $error);
            redirect('rekomtek/rekomtekview/' . $id);
        } else {
            $data = array(
                'id' => $id,
                'no_rekomtek' => $this->input->post('no_rekomtek'),
                'tgl_rekomtek' => $this->input->post('tgl_rekomtek'),
                'rekomtek_file' => $this->upload->data('file_name')
            );

            $this->m_rekomtek->insertRekomtek($data);
            $this->session->set_flashdata('pesan', 'Data Rekomtek berhasil');
            redirect('rekomtek/rekomtekview/' . $id);
        }
    }



    public function downloadRekomtek($id)
    {
        $rekomtek = $this->m_rekomtek->getRekomtekById($id);

        if ($rekomtek) {
            $filePath = './uploads/rekomtek/' . $rekomtek['rekomtek_file'];

            if (file_exists($filePath)) {
                $config['file_name'] = $rekomtek['rekomtek_file'];
                $config['file_path'] = './uploads/rekomtek/';
                $config['file_ext_tolower'] = TRUE;
                $this->load->helper('download');
                force_download($filePath, NULL);
            } else {
                $this->session->set_flashdata('error', 'File tidak ditemukan.');
                redirect('frontpage/trackingresult/' . $id);
            }
        } else {
            $this->session->set_flashdata('error', 'Data Rekomtek tidak ditemukan.');
            redirect('frontpage/trackingresult/' . $id);
        }
    }



    public function permohonanmasuk()
    {

        $data['tahun'] = $this->m_rekomtek->gettahun();
        $data['title'] = 'Report';
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();



        $data['rekomtek'] = $this->m_rekomtek->getAllData();



        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('rekomtek/laporan', $data);
        $this->load->view('templates/footer');
    }

    public function filter()
    {

        $this->load->model('m_rekomtek');
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();

        $tanggalawal = $this->input->post('tanggalawal');
        $tanggalakhir = $this->input->post('tanggalakhir');
        $tahun1 = $this->input->post('tahun1');
        $bulanawal = $this->input->post('bulanawal');
        $bulanakhir = $this->input->post('bulanakhir');
        $tahun2 = $this->input->post('tahun2');
        $nilaifilter = $this->input->post('nilaifilter');

        if ($nilaifilter == 1) {
            $data['title'] = "Report By Tanggal";
            $data['subtitle'] = "Dari tanggal : " . $tanggalawal . ' Sampai tanggal : ' . $tanggalakhir;
            $data['datafilter'] = $this->m_rekomtek->filterbytanggal($tanggalawal, $tanggalakhir);

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('templates/topbar');
            $this->load->view('rekomtek/laporan_print', $data);
            $this->load->view('templates/footer');
        } elseif ($nilaifilter == 2) {
            $data['title'] = "Report By Bulan";
            $data['subtitle'] = "Dari bulan : " . $bulanawal . ' Sampai bulan : ' . $bulanakhir . ' Tahun : ' . $tahun1;
            $data['datafilter'] = $this->m_rekomtek->filterbybulan($tahun1, $bulanawal, $bulanakhir);


            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('templates/topbar');
            $this->load->view('rekomtek/laporan_print', $data);
            $this->load->view('templates/footer');
        } elseif ($nilaifilter == 3) {
            $data['title'] = "Report By Tahun";
            $data['subtitle'] = ' Tahun : ' . $tahun1;
            $data['datafilter'] = $this->m_rekomtek->filterbytahun($tahun2);


            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('templates/topbar');
            $this->load->view('rekomtek/laporan_print', $data);
            $this->load->view('templates/footer');
        }
    }



    public function lampiran($id)
    {
        $rekomtek = $this->m_rekomtek->getRekomtekById($id);

        $data['title'] = 'Lampiran Pemohon';
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();

        $data['rekomtek'] = $rekomtek;

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('rekomtek/lampiran', $data);
        $this->load->view('templates/footer');
    }



    public function cetaksemuadata()
    {
        $this->load->model('m_rekomtek');



        $tahun_bulan = $this->input->post('tahun_bulan');
        if (!empty($tahun_bulan)) {
            $bulan_tahun = date('Y-m', strtotime($tahun_bulan));
            $data['rekomtek'] = $this->m_rekomtek->getDataByMonth($bulan_tahun);
        } else {
            $data['rekomtek'] = $this->m_rekomtek->getAllData();
        }
        $this->load->library('pdf');
        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "rekap-rekomtek-masuk.pdf";
        $this->pdf->load_view('rekomtek/rekap_rekomtekpdf', $data);
    }
}
