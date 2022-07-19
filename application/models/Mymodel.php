<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mymodel extends CI_Model 
{
    public function GetData()
    {
        return $this->db->get('tab_kriteria')->result_array();
    }

    public function proses_tambah()
    {
        $data = [
            "nama_kriteria" => $this->input->post('nama_kriteria'),
            "type" => $this->input->post('type'),
            "bobot" => $this->input->post('bobot'),

        ];

        $this->db->insert('tab_kriteria', $data);
    }
}