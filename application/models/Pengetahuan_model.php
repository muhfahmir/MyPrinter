<?php

class Pengetahuan_model extends CI_Model{
    public function getAllPengetahuan(){
        return $this->db
        ->order_by('id','asc')
        ->get('rule')
        ->result_array();
    }
    
    public function addPengetahuan($data){
        $this->db->insert("rule",$data);
    }

    public function countPengetahuan(){
        return $this->db->count_all_results("rule");
    }
    
    public function getPengetahuanById($id){
        return $this->db->get_where('rule',['id'=>$id])->row_array();
    }

    public function updatePengetahuan($id,$data){
        $this->db->where('id', $id)
        ->update('rule', $data);
    }

    public function deletePengetahuan($id){
        return $this->db->delete('rule', ['id' => $id]);
    }

    public function getPengetahuanPenyakit(){
        $this->db->select('*');
        $this->db->from('rule');
        $this->db->join('penyakit', 'penyakit.id = rule.id');
        $query = $this->db->get()->result_array();
        return $query;
    }

    public function getPengetahuanPenyakitId($id){
        $this->db->select('*');
        $this->db->from('rule');
        $this->db->where('rule.id',$id);
        $this->db->join('penyakit', 'penyakit.id = rule.id');
        $query = $this->db->get()->row_array();
        return $query;
    }

    public function getPenyakitbyParam($data=null){
        $param = [
            'G001'=>1,
            'G004'=>1,
            'G005'=>1
        ];
        return $this->db->select('id')
        ->get_where('rule',$param)->row_array();
    }
}