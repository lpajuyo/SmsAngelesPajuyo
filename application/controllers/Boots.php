<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Boots extends CI_Controller {

	public function __construct(){
		parent::__construct();
	
		$this->load->model('students_model','Students');
		$this->load->model('course_model','Courses');
	}
	
	public function index(){	
		// echo "CI and Bootstrap";
		
		$header_data['title'] = "SMS Homepage";
		
		//$condition = array('course'=>'BSIT');
		
		$rs = $this->Students->read();//($condition);

		foreach($rs as $r){
			$info = array(
						'lastname' => $r['lname'],
						'firstname' => $r['fname'],
						'middlename' => $r['mname'],				
						);
			$students[] = $info;
		}
		
		$data['students'] = $students;
        
        $rs = $this->Courses->read();//($condition);

		foreach($rs as $r){
			$info = array(
						'course_name' => $r['course_name'],				
						);
			$courses[] = $info;
		}
		$data['courses'] = $courses;
		
		$this->load->view('include/header',$header_data);
		$this->load->view('include/heading-menu');
		$this->load->view('students/contents', $data);
		$this->load->view('include/footer');
		
	}	
    
    public function view_students(){
        $header_data['title'] = "View Students";
		
		//$condition = array('course'=>'BSIT');
		
		$rs = $this->Students->read();//($condition);

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
        $this->load->view('include/heading-menu');
		$this->load->view('students/view_students', $data);
		$this->load->view('include/footer');
		
    }
	
	public function add_student(){
		
		$data = array();
        
        $rs = $this->Courses->read();//($condition);

		foreach($rs as $r){
			$info = array(
						'course_name' => $r['course_name']			
						);
			$courses[] = $info;
		}
		$data['courses'] = $courses;
        
		if( $_SERVER['REQUEST_METHOD']=='POST'){ //form was submitted
			//save the new student
			//do some stuff
			// print_r($_POST);
			// Array ( [idno] => 11-111-111 [lname] => Magalpok
			// [fname] => Gorgonia [mname] => Restituto [course] => BSIT 
			// [sex] => F ) 
			
			$validate = array (
				array('field'=>'idno','label'=>'ID No','rules'=>'trim|required|min_length[2]'),
				array('field'=>'lname','label'=>'Last Name','rules'=>'trim|required|min_length[2]'),
				array('field'=>'fname','label'=>'First Name','rules'=>'trim|required|min_length[2]'),
				//array('field'=>'email','label'=>'Email Address','rules'=>'trim|required|is_unique[students.email]|valid_email|min_length[10]'),
			);

			$this->form_validation->set_rules($validate);
			
			if ($this->form_validation->run()===FALSE){
				$data['errors'] = validation_errors();
			}
			else{ //save the form
				
				//check for duplicate
				$record = array(
								'idno'=>$_POST['idno'],
								'lname'=>$_POST['lname'],
								'fname'=>$_POST['fname'],
								'mname'=>$_POST['mname'],
								'course'=>$_POST['course'],
								'sex'=>$_POST['sex'],
							);
							
				$insert_id = $this->Students->create($record);
				
				$data['saved'] = TRUE;
				
			}
			
		}
		else{ //display blank form
				
		}
		
		$header_data['title'] = "Add New Student";

			
		$this->load->view('include/header',$header_data);
        $this->load->view('include/heading-menu');
		$this->load->view('students/new_student', $data);
		$this->load->view('include/footer');
			
	}

	public function modal(){
		$header_data['title'] = "Add New Student";	
		$this->load->view('include/header',$header_data);	
		$this->load->view('students/modal');
		$this->load->view('include/footer');		
	}
    
    public function view_courses(){
        $header_data['title'] = "View Courses";
        
        $rs = $this->Courses->read();//($condition);

		foreach($rs as $r){
			$info = array(
						'course_id' => $r['course_id'],
						'course_name' => $r['course_name'],
						'course_desc' => $r['course_desc']				
						);
			$courses[] = $info;
		}
		$data['courses'] = $courses;
        
		$this->load->view('include/header',$header_data);
        $this->load->view('include/heading-menu');
		$this->load->view('students/view_courses',$data);
		$this->load->view('include/footer');		
    }
    
    public function add_course(){
        $data=array();
        
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $validate = array (
				array('field'=>'course_id','label'=>'Course Id','rules'=>'trim|required|min_length[1]'),
				array('field'=>'course_name','label'=>'Course Name','rules'=>'trim|required|min_length[2]'),
				array('field'=>'course_desc','label'=>'Course Description','rules'=>'trim|required|min_length[2]')
				//array('field'=>'email','label'=>'Email Address','rules'=>'trim|required|is_unique[students.email]|valid_email|min_length[10]'),
			);

			$this->form_validation->set_rules($validate);
			
			if ($this->form_validation->run()===FALSE){
				$data['errors'] = validation_errors();
			}
			else{ //save the form
				
				//check for duplicate
				$record = array(
								'course_id'=>$_POST['course_id'],
								'course_name'=>$_POST['course_name'],
								'course_desc'=>$_POST['course_desc']
							);
							
				$insert_id = $this->Courses->create($record);
				
				$data['saved'] = TRUE;
				
			}
        }
        
        $header_data['title'] = "Add New Course";
        
        $this->load->view('include/header',$header_data);
        $this->load->view('include/heading-menu');
        $this->load->view('students/new_course',$data);
        $this->load->view('include/footer');
        
    }
}
