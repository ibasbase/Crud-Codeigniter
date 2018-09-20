<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class controller_jenis_barang extends CI_Controller {

	public function index(){
		$data_jenis_barang = $this->model_jenis_barang->get_jenis_barang();
		$this->load->view('view_jenis_barang', array('data_jenis_barang' =>$data_jenis_barang));
	}

	public function add_data(){
		$this->load->view('view_jenis_barang_add');
	}

	public function edit_data($id_jenis_barang){
		$edit = $this->model_jenis_barang->get_jenis_barang("where id_jenis_barang = '$id_jenis_barang'");

		$data = array(
			"id_jenis_barang" 	=> $edit[0]['id_jenis_barang'],
			"nama_jenis" 		=> $edit[0]['nama_jenis'],
		);

		$this->load->view('view_jenis_barang_edit', $data);

	}

/*----------------------------------------------------------------------------------------------------*/

	public function do_add(){
		$id_jenis_barang 	= $_POST['id_jenis_barang'];
		$nama_jenis 		= $_POST['nama_jenis'];

		$data_add = array(
			"id_jenis_barang"	=> $id_jenis_barang,
			"nama_jenis"		=> $nama_jenis
			);

		$temp = $this->model_jenis_barang->insert_data('jenis_barang', $data_add);
		if($temp>= 1){
			redirect('controller_jenis_barang/index');
		}else{
			redirect('controller_jenis_barang/add_data');
		}
	}

	public function do_delete($id_jenis_barang){
		$where = array(
			"id_jenis_barang" => $id_jenis_barang
			);

		$temp = $this->model_jenis_barang->delete_data('jenis_barang', $where);
		if($temp>= 1){
			redirect('controller_jenis_barang/index');

		}

	}

	public function do_edit(){
		$id_jenis_barang	= $_POST['id_jenis_barang'];
		$nama_jenis		= $_POST['nama_jenis'];

		$data_edit = array(
			"nama_jenis" => $nama_jenis
		);

		$where = array(
			"id_jenis_barang"	=> $id_jenis_barang
		);

		$temp = $this->model_user->update_data('jenis_barang', $data_edit, $where);
		if($temp >=1){
			redirect('controller_jenis_barang/index');
		}else{
			redirect('controller_jenis_barang/edit_data');
		}
	}
}
