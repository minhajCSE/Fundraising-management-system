<?php 

class Administration_Model extends CI_Model {
    
    public function admin_login_check($data){
        $this->db->select('*');
        $this->db->from('tbl_admin');
        $this->db->where('admin_username',$data['admin_username']);
        $this->db->where('admin_password',md5($data['admin_password']));
        $query_result=$this->db->get();
        $result=$query_result->row();
        return $result;
    }
}
