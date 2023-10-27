<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->helper(array('url','form','text'));
        $this->load->library('form_validation');
        $this->load->model('home_m');
        $this->load->library('session');
        $this->load->database();
    
    }

    public function index (){
        $this->data['title'] = " Signup";
        $this->data['page_name'] = "register";
        $this->load->view('layout/index2',$this->data);
     
    }

  public function process_registration(){
     if($_POST){
         
        $names = $this->input->post('names');
        $email = $this->input->post('email');
        $userExist = $this->db->get_where('tbl_users',array('email'=>$email))->row();
        if($userExist){
           $this->session->set_flashdata('msg_error',' Sorry this user already exist');
           return redirect(base_url('register'));
        }else{
            //image upload------------------------------------
            $config['upload_path'] = './assets/uploads/';
            $config['allowed_types'] ='gif|jpg|png|jpeg|GIF|JPEG|PNG|GIF|JPG';
            $config['max_size'] ='3048';
            $config['max_width'] = '80000';
            $config['max_height'] ='60000';
            $this->load->library('upload',$config);
            if(!$this->upload->do_upload()){
                $errors = array('error'=>$this->upload->display_errors());
                $userfile = 'noimage.jpg';
            }else{
                $data = array('upload_data'=>$this->upload->data());
                $userfile =  $_FILES['userfile']['name'];

            }
        // close image upload ---------------------------
        $country = $this->input->post('country');
        $password = $this->input->post('password');
        $create = $this->home_m->createuser($names,$email,$userfile,$country,$password);
        $this->session->set_flashdata('msg_create','<div class="alert alert-success text-center"> Account Created Successfully, please login </div> ');
        return redirect(base_url('login'));
        
        }

    }else{
      return redirect(base_url('/'));
    }


  }




}