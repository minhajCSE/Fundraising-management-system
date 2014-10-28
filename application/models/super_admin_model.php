<?php

class Super_Admin_Model extends CI_Model {
    
    public function save_navigation_item($data){
       $data=array();
       $data['add_navigation']=$this->input->post('add_navigation',true);
       $data['publication_status']=$this->input->post('publication_status',true);
       $this->db->insert('tbl_navigation',$data);
    }
    
    // Save category item ( Model )
    Public function save_category_item($data){
        $data = array();
        $data['category_name'] = $this->input->post('category_name',true);
        $data['publication_status'] = $this->input->post('publication_status',true) ;
        $this->db->insert('tbl_category',$data);
    }
    
    public function select_category_item(){
        $this->db->select('*');
        $this->db->from('tbl_category');
        $query_result=$this->db->get();
        $result=$query_result->result();
        return $result;
    }
    
    public function unpublish_category_by_id($category_id){
        $this->db->set('publication_status',0);
        $this->db->where('category_id',$category_id);
        $this->db->update('tbl_category');
    }
    
    public function publish_category_by_id($category_id){
        $this->db->set('publication_status',1);
        $this->db->where('category_id',$category_id);
        $this->db->update('tbl_category');
    }
    
    public function delete_category_by_id($category_id){
        $this->db->where('category_id',$category_id);
        $this->db->delete('tbl_category');
    }
    
    public function save_news_content() {
        $data=array();
        $data['news_title']=$this->input->post('news_title',true);
        $data['category_id']=$this->input->post('category_id',true);
        $data['full_news']=$this->input->post('full_news',true);
        $data['featured_news']=$this->input->post('featured_news',true);
        $data['author_name']=$this->session->userdata('admin_name');
        $data['publication_status']=$this->input->post('publication_status',true);
        $this->db->insert('tbl_news',$data);   
    }
    
    public function select_all_news() {
        $sql="SELECT n.news_id,n.news_title,n.author_name,n.publication_status,n.featured_news,
              c.category_name FROM tbl_news as n, tbl_category as c WHERE n.category_id=c.category_id";
       
        $query_result=$this->db->query($sql);
        $result=$query_result->result();
        return $result;
    }
    
    public function unpublish_news_by_id($news_id){
        $this->db->set('publication_status',0);
        $this->db->where('news_id',$news_id);
        $this->db->update('tbl_news');
    }
    
    public function publish_news_by_id($news_id){
        $this->db->set('publication_status',1);
        $this->db->where('news_id',$news_id);
        $this->db->update('tbl_news');
    }
    
    public function delete_news_by_id($news_id){
        $this->db->where('news_id',$news_id);
        $this->db->delete('tbl_news');
    }
    
    
    public function save_success_story_content($data) {
        $this->db->insert('tbl_success',$data);      
    }
    
    public function select_message_item(){
        $this->db->select('*');
        $this->db->from('tbl_mail');
        $query_result=$this->db->get();
        $result=$query_result->result();
        return $result;
    }
    
    public function delete_message_by_id($contact_id){
        $this->db->where('contact_id',$contact_id);
        $this->db->delete('tbl_mail');
    }
    
    public function save_organization_content($data) {
        $this->db->insert('tbl_organization',$data);  
    }
    
    public function select_all_publish_organization(){
        $this->db->select('*');
        $this->db->from('tbl_organization');
        $query_result= $this->db->get();
        $result = $query_result->result();
        return $result ;
    }
    
    public function unpublish_organization_by_id($organization_id){
        $this->db->set('publication_status',0);
        $this->db->where('organization_id',$organization_id);
        $this->db->update('tbl_organization');
    }
    
    public function publish_organization_by_id($organization_id){
        $this->db->set('publication_status',1);
        $this->db->where('organization_id',$organization_id);
        $this->db->update('tbl_organization');
    }
    
    public function delete_organization_by_id($organization_id){
        $this->db->where('organization_id',$organization_id);
        $this->db->delete('tbl_organization');
    }
    
    
}
