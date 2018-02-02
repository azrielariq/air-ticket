<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Nyoba_m extends CI_Model
{
	
	/*function __construct(argument)
	{
		# code...
	}*/

	public function getRute(){
		$data = $this->db->query("SELECT * FROM rute");
		return $data->result_array();
	}

	public function insertData(){

	}

	public function updateData(){

	}

	public function deleteData(){
		
	}
}