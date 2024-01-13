<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_rekomtek extends CI_Model
{


    //Tampil Data Pemohon
    public function TampilData($limit, $start)
    {
        return $this->db->get('rekomtek', $limit, $start)->result_array();
    }


    //Tampil Perstatus
    public function TampilDataDalamProses()
    {
        return $this->db->get('rekomtek')->result_array();
    }
    public function TampilDatabyStatus($status)
    {
        return $this->db->where('status', $status)->get('rekomtek')->result_array();
    }

    public function hitungStatus($status)
    {
        return $this->db->where('status', $status)->from('rekomtek')->get()->num_rows();
    }



    //Tampil Detail By Id
    public function getRekomtekById($id)
    {
        return $this->db->get_where('rekomtek', ['id' => $id])->row_array();
    }


    //Hapus Data Rekomtek
    public function hapusDataRekomtek($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('rekomtek');
    }


    public function download($params = array())
    {
        $this->db->select('*');
        $this->db->from('berkas1');
        $this->db->where('nama_pemohon', '1');
        $this->db->order_by('created', 'desc');
        if (array_key_exists('id', $params) && !empty($params['id'])) {
            $this->db->where('id', $params['id']);

            $query = $this->db->get();
            $result = ($query->num_rows() > 0) ? $query->row_array() : FALSE;
        } else {

            if (array_key_exists("start", $params) && array_key_exists("limit", $params)) {
                $this->db->limit($params['limit'], $params['start']);
            } elseif (!array_key_exists("start", $params) && array_key_exists("limit", $params)) {
                $this->db->limit($params['limit']);
            }

            $query = $this->db->get();
            $result = ($query->num_rows() > 0) ? $query->result_array() : FALSE;
        }

        return $result;
    }


    //Insert Form Permohonan
    public function insertDataRTK($data)
    {
        $this->db->insert('rekomtek', $data);
    }


    //Menampilkan Data Edit
    public function edit_data($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
    //Edit Data Aksi
    public function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }


    //Menampilkan Status by Id
    public function details($id)
    {
        $this->db->select('*');
        $this->db->from('rekomtek');
        $this->db->where('id', $id);
        return $this->db->get()->result();
    }
    //update Status
    public function editstatus($rekomtek)
    {
        $this->db->where('id', $rekomtek['id']);
        $this->db->update('rekomtek', $rekomtek);
    }


    //kode generate no_pengajuan
    public function kode()
    {
        $this->db->select('RIGHT(rekomtek.no_pengajuan,2) as no_pengajuan', FALSE);
        $this->db->order_by('no_pengajuan', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get('rekomtek');
        if ($query->num_rows() <> 0) {

            $data = $query->row();
            $kode = intval($data->no_pengajuan) + 1;
        } else {
            $kode = 1;
        }
        $tgl = date('dmY');
        $batas = str_pad($kode, 3, "0", STR_PAD_LEFT);
        $kodetampil = "RTK" . "-" . $tgl . "-" . $batas;
        return $kodetampil;
    }



    //Algoritma Sequential Search di Data Pemohon
    public function sequentialSearch($search_value)
    {

        $query = $this->db->get('rekomtek');
        $results = [];


        foreach ($query->result() as $row) {
            if (
                stripos($row->id, $search_value) !== false ||
                stripos($row->no_pengajuan, $search_value) !== false ||
                stripos($row->nama_pemohon, $search_value) !== false ||
                stripos($row->tujuan, $search_value) !== false ||
                stripos($row->tgl, $search_value) !== false ||
                stripos($row->status, $search_value) !== false ||
                stripos($row->jenis_izin, $search_value) !== false ||
                stripos($row->tgl_rekomtek, $search_value) !== false
            ) {

                $results[] = [
                    'id' => $row->id,
                    'no_pengajuan' => $row->no_pengajuan,
                    'tgl' => $row->tgl,
                    'nama_pemohon' => $row->nama_pemohon,
                    'tujuan' => $row->tujuan,
                    'status' => $row->status,
                    'jenis_izin' => $row->jenis_izin,
                    'tgl_rekomtek' => $row->tgl_rekomtek,

                ];
            }
        }

        return $results;
    }



    //mengambil data berdasarkan id pemohon
    public function getRekomtekByIdr($id)
    {
        return $this->db->get_where('rekomtek', ['id' => $id])->row_array();
    }

    //Aksi insert file rekomtek
    public function insertRekomtek($rekomtek)
    {
        $this->db->where('id', $rekomtek['id']);
        $this->db->update('rekomtek', $rekomtek);
    }


    public function rekomtekByNamaPemohon($nama_pemohon)
    {
        return $this->db->get_where('rekomtek', ['nama_pemohon' => $nama_pemohon])->row_array();
    }





    //ambil semua data report
    public function getAllData()
    {
        $this->db->order_by('no_pengajuan', 'DESC');
        return $this->db->get('rekomtek')->result_array();
    }



    //filter di reporttttt
    public function gettahun()
    {
        $query = $this->db->query("SELECT YEAR(tgl) AS tahun FROM rekomtek GROUP BY YEAR(tgl) ORDER BY YEAR(tgl) ASC");
        return $query->result();
    }

    public function filterbytanggal($tanggalawal, $tanggalakhir)
    {
        $query = $this->db->query("SELECT * from rekomtek where tgl BETWEEN '$tanggalawal' and '$tanggalakhir' ORDER BY tgl ASC");
        return $query->result();
    }
    public function filterbybulan($tahun1, $bulanawal, $bulanakhir)
    {
        $query = $this->db->query("SELECT * from rekomtek where YEAR(tgl) = '$tahun1' and MONTH(tgl) BETWEEN '$bulanawal' and '$bulanakhir' ORDER BY tgl ASC");
        return $query->result();
    }
    public function filterbytahun($tahun2)
    {
        $query = $this->db->query("SELECT * from rekomtek where YEAR(tgl) = '$tahun2' ORDER BY tgl ASC ");
        return $query->result();
    }
}
