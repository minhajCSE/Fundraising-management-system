<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Donor_Login extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }
    
    public function index(){
        $data['maincontent'] = $this->load->view('master',' ',true);
        $data['title']= "Fundraising | Home Page" ;
        $this->load->view('index',$data); 
    }
    
        
    public function donor_home(){
        $data['donor_maincontent'] = $this->load->view('donor/donor_home','',true);
        $data['title']= "Fundraising | Donor Home Page" ;
        $this->load->view('donor/donor_main',$data); 
    }
    
    public function donor_profile($donor_id){
        $data = array();
        $data['all_info'] = $this->donor_model->select_all_donor_info($donor_id);
        $data['donor_maincontent'] = $this->load->view('donor/donor_profile',$data,true);
        $data['title']= 'Fundraising | Donor Profile' ;
        $this->load->view('donor/donor_main',$data);
    }
    
    public function fund_request($donor_id){
        $data = array();
        $data['all_fund_request'] = $this->donor_model->select_all_fund_request($donor_id);
        $data['donor_maincontent'] = $this->load->view('donor/fund_request',$data,true);
        $data['title']= 'Fundraising | Donor Profile' ;
        $this->load->view('donor/donor_main',$data);
    }

    public function check_donor_login(){
        $data=array();
        $data['donor_username'] = $this->input->post('donor_username',true);
        $data['donor_password'] = $this->input->post('donor_password',true);
        $result = $this->donor_login_model->check_donor_login($data);
        
        $sdata = array();
        if($result){
            $sdata['donor_id'] = $result->donor_id;
            $sdata['donor_username'] = $result->donor_username;
            $this->session->set_userdata($sdata);
            redirect('donor_login/donor_home') ;
        }else{
            $sdata['exception'] = 'Invalid Username or Password' ;
            $sdata['success'] = 'You Are Successfully Login ! ' ;
            $this->session->set_userdata($sdata);
            redirect('welcome/index');
        }
    }
    
    public function add_fund_story(){
        $data = array();
        $data['all_category_in_fund_page'] = $this->welcome_model->select_all_publish_category_in_fund_page();
        $data['donor_maincontent'] = $this->load->view('donor/add_fund_story',$data,true);
        $data['title'] = 'Add Fund Story' ;
        $sdata = array();
        $sdata['message'] = 'Fund Story has saved!' ;
        $this->session->set_userdata($sdata);
        $this->load->view('donor/donor_main',$data);
    }
    
    public function save_fund_story(){
        $data = array();
        $data['fund_title'] = $this->input->post('fund_title',true);
        $data['fund_category'] = $this->input->post('fund_category',true);
        $data['fund_money'] = $this->input->post('fund_money',true);
        $data['fund_img'] = $this->input->post('fund_title',true);
        $data['donor_id'] = $this->session->userdata('donor_id');
        $data['publication_status'] = $this->input->post('publication_status',true); 
        /*
         *  Image Upload code goes here 
         */
        $config['upload_path'] = 'images/fund/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size']	= '300';
        $config['max_width']  = '196';
        $config['max_height']  = '197';
        $error = '' ;
        $fdata = array();

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('fund_img')){
            $error = $this->upload->display_errors();
            echo $error;
            exit();
        }
        else{
            $fdata = $this->upload->data();
            $data['fund_img']= $config['upload_path'].$fdata['file_name'];        
        }

        /*
         * Image Upload code end here 
         */
        
        $this->donor_model->save_donor_fund_story($data);
        redirect('donor_login/add_fund_story');
    }

    public function manage_fund_story($donor_id){
        $data = array();
        $data['all_fund'] = $this->donor_model->select_all_fund_story($donor_id);
        $data['donor_maincontent'] = $this->load->view('donor/manage_fund',$data,true);
        $data['title'] = 'Manage Fund Story' ;
        $this->load->view('donor/donor_main',$data);
    } 
    
    public function unpublish_fund($fund_id){
        $this->donor_model->unpublish_fund_by_id($fund_id);
        redirect('donor_login/manage_fund_story');
    }
    
    public function publish_fund($fund_id){
        $this->donor_model->publish_fund_by_id($fund_id);
        redirect('donor_login/manage_fund_story');
    }
    
    public function delete_fund($fund_id){
        $this->donor_model->delete_fund_by_id($fund_id);
        redirect('donor_login/manage_fund_story');
    }
       
    public function donor_logout(){
        $this->session->unset_userdata('donor_id');
        $this->session->unset_userdata('donor_username');
        $sdata['message']='You are successfully Logout! ';
        $this->session->set_userdata($sdata);
        redirect('welcome/index') ;
    }
    
}

