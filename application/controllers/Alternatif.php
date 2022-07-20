<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alternatif extends CI_Controller 
{
    public function alternatif()
    {
        $data['tab_alternatif'] = $this->Model_alternatif->GetDataAlternatif();
        $this->load->view('header/header');
        $this->load->view('sidebar/sidebar');
        $this->load->view('alternatif/alternatif', $data);
        $this->load->view('footer/footer');
    }
    public function tambah_data_alternatif()
    {
        $data['tab_alternatif'] = $this->Model_alternatif->GetDataAlternatif();
        $this->load->view('header/header');
        $this->load->view('sidebar/sidebar');
        $this->load->view('alternatif/tambah_data_alternatif', $data);
        $this->load->view('footer/footer');
    }
    public function proses_tambah_data_alternatif()
    {
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->form_validation->set_rules('nama_alternatif', 'Nama alternatif', 'required');
        if ($this->form_validation->run() == FALSE) {
            $data['tab_alternatif'] = $this->Model_alternatif->GetDataAlternatif();
            $this->load->view('header/header');
            $this->load->view('sidebar/sidebar');
            $this->load->view('alternatif/tambah_data_alternatif', $data);
            $this->load->view('footer/footer');
        } else {
            $this->Model_alternatif->proses_tambah_data_alternatif();
            redirect('alternatif/alternatif');
        }
    }

    public function hapus_data($id_alternatif)
    {
        $this->Model_alternatif->hapus_data($id_alternatif);
        redirect('alternatif/alternatif');
    }

}