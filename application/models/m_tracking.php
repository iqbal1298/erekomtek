<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_tracking extends CI_Model
{


    public function Track($no_pengajuan)
    {
        $dataRekomtek = $this->db->get('rekomtek')->result_array();

        foreach ($dataRekomtek as $rekomtek) {
            if ($rekomtek['no_pengajuan'] === $no_pengajuan) {
                return $rekomtek;
            }
        }
        return null;
    }
}
