<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function get(){
		$students = $this->user_model->get_students();
		$data['students'] = $students;
		if($data['students'] !== FALSE){
			echo json_encode($data['students']);
		} else{
			echo json_encode("No data returned");
		}
	}
	
	public function create(){
		$this->load->helper('string');
		$username = random_string('alpha', rand(3,10));
		$password = random_string('alnum', rand(3,10));

		$creation = $this->user_model->insert_student($username, $password);

		if($creation !== FALSE){
			$new_student = array('id' => NULL, 'username' => $username, 'password' => $password);
			echo json_encode($new_student);
		} else{
			echo json_encode('Creation failed');
		}
	}

	public function random_update(){
		if($id){
			$this->load->helper('string');
			$username = random_string('alpha', rand(3,10));
			$password = random_string('alnum', rand(3,10));

			$update = $this->user_model->update_student_by_id($id, $username, $password);

			if($update !== FALSE){
				$updated_student = array('username' => $username, 'password' => $password);
			} else{
				echo json_encode('Update failed to push up');
			}
		} else{
			echo json_encode('Missing id');
		}
	}

}
