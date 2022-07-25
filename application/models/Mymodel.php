<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mymodel extends CI_Model
{
    public function GetData()
    {
        $query = $this->db->get('tab_kriteria');
        return $query->result();
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
        $this->db->where('id_kriteria', $id_kriteria);
        $this->db->delete('tab_kriteria');
    }

    public function ambil_id_kriteria($id_kriteria)
    {
        return $this->db->get_where('tab_kriteria',['id_kriteria' => $id_kriteria])->result_array();
    }

    public function proses_edit_data()
    {
        $data = [
            "nama_kriteria" => $this->input->post('nama_kriteria'),
            "type" => $this->input->post('type'),
            "bobot" => $this->input->post('bobot'),
        ];

        $this->db->where('id_kriteria', $this->input->post('id_kriteria'));
        $this->db->update('tab_kriteria', $data);
    }


    // ALTERNATIF ALTERNATIF ALTERNATIF ALTERNATIF ALTERNATIF ALTERNATIF ALTERNATIF ALTERNATIF 

    public function GetDataAlt()
    {
        $query = $this->db->get('tab_alternatif');
        return $query->result();
    }
    public function proses_tambah_alt()
    {
        $data = [
            "nama_alternatif" => $this->input->post('nama_alternatif')
        ];

        $this->db->insert('tab_alternatif', $data);
    }

    public function hapus_data_alt($id_alternatif)
    {
        $this->db->where('id_alternatif', $id_alternatif);
        $this->db->delete('tab_alternatif');
    }

    // POIN POIN POIN POIN POIN POIN POIN POIN POIN POIN POIN POIN POIN POIN POIN POIN POIN 
    public function proses_tambah_poin()
    {
        $data = [
            "id_alternatif" => $this->input->post('id_alternatif'),
            "id_kriteria" => $this->input->post('id_kriteria'),
            "poin" => $this->input->post('poin')
        ];

        $this->db->insert('tab_poin', $data);
    }
    public function hapus_data_poin($id_point)
    {
        $this->db->where('id_point', $id_point);
        $this->db->delete('tab_poin');
    }

    // public function AmbilPoin()
    // {
    //     $this->db->select('tab_alternatif.nama_alternatif, tab_kriteria.nama_kriteria, tab_poin.poin ');
    //     $this->db->from('tab_poin');
    //     $this->db->join('tab_alternatif', 'tab_alternatif.id_alternatif = tab_poin.id_alternatif');
    //     $this->db->join('tab_kriteria', 'tab_kriteria.id_kriteria = tab_poin.id_kriteria');
    //     $query = $this->db->get();
    //     if($query->num_rows() != 0)
    //     {
    //         return $query->result_array();
    //     }
    //     else
    //     {
    //         return false;
    //     }
    // }

    public function GetDataPoin()
    {
        $this->db->select ( 'tab_alternatif.nama_alternatif, tab_kriteria.nama_kriteria, tab_poin.poin ,tab_poin.id_point ' ); 
        $this->db->from ( 'tab_poin' );
        $this->db->join ( 'tab_alternatif', 'tab_poin.id_alternatif = tab_alternatif.id_alternatif' , 'left' );
        $this->db->join ( 'tab_kriteria', 'tab_poin.id_kriteria = tab_kriteria.id_kriteria' , 'left' );
        $query = $this->db->get ();
        
        return $query->result ();

    }

    public function GetDataHasil()
    {
        $query = $this->db->get('tab_hasil');
        return $query->result();
    }

    public function normalisasi_nilai($id_kriteria) // optimasi nilai
    {
        $query = $this->db->query('tab_poin')->select("SELECT SQRT(SUM(POWER(poin, 2))) AS nilai_pembagian FROM tab_poin WHERE id_point='$id_kriteria';");
        
        return $query->result();
    }
    public function win()
    {
        $query = $this->db->table('tab_poin')->select('SELECT poin FROM tab_poin')->get();
        return $query->result();
        $query = $this->db->get('tab_kriteria');
        return $query->result();
    }

    public function coba()
    {
        $query = $this->db->select_sum('poin');
        $query = $this->db->get('tab_poin');
        return $query->result();
    }
    
}
