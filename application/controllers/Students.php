<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Students extends CI_Controller {

	public function __construct(){
		parent::__construct();
	
		$this->load->model('students_model','Students');
	}
	
	public function index()
	{	
		$header_data['title'] = "Students: View Student List";
		
		$students = array();
		
		$condition = array('sex'=>'F','course'=>'BSIT');
		
		$rs = $this->Students->read($condition);

		foreach($rs as $r){
			$info = array(
						'idno' => $r['idno'],
						'lastname' => $r['lname'],
						'firstname' => $r['fname'],
						'middlename' => $r['mname'],
						'course' => $r['course'],
						'sex' => $r['sex']					
						);
			$students[] = $info;
		}
		
		$data['students'] = $students;
		
		$this->load->view('include/header',$header_data);
		$this->load->view('students/view_students',$data);
		$this->load->view('include/footer');
	}
	
	public function profile($id){
		// echo "Display student profile with ID=$id";
		
		//call the model
		$student = $this->Students->read(array('idno'=>$id));
		
		if( count($student)>0 ){
			//find the student record
			//load the view
			$header_data['title'] = "Students: View Student Profile";
			$data['student'] = $student;
			
			$this->load->view('include/header',$header_data);		
			$this->load->view('students/profile',$data);
			$this->load->view('include/footer');		
		}		
		else{
			redirect('students','refresh');
		}
	}
}
