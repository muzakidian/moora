<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Poin extends CI_Controller
{
    public function poin()
    {
        $dataPoin['tab_poin'] = $this->Mymodel->GetDataPoin();
        $this->load->view('header/header');
        $this->load->view('sidebar/sidebar');
        $this->load->view('poin/poin', $dataPoin);
        $this->load->view('footer/footer');


    }

    public function tambah_data_poin()
    {
        $data['tab_poin'] = $this->Mymodel->GetDataPoin();
        $this->load->view('header/header');
        $this->load->view('sidebar/sidebar');
        $this->load->view('poin/tambah_data_poin', $data);
        $this->load->view('footer/footer');
    }
    public function proses_tambah_data_poin()
    {
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->form_validation->set_rules('nama_poin', 'Nama poin', 'required');
        if ($this->form_validation->run() == FALSE) {
            $data['tab_poin'] = $this->Mymodel->GetDataPoin();
            $this->load->view('header/header');
            $this->load->view('sidebar/sidebar');
            $this->load->view('poin/tambah_data_poin', $data);
            $this->load->view('footer/footer');
        } else {
            $this->Mymodel->proses_tambah_poin();
            redirect('poin/poin');
        }
    }

    public function hapus_data_poin($id_point)
    {
        $this->Mymodel->hapus_data_poin($id_point);
        redirect('poin/poin');
    }

    
}