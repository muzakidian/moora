<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->load->view('index');
		// $this->load->view('dashboard');
	}
	public function dashboard()
	{
		$this->load->view('header/header');
		$this->load->view('sidebar/sidebar');
		$this->load->view('dashboard/dashboard');
		$this->load->view('footer/footer');

	}

	public function dashboard2()
	{
		$this->load->view('header/header');
		$this->load->view('dashboard/dashboard2');
		$this->load->view('footer/footer');
	}
	public function kriteria()
	{
		$data['tab_kriteria'] = $this->Mymodel->GetData();
		$this->load->view('header/header');
		$this->load->view('sidebar/sidebar');
		$this->load->view('kriteria' ,$data);
		$this->load->view('footer/footer');

	}
	public function tambah_data()
	{
		$data['tab_kriteria'] = $this->Mymodel->GetData();
		$this->load->view('header/header');
		$this->load->view('sidebar/sidebar');
		$this->load->view('tambah_data' ,$data);
		$this->load->view('footer/footer');
	}
	public function proses_tambah_data()
	{
		$this->form_validation->set_rules('nama_kriteria','Nama Kriteria','required');
		if ($this->form_validation->run() == false) {
			redirect('welcome/tambah_data');
		}
		else {
			$this->Mymodel->proses_tambah();
			redirect('welcome/kriteria');
		}

	}
}
