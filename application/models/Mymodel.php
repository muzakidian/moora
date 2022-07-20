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

    public function hapus_data($id_kriteria)
    {
        $this->db->where('id_kriteria',$id_kriteria);
        $this->db->delete('tab_kriteria');
    }

    // public function ambil_id_kriteria($id_kriteria)
    // {
    //     return $this->db->get_where('tab_kriteria',['id_kriteria' => $id_kriteria])->result_array();
    // }

    // public function proses_edit_data()
    // {
    //     $data = [
    //         "nama_kriteria" => $this->input->post('nama_kriteria'),
    //         "type" => $this->input->post('type'),
    //         "bobot" => $this->input->post('bobot'),
    //     ];

    //     $this->db->where('id_kriteria', $this->input->post('id_kriteria'));
    //     $this->db->update('tab_kriteria', $data);
    // }
}