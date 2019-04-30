<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller {

	
	public function index()
	{
		redirect('http://localhost/studentReg/index.php/student/viewStudent');
	}
    
    public function addStudent(){
        $this->load->view('addStudent');
    }
    
    public function createStudent(){
        $studentName = $this->input->post('studentName');
        $studentCource = $this->input->post('studentCource');
        $studentSemester = $this->input->post('studentSemester');
        $studentAddress = $this->input->post('studentAddress');
        
        $data['student_name'] = $studentName;
        $data['student_cource'] = $studentCource;
        $data['student_semester'] = $studentSemester;
        $data['student_address'] = $studentAddress;
        
        $this->student_model->insert($data);
        
        redirect('http://localhost/studentReg/index.php/student/viewStudent');
    }
    
    public function viewStudent(){
        $data['students'] = $this->student_model->getStudents();
        $this->load->view('viewStudent',$data);
    }
    
    public function editStudent(){
        $id = $this->uri->segment(3);
        $data['student'] = $this->student_model->getStudent($id);
        $this->load->view('editStudent',$data);
    }
    
    public function updateStudent(){
        $id = $this->uri->segment(3);
        $studentName = $this->input->post('studentName');
        $studentCource = $this->input->post('studentCource');
        $studentSemester = $this->input->post('studentSemester');
        $studentAddress = $this->input->post('studentAddress');
        
        $data['student_name'] = $studentName;
        $data['student_cource'] = $studentCource;
        $data['student_semester'] = $studentSemester;
        $data['student_address'] = $studentAddress;
        
        $this->student_model->update($data,$id);
        
        redirect('http://localhost/studentReg/index.php/student/viewStudent');
    }
    
    public function deleteStudent(){
        $id = $this->uri->segment(3);
        $this->student_model->delete($id);
        redirect('http://localhost/studentReg/index.php/student/viewStudent');
    }
    
    
}
