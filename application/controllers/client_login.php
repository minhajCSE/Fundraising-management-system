<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CLient_Login extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }
    
    public function index(){
        $data['maincontent'] = $this->load->view('master',$data,true);
        $data['title']= "Fundraising | Home Page" ;
        $this->load->view('index',$data); 
    }
    
    public function client_home(){
        $data['client_maincontent'] = $this->load->view('client/client_home','',true);
        $data['title']= "Fundraising | Client Home Page" ;
        $this->load->view('client/client_main',$data); 
    }
    
    public function client_profile($client_id){
        $data = array();
        $data['all_client_info'] = $this->client_model->select_all_client_info($client_id);
        $data['client_maincontent'] = $this->load->view('client/client_profile',$data,true);
        $data['title']= 'Fundraising | Client Profile' ;
        $this->load->view('client/client_main',$data);
    }

    public function check_client_login(){
        $data=array();
        $data['client_username']=$this->input->post('client_username',true);
        $data['client_password']=$this->input->post('client_password',true);
        $result=$this->client_login_model->check_client_login($data);
        
        $sdata = array();
        if($result){
            $sdata['client_id'] = $result->client_id;
            $sdata['client_username'] = $result->client_username;
            $this->session->set_userdata($sdata);
            redirect('client_login/client_home');
        }else{
            $sdata['exception'] = 'Invalid Username or Password' ;
            $sdata['success'] = 'You Are Successfully Loggedin ! ' ;
            $this->session->set_userdata($sdata);
            redirect('welcome/index') ;
        }
    }

    public function logout(){
        $this->session->unset_userdata('client_id');
        $this->session->unset_userdata('cllient_username');
        $sdata['message']='You are successfully Logout! ';
        $this->session->set_userdata($sdata);
        redirect('welcome/index') ;
    }
    
}

