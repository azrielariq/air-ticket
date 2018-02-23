<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function index(){
		$this->load->view('template/header_v');
		$this->load->view('landing');
		$this->load->view('template/footer_v');
	}
}