<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Alternatif extends CI_Controller
{
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
        $this->form_validation->set_rules('nama_alternatif', 'Nama Alternatif', 'trim|required');
        if ($this->form_validation->run() == FALSE) {
            $data['tab_alternatif'] = $this->Mymodel->GetDataAlt();
            $this->load->view('header/header');
            $this->load->view('sidebar/sidebar');
            $this->load->view('alternatif/tambah_data_alt', $data);
            $this->load->view('footer/footer');
        } else {
            $this->Mymodel->proses_tambah_alt();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Sukses, data berhasil <b>ditambahkan</b>!</div>');
            redirect('alternatif/alternatif');
        }
    }

    public function edit_data_alt($id_alternatif)
    {
        $data = array();
    	$data['tab_alternatif'] = $this->Mymodel->ambil_id_alternatif($id_alternatif);
    	$this->load->view('header/header');
    	$this->load->view('sidebar/sidebar');
    	$this->load->view('alternatif/edit_data_alt' ,$data);
    	$this->load->view('footer/footer');
    }

    public function proses_edit_data_alt($id_alternatif)
    {
    	$this->Mymodel->proses_edit_data_alt($id_alternatif);
    	redirect('alternatif/alternatif');
    }

    public function hapus_data_alt($id_alternatif)
    {
        $this->Mymodel->hapus_data_alt($id_alternatif);
        redirect('alternatif/alternatif');
    }
}