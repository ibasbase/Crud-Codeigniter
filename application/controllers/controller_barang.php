<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class controller_barang extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper(array('url','download'));
	}

	public function index(){
		$data_barang = $this->model_barang->get_barang();
		$this->load->view('view_barang', array('data_barang' =>$data_barang));
	}

	public function add_data(){
		/*data combo*/
		$this->load->model('model_barang');
		$data['jenis_barang'] = $this->model_barang->get_id_jenis();
		/*data combo*/
		$this->load->view('view_barang_add', $data);
	}

	public function edit_data($id_barang){
		$edit = $this->model_barang->get_barang("where id_barang = '$id_barang'");

		$data = array(
			"id_barang" 		=> $edit[0]['id_barang'],
			"id_jenis_barang" 	=> $edit[0]['id_jenis_barang'],
			"nama_barang"		=> $edit[0]['nama_barang'],
			"stok"				=> $edit[0]['stok'],
			"harga_beli"		=> $edit[0]['harga_beli'],
			"harga_jual"		=> $edit[0]['harga_jual']
		);

		$this->load->view('view_barang_edit', $data);

	}

/*----------------------------------------------------------------------------------------------------*/

	public function do_add(){
		$id_barang 			= $_POST['id_barang'];
		$id_jenis_barang 	= $_POST['id_jenis_barang'];
		$nama_barang 		= $_POST['nama_barang'];
		$stok 				= $_POST['stok'];
		$harga_beli 		= $_POST['harga_beli'];
		$harga_jual 		= $_POST['harga_jual'];

		$data_add = array(
			"id_barang"			=> $id_barang,
			"id_jenis_barang"	=> $id_jenis_barang,
			"nama_barang"		=> $nama_barang,
			"stok"				=> $stok,
			"harga_beli"		=> $harga_beli,
			"harga_jual"		=> $harga_jual
			);

		$temp = $this->model_barang->insert_data('barang', $data_add);
		if($temp>= 1){
			redirect('controller_barang/index');
		}else{
			redirect('controller_barang/add_data');
		}
	}

	public function do_delete($id_barang){
		$where = array(
			"id_barang" => $id_barang
			);

		$temp = $this->model_barang->delete_data('barang', $where);
		if($temp>= 1){
			redirect('controller_barang/index');

		}

	}

	public function do_edit(){
		$id_barang			= $_POST['id_barang'];
		$id_jenis_barang	= $_POST['id_jenis_barang'];
		$nama_barang		= $_POST['nama_barang'];
		$stok				= $_POST['stok'];
		$harga_beli			= $_POST['harga_beli'];
		$harga_jual			= $_POST['harga_jual'];

		$data_edit = array(
			"id_jenis_barang" 	=> $id_jenis_barang,
			"nama_barang"		=> $nama_barang,
			"stok"				=> $stok,
			"harga_beli"		=> $harga_beli,
			"harga_jual"		=> $harga_jual
		);

		$where = array(
			"id_barang"	=> $id_barang
		);

		$temp = $this->model_barang->update_data('barang', $data_edit, $where);
		if($temp >=1){
			redirect('controller_barang/index');
		}else{
			redirect('controller_barang/edit_data');
		}
	}

	public function download_barang(){
		force_download('gambar/Futsal.jpg', null);
		force_download('gambar/Menuu.jpg', null);


/*		if($this->agent->is_browser()){
			$this->agent->browser().' '.$this->agent->version();
		}elseif($this->agent->is_browser()) {
			$agent = $this->agent->mobile();
		}else{
			$agent = 'Data user gagal di dapatkan';
		}

		echo "Diakses dari : <br/>";
		echo "Browser : ".$agent."<br/>";
		echo "Sistem operasi : ".$this->agent->platform()."<br/>";
		echo "IP : ".$this->input->ip_address();*/
	}
}
