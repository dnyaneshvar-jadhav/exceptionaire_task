<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserController extends CI_Controller {

	public function index()
	{
		$this->load->view('login');
	}

	public function checkLogin(){
		$response = array();
		$users = array();
		$str = file_get_contents('js/users.json');
		$json = json_decode($str, true);
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		foreach ($json['users'] as $user) {
			if($user['email'] == $email && $user['password'] == $password){
				$this->session->set_userdata('loginUser', $user);
				if($user['user_type']==1){
					redirect('/EmployeeController/listEmployee');
				}else{
					redirect('UserController/userDashboard');
				}
			}
		}	
		$this->session->set_flashdata('message', 'Invalid email or password.');
		redirect('UserController/');
	}

	public function register(){
		$this->load->view('register');
	}

	public function adduser(){
		$response = array();
		$users = array();
		$str = file_get_contents('js/users.json');
		$json = json_decode($str, true);
		$i=1;
		foreach ($json['users'] as $user) {
			$users['id'] = $i;
			$users[] = $user;
			$i++;
		}
		$data = $this->input->post();
		$data['id'] = $i++;
		$users[] = $data;
		$response['users'] = $users;
		$fp = fopen('js/users.json', 'w');
		fwrite($fp, json_encode($response)); 	
 				redirect('userController/');
	}

	public function userDashboard(){
		$this->load->view('user_dashboard');
	}
	
	public function userLogout(){
		$this->session->unset_userdata('loginUser');
		redirect('UserController/');
	}
}
