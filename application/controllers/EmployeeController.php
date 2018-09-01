<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EmployeeController extends CI_Controller {

	public function index()
	{
		$this->load->view('add_employee');
	}

	public function addEmp(){
		$response = array();
		$employees = array();

		$str = file_get_contents('js/employee.json');
		$json = json_decode($str, true);
		$i=1;
		foreach ($json['employees'] as $employee) {
			$employee['id'] = $i;
			$employees[] = $employee;
			$i++;
		}
		$data = $this->input->post();
		$data['id'] = $i++;
		$employees[] = $data;
		$response['employees'] = $employees;
		$fp = fopen('js/employee.json', 'w');
		fwrite($fp, json_encode($response)); 
		$this->session->set_flashdata('message', 'Employee added successfully.');
 		redirect('/EmployeeController/listEmployee');
	}

	public function listEmployee(){ 	

		$str = file_get_contents('js/employee.json');
		$employees = json_decode($str, true);
		$this->load->view('list_employee',$employees);
	}

	public function editEmp(){
		
		$id = $this->uri->segment(3);
		$str = file_get_contents('js/employee.json');
		$json = json_decode($str, true);
		$employees = [];
		foreach ($json['employees'] as $employee) {
			if($employee['id'] == $id){
				$data['employees'] = $employee;
				$this->load->view('edit_employee',$data);
			}
		}
	}
	public function updateEmp(){
		$id = $this->input->post('id');
		$response = array();
		$employees = array();
		$str = file_get_contents('js/employee.json');
		$json = json_decode($str, true);
		foreach ($json['employees'] as $employee) {
			if($employee['id'] == $id){
				$employee['first_name'] =$this->input->post('first_name');
				$employee['last_name'] =$this->input->post('last_name');
				$employee['email'] =$this->input->post('email');
				$employees[] = $employee;
			}else{
				$employees[] = $employee;
			}
		}
		$response['employees'] = $employees;
		$fp = fopen('js/employee.json', 'w');
		fwrite($fp, json_encode($response));
		$this->session->set_flashdata('message', 'Employee updated successfully.'); 	
 		redirect('/EmployeeController/listEmployee');
	}

	public function deleteEmp(){
		$response = array();
		$employees = array();
		$id = $this->uri->segment(3);
		$str = file_get_contents('js/employee.json');
		$json = json_decode($str, true);
		foreach ($json['employees'] as $kay=>$employee) {
			if($employee['id'] == $id){
				unset($json['employees'][$key]);
			}else{
				$employees[] = $employee;
			}
		}
		$response['employees'] = $employees;
		$fp = fopen('js/employee.json', 'w');
		fwrite($fp, json_encode($response)); 	
		$this->session->set_flashdata('message', 'Employee deleted successfully.');
		redirect('/EmployeeController/listEmployee');
	}
}
