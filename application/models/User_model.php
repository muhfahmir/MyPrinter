<?php

class User_model extends CI_Model{
    public function getAllUser(){
        return $this->db        
        ->get('user')
        ->result_array();
    }
    
    public function addUser($data){
        $this->db->insert("user",$data);
    }

    public function countUser(){
        return $this->db->count_all_results("user");
    }
    
    public function getUserById($id){
        return $this->db->get_where('user',['id'=>$id])->row_array();
    }

    public function updateUser($id,$data){
        $this->db->where('id', $id)
        ->update('user', $data);
    }

    public function deleteUser($id){
        return $this->db->delete('user', ['id' => $id]);
    }
}