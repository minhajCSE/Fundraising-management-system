<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

session_start();

class Super_Admin extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        $admin_id = $this->session->userdata('admin_id');
        if($admin_id ==NULL){
            redirect('administrator','refresh'); 
        }
    }  
    
    public function index(){
         $data[] = array();
         $data['admin_maincontent'] = $this->load->view('admin/dashboard',' ',true);
         $data['title']= 'Dashboard' ;
         $this->load->view('admin/admin_master',$data) ;

    }  
    
    // Logout from Admin Panel 
    public function logout(){
         $this->session->unset_userdata('admin_id');
         $this->session->unset_userdata('admin_username') ;
         $sdata['message'] = 'You are successfully logout ' ;
         $this->session->set_userdata($sdata);
         redirect('administrator');
    }
    
    // Show Navigation Page
    public function add_navigation(){
         $data = array() ;
         $data['admin_maincontent'] = $this->load->view('admin/add_navigation',' ',true);
         $data['title']= 'Add Navigation' ;
         $this->load->view('admin/admin_master',$data) ;            
    }

    //Save  Navigation item
    public function save_navigation(){
         $data=array();
         $this->super_admin_model->save_navigation_item();
         $sdata=array();
         $sdata['message']='Save Navigation Item Successfully !';
         $this->session->set_userdata($sdata);
         redirect('super_admin/add_navigation');
    }
    
    // Show Categories page  
    public function add_category(){
        $data = array();
        $data['admin_maincontent'] = $this->load->view('admin/add_category','', true);
        $data['title']= 'Add Category' ;
        $this->load->view('admin/admin_master',$data);
    }
    
    // Save Categories Item
    public function save_category(){
        $data = array();
        $this->super_admin_model->save_category_item();
        $sdata = array();
        $sdata['message'] = 'Your category has successfully saved !' ;
        $this->session->set_userdata($sdata) ;
        redirect('super_admin/add_category');
    }
    
    public function manage_category(){
        $data = array();
        $data['all_category'] = $this->super_admin_model->select_category_item();
        $data['admin_maincontent'] = $this->load->view('admin/manage_category',$data, true);
        $data['title']= 'Manage Category' ;
        $this->load->view('admin/admin_master',$data);
    }
    
    public function unpublish_category($category_id){
        $this->super_admin_model->unpublish_category_by_id($category_id);
        redirect('super_admin/manage_category');
    }
    
    public function publish_category($category_id){
        $this->super_admin_model->publish_category_by_id($category_id);
        redirect('super_admin/manage_category');
    }
    
     public function delete_category($category_id){
        $this->super_admin_model->delete_category_by_id($category_id);
        redirect('super_admin/manage_category');
    }
    
    
    public function add_news() {
        $data=array();
        $data['all_category'] = $this->welcome_model->select_all_publish_category();
        $data['admin_maincontent']=$this->load->view('admin/add_news',$data,true);
        $data['title']='Add News';
        $sdata['message'] = 'Your News has successfully saved !' ;
        $this->session->set_userdata($sdata) ;
        $this->load->view('admin/admin_master',$data);       
    }

    public function save_news() {
        $this->super_admin_model->save_news_content();
        $data=array();
        $data['publication_status']=$this->input->post('publication_status',true);
        if($data['publication_status']=='1'){
            $sdata=array();
            $sdata['message']='News Published';
            $this->session->set_userdata($sdata);
        }
        if($data['publication_status']=='0'){
            $sdata=array();
            $sdata['message']='News Saved But Not Published';
            $this->session->set_userdata($sdata);
        }
        redirect('super_admin/add_news');
    }
    
    public function manage_news(){
        $data = array();
        $data['all_news']=$this->super_admin_model->select_all_news();
        $data['admin_maincontent'] = $this->load->view('admin/manage_news',$data, true);
        $data['title']= 'Manage News' ;
        $this->load->view('admin/admin_master',$data);
    }
    
    public function unpublish_news($news_id){
        $this->super_admin_model->unpublish_news_by_id($news_id);
        redirect('super_admin/manage_news');
    }
    
     public function publish_news($news_id){
        $this->super_admin_model->publish_news_by_id($news_id);
        redirect('super_admin/manage_news');
    }
    
    public function delete_news($news_id){
        $this->super_admin_model->delete_news_by_id($news_id);
        redirect('super_admin/manage_news');
    }
    
    public function add_success_story() {
        $data=array();
        $data['all_category'] = $this->welcome_model->select_all_publish_category();
        $data['admin_maincontent']=$this->load->view('admin/success_story',$data,true);
        $data['title']='Add Success Story';
        $sdata['message'] = 'Your Story has successfully saved !' ;
        $this->session->set_userdata($sdata) ;
        $this->load->view('admin/admin_master',$data);       
    }
    
    public function save_success_story() {
        $data=array();
        $data['success_id']=$this->input->post('success_id',true);
        $data['success_title']=$this->input->post('success_title',true);
        $data['success_summary']=$this->input->post('success_summary',true);
        $data['success_details']=$this->input->post('success_details',true);
        $data['success_img']=$this->session->userdata('success_img',true);
        $data['publication_status']=$this->input->post('publication_status',true);
        
        
        // Upload image start
        $config['upload_path'] = 'images/story_img/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size']	= '1000';
        $config['max_width']  = '200';
        $config['max_height']  = '180';
        $error = '';
        $fdata=array();
        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('success_img'))
        {
            $error =$this->upload->display_errors();

           // $this->load->view('upload_form', $error);
            exit();
        }
        else
        {
            $fdata = $this->upload->data();
            $data['success_img'] = $config['upload_path'].$fdata['file_name'];
           // $this->load->view('upload_success', $data);
        }
        // Upload image End
        
        $this->super_admin_model->save_success_story_content($data);
        $data['publication_status']=$this->input->post('publication_status',true);
        if($data['publication_status']=='1'){
            $sdata=array();
            $sdata['message']='Your Story Published';
            $this->session->set_userdata($sdata);
        }
        if($data['publication_status']=='0'){
            $sdata=array();
            $sdata['message']='Your Story Saved But Not Published';
            $this->session->set_userdata($sdata);
        }
        redirect('super_admin/add_success_story');
    }
    
    public function manage_contact_message(){
        $data = array();
        $data['all_contact_info'] = $this->super_admin_model->select_message_item();
        $data['admin_maincontent'] = $this->load->view('admin/manage_contact',$data, true);
        $data['title']= 'Manage Contact Message' ;
        $this->load->view('admin/admin_master',$data);
    }
    
    public function delete_contact_message($contact_id){
        $this->super_admin_model->delete_message_by_id($contact_id);
        redirect('super_admin/manage_contact_message');
    }
    
    public function add_company_info(){
        $data = array();
        $data['all_category_in_fund_page'] = $this->welcome_model->select_all_publish_category_in_fund_page();
        $data['admin_maincontent']= $this->load->view('admin/add_organization',$data,true);
        $data['title']='Add Organization Info';
        $sdata['message1'] = 'It has successfully saved !' ;
        $this->session->set_userdata($sdata) ;
        $this->load->view('admin/admin_master',$data);  
    }
    
    public function save_organization_info() {
        $data=array();
        $data['organization_name']=$this->input->post('organization_name',true);
        $data['organization_title']=$this->input->post('organization_title',true);
        $data['category_name']=$this->input->post('category_name',true);
        $data['organization_img']=$this->session->userdata('organization_img',true);
        $data['publication_status']=$this->input->post('publication_status',true);
        
        
        // Upload image start
        $config['upload_path'] = 'images/organization/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size']	= '1000';
        $config['max_width']  = '136';
        $config['max_height']  = '100';
        $error = '';
        $fdata=array();
        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('organization_img'))
        {
            $error =$this->upload->display_errors();
            exit();
        }
        else
        {
            $fdata = $this->upload->data();
            $data['organization_img'] = $config['upload_path'].$fdata['file_name'];
        }
        // Upload image End
        
        $this->super_admin_model->save_organization_content($data);
        $data['publication_status']=$this->input->post('publication_status',true);
        if($data['publication_status']=='1'){
            $sdata=array();
            $sdata['message']='Your Story Published';
            $this->session->set_userdata($sdata);
        }
        if($data['publication_status']=='0'){
            $sdata=array();
            $sdata['message']='Your Story Saved But Not Published';
            $this->session->set_userdata($sdata);
        }
        redirect('super_admin/add_company_info');
    }
    
    public function manage_organization(){
        $data = array();
        $data['all_organization'] = $this->super_admin_model->select_all_publish_organization();
        $data['admin_maincontent'] = $this->load->view('admin/manage_organization',$data,true);
        $data['title'] = 'Manage Organization ' ;
        $this->load->view('admin/admin_master',$data);
    }
    
    public function unpublish_organization($organization_id){
        $this->super_admin_model->unpublish_organization_by_id($organization_id);
        redirect('super_admin/manage_organization');
    }
    
     public function publish_organization($organization_id){
        $this->super_admin_model->publish_organization_by_id($organization_id);
        redirect('super_admin/manage_organization');
    }
    
    public function delete_organization($organization_id){
        $this->super_admin_model->delete_organization_by_id($organization_id);
        redirect('super_admin/manage_organization');
    }
    
}

