<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_alternatif extends CI_Model 
{
    public function GetDataAlternatif()
    {
        return $this->db->get('tab_alternatif')->result_array();
    }

    public function proses_tambah_alternatif()
    {
        $data = [
            "nama_alternatif" => $this->input->post('nama_alternatif')
        ];

        $this->db->insert('tab_alternatif', $data);
    }

    //EDIT DATA
    // public function ambil_data_alternatif()
    // {
    //     return $this->db->get_where('tab_alternatif')->result_array();
    // }

    //PROSES EDIT DATA
    // public function proses_edit_dataalternatif()
    // {
    //     $data = [
    //         "nama_alternatif" => $this->input->post('nama_alternatif'),
    //         "type" => $this->input->post('type'),
    //         "bobot" => $this->input->post('bobot'),
    //     ];

    //     $this->db->where('id', $this->input->post('id'));
    //     $this->db->update('alternatif', $data);
    // }

    public function hapus_data_alternatif($id_alternatif)
    {
        $this->db->where('id_alternatif',$id_alternatif);
        $this->db->delete('tab_alternatif');
    }
}