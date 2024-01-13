<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Frontpage extends CI_Controller
{
    public function index()
    {
        $data = array(
            'title' => 'E-Rekomtek',
            'isi' => 'frontpage/index'
        );
        $this->load->view('frontpage/wrapper', $data);
    }
    public function peraturan()
    {
        $data = array(
            'title' => 'Web GIS PKL',
            'isi' => 'frontpage/peraturan'
        );
        $this->load->view('frontpage/wrapper', $data);
    }
    public function panduanrekomtek()
    {
        $data = array(
            'title' => 'Panduan E-Rekomtek',
            'isi' => 'frontpage/panduanrekomtek'
        );
        $this->load->view('frontpage/wrapper', $data);
    }
    public function alamatbalai()
    {
        $data = array(
            'title' => 'Web GIS PKL',
            'isi' => 'frontpage/alamatbalai'
        );
        $this->load->view('frontpage/wrapper', $data);
    }
    public function tahapan()
    {
        $data = array(
            'title' => 'Web GIS PKL',
            'isi' => 'frontpage/tahapanalur'
        );
        $this->load->view('frontpage/wrapper', $data);
    }
}
