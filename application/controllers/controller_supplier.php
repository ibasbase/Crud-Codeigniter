<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class controller_supplier extends CI_Controller {

	public function index(){
		$data_supplier = $this->model_supplier->get_supplier();
		$this->load->view('view_supplier', array('data_supplier' => $data_supplier));
	}

	public function add_data(){
		$this->load->view("view_supplier_add");
	}

	public function do_add(){
		$id_supplier = $_POST['id_supplier'];
		$nama_supplier = $_POST['nama_supplier'];
		$nama_barang = $_POST['nama_barang'];
		$no_telp = $_POST['no_telp'];
		$alamat = $_POST['alamat'];

		$data_add = array(
			"id_supplier" 	=> $id_supplier,
			"nama_supplier" => $nama_supplier,
			"nama_barang"	=> $nama_barang,
			"no_telp"		=> $no_telp,
			"alamat"		=> $alamat
		);

		$temp = $this->model_supplier->insert_data('supplier', $data_add);
		if($temp >= 1){
			redirect('controller_supplier/index');
		}else{
			redirect('controller_supplier/add_data');
		}
	}

	public function delete($id_supplier){
		$where = array(
			"id_supplier" => $id_supplier
		);

		$temp = $this->model_supplier->delete_data('supplier', $where);
		if($temp >= 1){
			redirect('controller_supplier/index');
		}
	}

	public function edit_data($id_supplier){
		$temp = $this->model_supplier->get_supplier("where id_supplier = '$id_supplier'");

		$data = array(
			"id_supplier" 		=> $temp[0]['id_supplier'],
			"nama_supplier" 	=> $temp[0]['nama_supplier'],
			"nama_barang"		=> $temp[0]['nama_barang'],
			"no_telp"			=> $temp[0]['no_telp'],
			"alamat"			=> $temp[0]['alamat']
		);

		$this->load->view('view_supplier_edit', $data);
	}

	public function do_edit(){
		$id_supplier 	= $_POST['id_supplier'];
		$nama_supplier 	= $_POST['nama_supplier'];
		$nama_barang 	= $_POST['nama_barang'];
		$no_telp 		= $_POST['no_telp'];
		$alamat 		= $_POST['alamat'];

		$data_edit = array(
			"nama_supplier" => $nama_supplier,
			"nama_barang" => $nama_barang,
			"no_telp" => $no_telp,
			"alamat" => $alamat
		);
			$where = array(
				"id_supplier" => $id_supplier
			);

			$temp = $this->model_supplier->update_data('supplier', $data_edit, $where);
			if($temp >= 1){
				redirect('controller_supplier/index');
			}else{
				redirect('controller_supplier/edit_data');
			}
	}

}
