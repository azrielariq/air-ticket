<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('search_m');
	}

	public function index()
	{
		if ($this->input->get('rute_from')) {
			$rute_from = $this->input->get('rute_from');
			$rute_to = $this->input->get('rute_to');
			$depart_time = $this->input->get('depart_time');
			$totalpassengers = $this->input->get('totalpassengers');

			$data = [ //make data to array
				'date(depart_time)' => $depart_time,
				'rute_from' => $rute_from,
				'rute_to' => $rute_to
			];

			// var_dump($data);

			$search = $this->search_m->search_rute($data); //search
			if (count($search) < 1) {
				echo "Rute tidak ditemukan";
			} else {
				$v_data['data'] = $search;
				$this->load->view('template/header1_v');
				$this->load->view('search_result', $v_data);
				$this->load->view('template/footer_v');
			}
		} 
		else {
			echo 'Harap mengisi form dengan benar';
		}
	}
}