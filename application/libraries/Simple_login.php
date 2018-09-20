<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*simple_login class
class ini gunakan untuk fitur login, poteksi halaman dan logout*/

	class Simple_login{
/*SET SUPER GLOBAL*/
	var $CI = NULL;

/*class constructor*/
/*@return *//*void*/

	public function __construct() {
		$this->CI =& get_instance();
	}

		/*cek username dan password pada table user, jika ada set session berdasar data user dari table user 
		@param string username dari input form
		@param string password dari input form*/ 

		public function login($username, $password) {
			/*cek username dan password*/

			$query = $this->CI->db->get_where('user',array('username'=>$username,'password' => md5($password)));

			if($query->num_rows() == 1) {
				/*ambil data user bedasarkan username */
				$rows = $this->CI->db->query('select id_user from user where username = "'.$username.'"');
				$admin = $row->row();
				/*$id = $admin->id_user;*/

				/*set session user*/
				$this->CI->session->set_userdata('username', $username);
/*				$this->CI->session->set_userdata('id_login', uniqid(rand()));
				$this->CI->session->set_userdata('id', $id);
*/
				/*redirect ke halaman dashboard*/
				redirect(site_url('controller_dashboard'));
			}else{
				/*jika tidak ada, set notifikasi dalam flashdata*/
				$this->CI->session->set_flashdata('sukses', 'Username atau password anda salah, silakan coba lagi');

				/*redirect ke halaman login*/
				redirect(site_url('controller_login'));

			}

			return false;

		}

			/*cek session login, jika tidak ada, set notifikasi dalam flashdata, lalu di alihkan ke halaman login*/

			public function cek_login(){
				/*cek session username*/
				if($this->CI->session->set_userdata('username') == ''){

					/*set notifikasi*/
					$this->CI->session->set_flashdata('sukses','anda belum login');

					/*alihkan ke halaman login*/
					redirect (site_url('controller_login'));

				}
			}

			/*hapus session, lalu set notifikasi kemudian dialihkan ke halaman login*/
			public function logout(){
				$this->CI->session->unset_userdata('username');
				$this->CI->session->unset_userdata('id_login');
				$this->CI->session->unset_userdata('id');
				$this->CI->session->set_flashdata('sukses','Anda berhasil logout');
				redirect(site_url('controller_login'));
			}
		}
