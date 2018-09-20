<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class controller_user extends CI_Controller {

	public function index(){
		$cari = $this->input->get('cari');
		$beda['cari'] = $this->model_user->search($cari);
		$this->load->view('view_user', $beda);
		/*$this->load->view('view_dashboard');*/
	}

	public function add_data(){
		$this->load->view('view_user_add');
	}

	public function edit_data($id_user){
		$edit = $this->model_user->get_user("where id_user = '$id_user'");

		$data = array(
			"id_user" 	=> $edit[0]['id_user'],
			"level"		=> $edit[0]['level']
		);

		$this->load->view('view_user_edit', $data);

		}		


	



/*----------------------------------------------------------------------------------------------------*/

	public function do_add(){
		$id_user 	= $_POST['id_user'];
		$level 		= $_POST['level'];

		$data_add = array(
			"id_user"	=> $id_user,
			"level"		=> $level
			);

		$temp = $this->model_user->insert_data('user', $data_add);
		if($temp>= 1){
			redirect('controller_user/index');
		}else{
			redirect('controller_user/add_data');
		}
	}

	public function do_delete($id_user){
		$where = array(
			"id_user" => $id_user
			);

		$temp = $this->model_user->delete_data('user', $where);
		if($temp>= 1){
			redirect('controller_user/index');

		}

	}

	public function do_edit(){
		$id_user	= $_POST['id_user'];
		$level		= $_POST['level'];

		$data_edit = array(
			"level"		=> $level
		);

		$where = array(
			"id_user"	=> $id_user
		);

		$temp = $this->model_user->update_data('user', $data_edit, $where);
		if($temp >=1){
			redirect('controller_user/index');
		}else{
			redirect('controller_user/edit_data');
		}
	}
}
