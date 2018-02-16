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
		$query = $this->db->get('rute');
		return $query->result_array();
	}

	public function insertData(){

	}

	public function updateData(){

	}

	public function deleteData(){
		
	}
}