<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_barang extends CI_Model {

	public function get_barang($where = ""){
		$data_barang = $this->db->query("select * from barang ".$where);
		return $data_barang->result_array();
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

	public function get_id_jenis(){
		$data = array();
		$query = $this->db->get('jenis_barang');
		if($query->num_rows() > 0){
			foreach($query->result_array() as $rows){
				$data[] = $rows;

			}
		}

		$query->free_result();
		return $data;
	}
}
