<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kriteria extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        $this->load->model('Mymodel');
    }

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
    public function edit_data($id_kriteria)
    {
        $data = array();
    	$data['tab_kriteria'] = $this->Mymodel->ambil_id_kriteria($id_kriteria);
    	$this->load->view('header/header');
    	$this->load->view('sidebar/sidebar');
    	$this->load->view('kriteria/edit_data' ,$data);
    	$this->load->view('footer/footer');
    }
 
    //PROSES EDIT
    public function proses_edit_data($id_kriteria)
    {
    	$this->Mymodel->proses_edit_data($id_kriteria);
    	redirect('kriteria/kriteria');
    }

    // ALTERNATIF ALTERNATIF ALTERNATIF ALTERNATIF ALTERNATIF ALTERNATIF ALTERNATIF 

}
