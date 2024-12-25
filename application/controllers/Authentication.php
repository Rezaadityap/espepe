<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Authentication extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->load->view('login');
	}

	public function login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$cek = $this->AuthModel->auth_check($username, $password);

		if($cek == false){
			$this->session->set_flashdata('error_message', 'Username atau Password Salah');
			redirect('authentication');
		} else {
			$this->session->set_userdata('username',$cek->username);
			$this->session->set_userdata('nama_user',$cek->nama_user);
			$this->session->set_userdata('role_id',$cek->role_id);

			switch($cek->role_id){
				case 1: 
					redirect('admin/dashboard');
					break;
				case 2;
					redirect('user/dashboard');
					break;
				default:
					break;
			}
		}
	}

	 public function logout()
    {
        $this->session->sess_destroy();
        redirect('authentication');
    }
}