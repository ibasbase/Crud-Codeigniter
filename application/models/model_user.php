<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_user extends CI_Model {

	public function get_user($where = ""){
		$data_user = $this->db->query("select * from user ".$where);
		return $data_user->result_array();
	}

	public function insert_data($table, $data){
		$temp = $this->db->insert($table, $data);
		return $temp;

	}

	public function update_data($table, $data, $where){
		$temp = $this->db->update($table, $data, $where);
		return $temp;

	}

	public function delete_data($table, $where){
		$temp = $this->db->delete($table, $where);
		return $temp;

	}

	public function search($cari){
		$cari=$this->db->query("select * from user where id_user like '%$cari%'  ");
		return $cari->result();
	}

}
