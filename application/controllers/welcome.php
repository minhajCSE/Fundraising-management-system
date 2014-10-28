<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
    }
    
    public function index(){
        $data = array();
        $data['all_hot_news'] = $this->welcome_model->select_all_hot_news();
        $data['all_category'] = $this->welcome_model->select_all_publish_category();
        $data['all_category_two'] = $this->welcome_model->select_all_publish_category_two();
        $data['all_fund_story'] = $this->welcome_model->select_all_publish_fund_story();
        $data['all_story'] = $this->welcome_model->select_all_publish_story();
        $data['maincontent'] = $this->load->view('master',$data,true);
        $data['title']= "Fundraising | Home Page" ;
        $this->load->view('index',$data);
    }
    
    public function zakat(){
        $data =array();
        $data['maincontent'] =  $this->load->view('zakat','',true);
        $data['title']= "Fundraising | Donate Zakat" ;
        $this->load->view('index',$data);
    }

    public function show_all_category(){
        $data = array();
        $data['all_category'] = $this->welcome_model->select_all_publish_category();
        $data['maincontent'] = $this->load->view('master',$data,true);
        $data['title']= "Fundraising | Home Page" ;
        $this->load->view('index',$data);
    }

    public function fund_view(){
        $data = array();
        
        /*-------Start Pagination--------------------*/
        $this->load->library('pagination');
        $config['base_url'] = base_url() .'welcome/fund_view/';

        $config['total_rows'] = $this->db->count_all('tbl_fund');
        $config['per_page'] = '3';
        $config['full_tag_open'] = '<div id="my_pagination">';
        $config['full_tag_close'] = '</div>';
        $config['next_link']= 'NEXT';
        $config['prev_link']= 'PREV';
        
        $this->pagination->initialize($config);
        $data['all_fund_story_one'] = $this->welcome_model->select_all_publish_fund_story_one($config['per_page'], $this->uri->segment(3));
        /*-------End Pagination--------------------*/
        
        $data['all_category'] = $this->welcome_model->select_all_publish_category();
        $data['all_category_in_fund_page'] = $this->welcome_model->select_all_publish_category_in_fund_page();
        $data['maincontent'] = $this->load->view('fund',$data,true);
        $data['title']= "Fundraising | Fund Page" ;
        $this->load->view('index',$data);
    }
    
    public function about_us(){
        $data = array();
        $data['maincontent'] = $this->load->view('about','',true);
        $data['title']= "Fundraising | About Us Page" ;
        $this->load->view('index',$data);
    }
    
    public function events(){
        $data = array();
        $data['maincontent'] = $this->load->view('events',$data,true);
        $data['title']= "Fundraising | Event Page" ;
        $this->load->view('index',$data);
    }
    
    public function event_registration(){
        $data = array();
        $data['event_info'] = $this->welcome_model->save_event_registration();
        $data['maincontent'] = $this->load->view('events',$data,true);
        $data['title']= "Fundraising | Event Page" ;
        $this->load->view('index',$data);
    }

    public function contact_us(){
        $data = array();
        $data['maincontent'] = $this->load->view('contact-us','',true);
        $data['title']= "Fundraising | Contact Us Page" ;
        $this->load->view('index',$data);
    }
    
    //Load client account page
    public function client_account(){
        $data = array();
        $data['all_category'] = $this->welcome_model->select_all_publish_category();
        $data['maincontent'] = $this->load->view('client-account',$data,true);
        $data['title']= "Fundraising | Client Account Page" ;
        $this->load->view('index',$data);
    }
    
    // Save client info in DB
    public function save_client(){
        $this->welcome_model->save_client_info();
        $sdata = array();
        $sdata['message'] ='Your Information successfully Save! ' ;
        $this->session->set_userdata($sdata);
        redirect('welcome/client_account');
    }
    
    public function ajax_email_check($email_address){
        $result=$this->welcome_model->ajax_email_check_info($email_address);
            if($result)
            {
                echo 'Alredy Exists !';
            }
            else{
                echo 'Avilable';
            }
    }

    
    public function donor_account(){
        $data = array();
        $data['all_category'] = $this->welcome_model->select_all_publish_category();
        $data['maincontent'] = $this->load->view('donor-account',$data,true);
        $data['title']= "Fundraising | Donor Account Page" ;
        $this->load->view('index',$data);
    }
    
    // Save client info in DB
    public function save_donor(){
        $this->welcome_model->save_donor_info($data);
        $sdata = array();
        $sdata['message'] ='Your Information successfully Save! ' ;
        $this->session->set_userdata($sdata);
        redirect('welcome/donor_account');
    }
    
    public function news_details($news_id) {
        $data=array();
        $data['all_hot_news'] = $this->welcome_model->select_all_hot_news();
        $data['news_info']=$this->welcome_model->select_news_by_id($news_id);
        $data['maincontent']=$this->load->view('news_details',$data,true);
        $data['title']='Fundraising | News Details Page';
        $this->load->view('index',$data); 
    }
    
    public function success_story_details($success_id) {
        $data=array();
        $data['story_details']=$this->welcome_model->select_success_by_id($success_id);
        $data['all_story'] = $this->welcome_model->select_all_publish_story();
        $data['all_story_title'] = $this->welcome_model->select_all_publish_story_title();
        $data['maincontent']=$this->load->view('success_story_details',$data,true);
        $data['title']='Fundraising | Story Details Page';
        $this->load->view('index',$data); 
    }
    
    public function success_story_title_($success_id) {
        $data=array();
        $data['story_details']=$this->welcome_model->select_success_by_id($success_id);
        $data['all_story_title'] = $this->welcome_model->select_all_publish_story_title();
        $data['maincontent']=$this->load->view('success_story_details',$data,true);
        $data['title']='Fundraising | Story Details Page';
        $this->load->view('index',$data); 
    }
    
    
    public function fund_category_in_fund_page($fund_category){
        $data = array();
        $data['all_category_in_fund_page'] = $this->welcome_model->select_all_publish_category_in_fund_page();
        $data['all_fund_story'] = $this->welcome_model->select_all_publish_fund_story();
        $data['fund_by_category'] =$this->welcome_model->select_fund_by_category($fund_category);
        $data['maincontent'] = $this->load->view('view_category',$data,true);
        $data['title']= "Fundraising | Category Page" ;
        $this->load->view('index',$data);
    }
    
    public function fund_category($fund_category){
        $data = array();
        $data['all_category'] = $this->welcome_model->select_all_publish_category();
        $data['all_fund_story'] = $this->welcome_model->select_all_publish_fund_story();
        $data['fund_by_category'] =$this->welcome_model->select_fund_by_category($fund_category);
        $data['maincontent'] = $this->load->view('view_category',$data,true);
        $data['title']= "Fundraising | Category Page" ;
        $this->load->view('index',$data);
    }
    
    public function fund_category_two($fund_category){
        $data = array();
        $data['all_category'] = $this->welcome_model->select_all_publish_category();
        $data['all_category_two'] = $this->welcome_model->select_all_publish_category_two();
        $data['all_fund_story'] = $this->welcome_model->select_all_publish_fund_story();
        $data['fund_by_category'] =$this->welcome_model->select_fund_by_category($fund_category);
        $data['maincontent'] = $this->load->view('view_category',$data,true);
        $data['title']= "Fundraising | Category Page" ;
        $this->load->view('index',$data);
    }
    
    public function save_contact_message(){
        $this->welcome_model->save_contact_message_info();
        $sdata = array();
        $sdata['message'] = 'Thanks for your words !';
        $this->session->set_userdata($sdata);
        redirect('welcome/contact_us');
    }
    
    public function fund_apply_details($fund_id){
        $isApply = $this->welcome_model->check_application($fund_id,$this->session->userdata("client_id"));

        //When he has already applied
        if(!$isApply)
        {
            $this->welcome_model->save_fund_apply_details($fund_id);
            $apply_success = "You have applied successfully!";
            $this->session->set_userdata("apply_success",$apply_success);
        }
        else//When he is applying for the first time
        {
            $apply_error = "You already applied for this fund";
            $this->session->set_userdata("apply_error",$apply_error);
        }
        redirect('welcome/index');
    }
    
    public function fund_apply_details_fund($fund_id){
        $isApply = $this->welcome_model->check_application($fund_id,$this->session->userdata("client_id"));
        
        if(!$isApply)//When he has already applied
        {
            $this->welcome_model->save_fund_apply_details($fund_id);
            $apply_success = "You have applied successfully!";
            $this->session->set_userdata("apply_success",$apply_success);
        }
        else//When he is applying for the first time
        {
            $apply_error = "You have already applied for this fund";
            $this->session->set_userdata("apply_error",$apply_error);
        }
        redirect('welcome/fund_view');
    }
    
}
