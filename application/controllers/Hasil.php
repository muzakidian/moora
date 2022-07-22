<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Hasil extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        $this->load->model('Mymodel');
    }

    public function hasil()
    {
        $data = array();
        $data['tab_poin'] = $this->Mymodel->GetDataPoin();
        $data['tab_alternatif'] = $this->Mymodel->GetDataAlt();
        $this->load->view('header/header');
        $this->load->view('sidebar/sidebar');
        $this->load->view('hasil/hasil', $data);
        $this->load->view('footer/footer');

    }
}