<?php

class Client_Model extends CI_Model {
    
    public function save_client_fund_story($data){
        $this->db->insert('tbl_fund',$data);
    }
    
    public function select_all_fund_story(){
        $this->db->select('*');
        $this->db->from('tbl_fund');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result ; 
    }
    
    public function unpublish_fund_by_id($fund_id){
        $this->db->set('publication_status',0);
        $this->db->where('fund_id',$fund_id);
        $this->db->update('tbl_fund');
    }
    
    public function publish_fund_by_id($fund_id){
        $this->db->set('publication_status',1);
        $this->db->where('fund_id',$fund_id);
        $this->db->update('tbl_fund');  
    }
    
    public function delete_fund_by_id($fund_id){
        $this->db->where('fund_id',$fund_id);
        $this->db->delete('tbl_fund');
    }
    
    public function select_all_client_info($client_id){
        $this->db->select('*');
        $this->db->from('tbl_client_info');
        $this->db->where('client_id',$client_id);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
    
}
