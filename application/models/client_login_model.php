<?php

class Client_Login_Model extends CI_Model {
    public function check_client_login($data){
        $this->db->select('*');
        $this->db->from('tbl_client_info');
        $this->db->where('client_username',$data['client_username']);
        $this->db->where('client_password',$data['client_password']);
        $query_result=$this->db->get();
        $result=$query_result->row();
        return $result;
    }
}
