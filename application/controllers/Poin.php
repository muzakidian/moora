<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Poin extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        $this->load->model('Mymodel');
    }

    public function poin()
    {
        $data = array();
        $data['tab_poin'] = $this->Mymodel->GetDataPoin();
        $data['tab_alternatif'] = $this->Mymodel->GetDataAlt();
        $this->load->view('header/header');
        $this->load->view('sidebar/sidebar');
        $this->load->view('poin/poin', $data);
        $this->load->view('footer/footer');

    }

    public function tambah_data_poin()
    {
        $data = array();
        $data['tab_poin'] = $this->Mymodel->GetDataPoin();
        $data['tab_kriteria'] = $this->Mymodel->GetData();
        $data['tab_alternatif'] = $this->Mymodel->GetDataAlt();
        $this->load->view('header/header');
        $this->load->view('sidebar/sidebar');
        $this->load->view('poin/tambah_data_poin', $data);
        $this->load->view('footer/footer');
    }
    public function proses_tambah_data_poin()
    {
        $data = array();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->form_validation->set_rules('poin', 'Nama poin', 'required');
        $data['tab_poin'] = $this->Mymodel->GetDataPoin();
        $data['tab_kriteria'] = $this->Mymodel->GetData();
        $data['tab_alternatif'] = $this->Mymodel->GetDataAlt();
        if ($this->form_validation->run() == FALSE) {
            
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