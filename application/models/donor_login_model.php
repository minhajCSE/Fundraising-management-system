<?php

class Donor_Login_Model extends CI_Model {
    public function check_donor_login($data){
        $this->db->select('*');
        $this->db->from('tbl_donor_info');
        $this->db->where('donor_username',$data['donor_username']);
        $this->db->where('donor_password',$data['donor_password']);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }
}

