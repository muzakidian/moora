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

    //EDIT DATA
    // public function ambil_data_kriteria()
    // {
    //     return $this->db->get_where('tab_kriteria')->result_array();
    // }

    //PROSES EDIT DATA
    // public function proses_edit_dataKriteria()
    // {
    //     $data = [
    //         "nama_kriteria" => $this->input->post('nama_kriteria'),
    //         "type" => $this->input->post('type'),
    //         "bobot" => $this->input->post('bobot'),
    //     ];

    //     $this->db->where('id', $this->input->post('id'));
    //     $this->db->update('kriteria', $data);
    // }

    public function hapus_data($id_kriteria)
    {
        $this->db->where('id_kriteria',$id_kriteria);
        $this->db->delete('tab_kriteria');
    }
}