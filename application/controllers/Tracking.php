<?php
class Tracking extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_tracking', 'm_trackingg');
        $this->load->helper(array('form', 'url', 'Cookie', 'String'));
    }


    public function index()
    {
        $no_pengajuan = $this->input->post('trackid', TRUE);
        $row = $this->m_trackingg->Track($no_pengajuan);


        if ($row === null) {
            // $this->session->set_flashdata('message2', '<div class="alert alert-danger">&times; Maaf!</h5> Nomor Pengajuan yang anda masukkan Salah! <b>ID: </b><b>' . $no_pengajuan . '</b> <i>tidak ditemukan</i></div>');
            redirect(base_url("tracking/notfound/") . $no_pengajuan);
        } else {
            redirect(base_url("tracking/tracked/") . $no_pengajuan);
        }
    }

    public function tracked($no_pengajuan)
    {
        $rekomtek = $this->m_trackingg->Track($no_pengajuan);

        if ($rekomtek === null) {
            redirect(base_url("tracking/notfound/") . $no_pengajuan);
        } else {
            $data = array(
                'title' => 'Tracked',
                'isi' => 'frontpage/trackingresult',
                'no_pengajuan' => $no_pengajuan,
                'rekomtek' => $rekomtek
            );
            $this->load->view('frontpage/wrapper', $data);
        }
    }

    public function notfound($no_pengajuan)
    {

        $this->session->set_flashdata('message2', '<div class="col-md-6 alert alert-danger ml-6">&times; Maaf!</h5> Nomor Pengajuan yang anda masukkan Salah! <b>ID: </b><b>' . $no_pengajuan . '</b> <i>tidak ditemukan</i></div>');
        $data = array(
            'title' => 'Tracked',
            'isi' => 'frontpage/trackingnotfound',
            'no_pengajuan' => $no_pengajuan,
        );

        $this->load->view('frontpage/wrapper', $data);
    }
}
