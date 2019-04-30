<?php


class Student_model extends CI_Model {
    
    public function insert($data){
         $this->db->insert('student',$data);
    }
    
    public function update($data,$id){
        $this->db->where('id',$id);
        $this->db->update('student',$data);
    }
    
    public function getStudents(){
        $this->db->select('*');
        $this->db->from('student');
        $query = $this->db->get();
        return $query->result_array();
    }
    
    public function getStudent($id){
        $this->db->select('*');
        $this->db->from('student');
        $this->db->where('id',$id);
        $query = $this->db->get();
        return $query->result_array();
    }
    
    public function delete($id){
        $this->db->where('id',$id);
        $this->db->delete('student'); 
    }
}