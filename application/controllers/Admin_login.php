<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_login extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->helper(array('url','form','text'));
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->model('home_m');
        $this->load->database();
    
    }

    public function index (){
        if($_POST){
          $username = $this->input->post('username');
          $password = $this->input->post('password');
          $UserExist = $this->home_m->Adminlogin($username,$password);
          if($UserExist){
                $data = array( 
                'username'=>$UserExist->username,
                'category'=>'admin',
                'logged_in'=>TRUE
                );
                //echo "<pre>"; print_r($data);die;
                $this->session->set_userdata($data);
                return redirect(base_url('/'));
          }else{
            $this->session->set_flashdata('msg_error'," Incorrect User Authentication");
            return redirect(base_url('login'));
           }
        }else{
            $this->data['title'] = " Student Login ";
            $this->data['page_name'] = "admin_login";
            $this->load->view('layout/index2',$this->data);
        }
     
    }

    public function admin_viewreq(){
        $this->data['title'] = " View Request";
        $this->data['page_name'] = "admin_viewreq";
        $this->load->view('layout/index2',$this->data);
    }

    public function logout(){
        session_destroy();
        redirect('admin_login');
      
    }

}