<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search_m extends CI_Model
{

	public function search_rute($data){
		$this->db->where($data); //where from $data array
		$query = $this->db->get('rute'); //get db
		return $query->result_array(); //return as array
	}

	// public function search_rute($data){
	// 	$this->db->select('*');
	// 	$this->db->from('rute');
	// 	$this->db->join('transportation', 'transportation_id = id');
	// 	$query = $this->db->get();
	// 	return $query->result_array();
	// }
}