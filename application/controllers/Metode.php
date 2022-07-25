<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Metode extends CI_Controller
{	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('MetodeModel');
	}

	public function metode()
	{
		$data['url'] = 'Metode';

		$data['alternatif'] = $this->MetodeModel->get_nilai_setiap_alternatif();
		$data['kriteria'] = $this->MetodeModel->get_kriteria_by_id();
		$data['poin'] = $this->MetodeModel->get_all_nilai();

		// $nilai = $data['nilai'];
		// echo '<pre>';
		// var_dump($nilai);

		
		$alternatif = [];
		foreach ($this->db->get('tab_poin')->result_array() as $key => $value) {
			$alternatif[$value['id_alternatif']] = $value;
		}

		
		// echo '<pre>';
		// var_dump($alternatif);
		// die();
		$tranpose = [];
		foreach ($this->db->get('tab_poin')->result() as $key => $value) {
			$tranpose[$value->id_kriteria][$value->id_alternatif] = $value->poin;
		}
		$data['nilai_alternatif'] = $tranpose;
		// echo '<pre>';
		// var_dump($tranpose);
		// die();
		$sqrt   = [];
		foreach ($tranpose as $key => $value) {
			$sum = 0;
			foreach ($value as $k => $v) {
				$sum += pow($v, 2);
			}
			$sqrt[$key] = sqrt($sum);
		}
		$data['sqrt'] = $sqrt;
		// echo '<pre>';
		// var_dump($sqrt);
		// die();
		$normalisasi = [];
		foreach ($tranpose as $key => $value) {
			foreach ($value as $k => $v) {
				$normalisasi[$key][$k] = $v / $sqrt[$key];
			}
		}
		$data['normalisasi'] = $normalisasi;

		// echo '<pre>';
		// var_dump($normalisasi);
		// die();

		$kriteria = [];
		foreach ($this->db->get('tab_kriteria')->result() as $key => $value) {
			$kriteria[$value->id_kriteria] = $value;
		}

		$ternormalisasi = [];
		foreach ($normalisasi as $key => $value) {
			foreach ($value as $k => $v) {
				$ternormalisasi[$k][$key] = $v * $kriteria[$key]->bobot;
			}
		}
		$data['ternormalisasi'] = $ternormalisasi;

		//  echo '<pre>';
		//  var_dump($ternormalisasi);
		// die();


		$max = [];
		$min = [];
		$tabel_yi = [];
		foreach ($ternormalisasi as $key => $value) {
			$res = 0;
			$res2 = 0;
			foreach ($value as $a => $b) {
				if ($kriteria[$a]->type == 1) {
					// $new_only_benefit[$a] = $b ;
					$res += $b;
				} else {
					$res -= 0;
				}
				if ($kriteria[$a]->type == 0) {
					// $new_only_benefit[$a] = $b ;
					$res2 += $b;
				} else {
					$res2 -= 0;
				}
			}
			$max[$key] = $res;
			$min[$key] = $res2;
			$tabel_yi[$key] = $res - $res2;
		}
		$data['max'] = $max;
		$data['min'] = $min;
		$data['tabel_yi'] = $tabel_yi;
		

		// echo '<pre>';
		// var_dump($tabel_yi);
		// die();

		$rankings = array_unique($tabel_yi);
		rsort($rankings);

		$result_data = [];
		$i = 1;
		foreach ($rankings as $key => $value) {
			$result_data["". $value] = $i;
			$i++;
		}
		

		$text_rank = [];
		foreach ($tabel_yi as $key => $value) {
			$rank = $result_data["". $value];
			$alternatif[$key]['value'] = $value;
			$alternatif[$key]['rank']= $rank;
			$text_rank[] = $alternatif[$key];
		}

		function compareOrder($a, $b)
		{
		return ($a['rank'] > $b['rank'] ? 1 : -1);
		}
		usort($text_rank, 'compareOrder');
		$data['sorted_rank_data'] = $text_rank;
		// echo '<pre>';
		// var_dump($text_rank);
		// die();




        $this->load->view('header/header');
        $this->load->view('sidebar/sidebar');
        $this->load->view('metode/metode', $data);
        $this->load->view('footer/footer');


	}
}
