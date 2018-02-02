<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nyoba extends CI_Controller
{
	
	/*public function __construct()
	{
		parent::__construct();

	}*/

	public function index(){
		$data = $this->nyoba_m->getRute();
		$this->load->view('nyoba_v', array('data' => $data));
	}

	public function insert(){

	}

	public function update(){

	}

	public function delete(){

	}
}