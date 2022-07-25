<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MetodeModel extends CI_Model
{
    public function get_all_nilai()
    {
        $this->db->select('*');
        $this->db->from('tab_poin');
        $this->db->order_by('id_point');
        return $this->db->get()->result();
    }

    public function get_alternatif_by_id()
    {
        $this->db->order_by('id_alternatif', 'asc');
        $query = $this->db->get('tab_alternatif');
        return $query->result();
    }

    function get_kriteria_by_id()
    {
        $this->db->order_by('id_kriteria', 'asc');
        $query = $this->db->get('tab_kriteria');
        return $query->result();
    }

    public function get_niai_setiap_alternatif($id_alternatif, $id_kriteria)
    {
        $query = $this->db->query("SELECT * FROM tab_poin WHERE id_alternatif = '$id_alternatif' AND id_kriteria = '$id_kriteria';");

        return $query->row_array();
    }

    public function get_data_penilaian($id_alternatif, $id_kriteria)
    {
        $query = $this->db->query("SELECT * FROM tab_poin WHERE id_alternatif= '$id_alternatif' AND id_kriteria = '$id_kriteria';");

        return $query->row_array();
    }

    public function get_nilai_setiap_alternatif()
    {
        $query = $this->db->query("SELECT DISTINCT tab_alternatif.nama_alternatif, tab_alternatif.id_alternatif FROM tab_alternatif JOIN tab_poin ON tab_alternatif.id_alternatif = tab_poin.id_alternatif;");

        return $query->result();
    }

    public function normalisasi_nilai($id_kriteria) // optimasi nilai
    {
        $query = $this->db->query("SELECT SQRT(SUM(POWER(poin, 2))) AS nilai_pembagian FROM tab_poin WHERE id_kriteria='$id_kriteria';");

        return $query->row_array();
    }

    public function pembobotan_nilai($id_kriteria) // pembobotan nilai
    {
        $query = $this->db->query("SELECT ((poin / nilai_pembagian) * tab_kriteria.bobot) AS pembobotan_setiap_nilai, tab_kriteria.bobot, tab_kriteria.type 
		FROM tab_poin JOIN (SELECT SQRT(SUM(POWER(poin, 2))) AS nilai_pembagian FROM tab_poin WHERE id_kriteria='$id_kriteria') AS bobot_nilai 
		JOIN tab_kriteria ON tab_kriteria.id_kriteria = tab_poin.id_kriteria 
        WHERE tab_kriteria.id_kriteria='$id_kriteria' GROUP BY tab_poin.id_alternatif");

        return $query->row_array();
    }


    public function hasil_nilai($id_alternatif)
    {
        $query = $this->db->query("SELECT * FROM tab_alternatif WHERE id_alternatif='$id_alternatif';");
        return $query->row_array();
    }
}
