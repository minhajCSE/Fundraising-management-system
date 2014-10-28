<?php

class Welcome_Model extends CI_Model {
    
    public function select_all_publish_navigation(){
        $this->db->select('*') ;
        $this->db->from('tbl_navigation') ;
        $this->db->where('publication_status',1);
        $this->db->order_by('navigation_id','DESC');
        $this->db->limit(7);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result ; 
    }
    
    // Show all publish category in front End
    public function select_all_publish_category(){
        $this->db->select('*') ;   
        $this->db->from('tbl_category') ;
        $this->db->where('publication_status',1);
        $this->db->order_by('category_id','ASC')->limit(6);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result ; 
    }
    
    public function select_all_publish_category_in_fund_page(){
        $this->db->select('*') ;   
        $this->db->from('tbl_category') ;
        $this->db->where('publication_status',1);
        $this->db->order_by('category_id','ASC');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result ;  
    }

    public function select_all_publish_category_two(){
        $this->db->select('*') ;
        $this->db->from('tbl_category') ;
        $this->db->where('publication_status',1);
        $this->db->order_by('category_id','DESC')->limit(6);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result ;  
    }
     
    public function save_client_info($data){
        $data=array();
        $data['client_username']=$this->input->post('client_username',true);
        $data['client_email']=$this->input->post('client_email',true);
        $data['client_password']=$this->input->post('client_password',true);
        $data['client_confirm_password']=$this->input->post('client_confirm_password',true);
        $data['client_firstname']=$this->input->post('client_firstname',true);
        $data['client_lastname']=$this->input->post('client_lastname',true);
        $data['client_address']=$this->input->post('client_address',true);
        $data['client_country']=$this->input->post('client_country',true);
        $data['client_city']=$this->input->post('client_city',true);
        $data['client_mobile']=$this->input->post('client_mobile',true);
        $data['client_email']=$this->input->post('client_email',true);
        $data['client_alternative_email']=$this->input->post('client_alternative_email',true);
        $data['client_donate_for']=$this->input->post('client_donate_for',true);
        $data['client_description']=$this->input->post('client_description',true);
        $this->db->insert('tbl_client_info',$data);
    }
    
    public function ajax_email_check_info($email_address){
        $this->db->select('*');
        $this->db->from('tbl_client_info');
        $this->db->where('client_email',$email_address);
        $query_result=$this->db->get();
        $result=$query_result->row();
        return $result;
    }
    
    
    public function save_donor_info($data){
        $data=array();
        $data['donor_username']=$this->input->post('donor_username',true);
        $data['donor_mail']=$this->input->post('donor_mail',true);
        $data['donor_password']=$this->input->post('donor_password',true);
        $data['donor_confirm_password']=$this->input->post('donor_confirm_password',true);
        $data['donor_firstname']=$this->input->post('donor_firstname',true);
        $data['donor_lastname']=$this->input->post('donor_lastname',true);
        $data['donor_address']=$this->input->post('donor_address',true);
        $data['donor_country']=$this->input->post('donor_country',true);
        $data['donor_city']=$this->input->post('donor_city',true);
        $data['donor_mobile']=$this->input->post('donor_mobile',true);
        $data['donor_mail']=$this->input->post('donor_mail',true);
        $data['donor_alternative_mail']=$this->input->post('donor_alternative_mail',true);
        $data['donor_donate_for']=$this->input->post('donor_donate_for',true);
        $data['donor_description']=$this->input->post('donor_description',true);
        $this->db->insert('tbl_donor_info',$data);
    }
     
     public function select_all_hot_news(){
        $this->db->select('*') ;
        $this->db->from('tbl_news') ;
        $this->db->where('publication_status',1);
        $this->db->where('featured_news',1);
        $this->db->limit(6);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result ;
     }
     
    public function select_news_by_id($news_id) {
        $this->db->select('*');
        $this->db->from('tbl_news');
        $this->db->where('news_id',$news_id);
        $this->db->limit(6);
        $query_result=$this->db->get();
        $result=$query_result->row();
        return $result;
    }
    
    public function select_all_publish_story(){
        $this->db->select('*') ;
        $this->db->from('tbl_success') ;
        $this->db->where('publication_status',1);
        $this->db->order_by('success_id','DESC');
        $this->db->limit(4);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result ; 
    }
    
    public function select_all_publish_story_title(){
        $this->db->select('*') ;
        $this->db->from('tbl_success') ;
        $this->db->where('publication_status',1);
        $this->db->order_by('success_id','ASC');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result ;  
    }

    public function select_all_publish_fund_story_one($per_page,$offset){
        if($offset==NULL)
        {
            $offset=0;
        }
        
        $sql="SELECT * FROM tbl_fund  LIMIT $offset,$per_page ";
        $query_result = $this->db->query($sql);
        $result = $query_result->result();
        return $result;
        
        /* $this->db->select('*') ;
        $this->db->from('tbl_fund') ;
        $this->db->where('publication_status',1);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result ; */
    }

    public function select_success_by_id($success_id) {
        $this->db->select('*');
        $this->db->from('tbl_success');
        $this->db->where('success_id',$success_id);
        $this->db->limit(4);
        $query_result=$this->db->get();
        $result=$query_result->row();
        return $result;
    }
    
    public function select_all_publish_fund_story(){
        $this->db->select('*') ;
        $this->db->from('tbl_fund') ;
        $this->db->where('publication_status',1);
        $this->db->order_by('fund_id','DESC');
        $this->db->limit(4);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result ; 
    }

    public function select_fund_by_category($fund_category) {
        $this->db->select('*');
        $this->db->from('tbl_fund');
        $this->db->where('publication_status',1);
        $this->db->where('fund_category',$fund_category);
        $query_result=$this->db->get();
        $result=$query_result->result();
        return $result;
    }
   
    
    public function save_contact_message_info(){
        $data =array();
        $data['contact_name'] = $this->input->post('contact_name',true);
        $data['contact_mail'] = $this->input->post('contact_mail',true);
        $data['contact_subject'] = $this->input->post('contact_subject',true);
        $data['contact_message'] = $this->input->post('contact_message',true);
        $this->db->insert('tbl_mail',$data);
    }
    
    public function save_event_registration(){
        $data =array();
        $data['first_name'] = $this->input->post('first_name',true);
        $data['last_name'] = $this->input->post('last_name',true);
        $data['email_address'] = $this->input->post('email_address',true);
        $data['password'] = md5($this->input->post('password',true));
        $this->db->insert('tbl_event',$data); 
    }

    public function save_fund_apply_details($fund_id){
        $data = array();
        $data['fund_title'] = $this->input->post('fund_title',true);
        $data['client_id'] = $this->session->userdata('client_id');
        $data['client_username'] = $this->session->userdata('client_username');
        $data['donor_id'] = $this->session->userdata('donor_id');
        $data['category_name'] = $this->input->post('category_name',true);
        $data['fund_ammount'] = $this->input->post('fund_ammount',true);
        $data['client_email'] = $this->input->post('client_email',true);
        $data['message'] = $this->input->post('message',true);
        $data['fund_id'] = $fund_id;
        $this->db->insert('tbl_fund_request',$data); 
    }
    
   
    
    // Check application
    public function check_application($fund_id,$client_id)
    {
        $this->db->select();
        $this->db->from("tbl_fund_request");
        $this->db->where(array('fund_id'=>$fund_id, 'client_id'=>$client_id));
        return $this->db->get()->row();
    }    
}
