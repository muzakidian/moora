<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kriteria extends CI_Controller
{
    public function kriteria()
    {
        $data['tab_kriteria'] = $this->Mymodel->GetData();
        $this->load->view('header/header');
        $this->load->view('sidebar/sidebar');
        $this->load->view('kriteria/kriteria', $data);
        $this->load->view('footer/footer');
    }
    public function tambah_data()
    {
        $data['tab_kriteria'] = $this->Mymodel->GetData();
        $this->load->view('header/header');
        $this->load->view('sidebar/sidebar');
        $this->load->view('kriteria/tambah_data', $data);
        $this->load->view('footer/footer');
    }
    public function proses_tambah_data()
    {
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->form_validation->set_rules('nama_kriteria', 'Nama Kriteria', 'required');
        $this->form_validation->set_rules('type', 'Type', 'required');
        $this->form_validation->set_rules('bobot', 'Bobot', 'required');
        if ($this->form_validation->run() == FALSE) {
            $data['tab_kriteria'] = $this->Mymodel->GetData();
            $this->load->view('header/header');
            $this->load->view('sidebar/sidebar');
            $this->load->view('kriteria/tambah_data', $data);
            $this->load->view('footer/footer');
        } else {
            $this->Mymodel->proses_tambah();
            redirect('kriteria/kriteria');
        }
    }

    public function hapus_data($id_kriteria)
    {
        $this->Mymodel->hapus_data($id_kriteria);
        redirect('kriteria/kriteria');
    }

    //EDIT DATA
    // public function edit_dataKriteria()
    // {
    // 	$data['tab_kriteria'] = $this->Mymodel->ambil_data_kriteria();
    // 	$this->load->view('header/header');
    // 	$this->load->view('sidebar/sidebar');
    // 	$this->load->view('edit_dataKriteria' ,$data);
    // 	$this->load->view('footer/footer');
    // }

    //PROSES EDIT
    // public function proses_edit_dataKriteria()
    // {
    // 	$this->Mymodel->proses_edit_dataKriteria();
    // 	redirect('kriteria/kriteria');
    // }

    // ALTERNATIF ALTERNATIF ALTERNATIF ALTERNATIF ALTERNATIF ALTERNATIF ALTERNATIF 
    public function alternatif()
    {
        $dataAlt['tab_alternatif'] = $this->Mymodel->GetDataAlt();
        $this->load->view('header/header');
        $this->load->view('sidebar/sidebar');
        $this->load->view('alternatif/alternatif', $dataAlt);
        $this->load->view('footer/footer');
    }

    public function tambah_data_alt()
    {
        $data['tab_alternatif'] = $this->Mymodel->GetDataAlt();
        $this->load->view('header/header');
        $this->load->view('sidebar/sidebar');
        $this->load->view('alternatif/tambah_data_alt', $data);
        $this->load->view('footer/footer');
    }
    public function proses_tambah_data_alt()
    {
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->form_validation->set_rules('nama_alternatif', 'Nama Alternatif', 'required');
        if ($this->form_validation->run() == FALSE) {
            $data['tab_alternatif'] = $this->Mymodel->GetDataAlt();
            $this->load->view('header/header');
            $this->load->view('sidebar/sidebar');
            $this->load->view('alternatif/tambah_data_alt', $data);
            $this->load->view('footer/footer');
        } else {
            $this->Mymodel->proses_tambah_alt();
            redirect('kriteria/alternatif');
        }
    }

    public function hapus_data_alt($id_alternatif)
    {
        $this->Mymodel->hapus_data_alt($id_alternatif);
        redirect('kriteria/alternatif');
    }
}
