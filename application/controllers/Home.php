<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->helper(array('url','form','text'));
        $this->load->library('form_validation');
        $this->load->model(array('home_m'));
        $this->load->library('session');
        $this->load->database();
    

        if(!$this->session->logged_in){
          $this->session->set_flashdata('msg_error',' Please login to access your dashboard');
           return redirect(base_url('login'));
         }

    
    }

    public function index (){
        $this->data['title'] = " pages as default ";
        $this->data['page_name'] = "home";
        $this->load->view('layout/index',$this->data);
    }
  
    public function create_request(){
   
        if($_POST){
           
        }else{
            $this->data['videos'] = $this->db->get('tbl_post_videos')->result();
            $this->data['title'] = " Create Request";
            $this->data['page_name'] = "create_request";
            $this->load->view('layout/index',$this->data);
        }
       
     }

     public function requestfeed(){
        $this->data['title'] = " Request FeedBack ";
        $user_id = $this->session->userdata('id');
        $this->data['reqfeed'] = $this->db->get_where('tbl_request',array('user_id'=>$user_id))->result();
         //echo "<pre>"; print_r($this->data['reqfeed']);die;
        $this->data['page_name'] = "requestfeed";
        $this->load->view('layout/index',$this->data);
     }

     public function downloadfile(){
        $this->data['page_name'] = "viewreq";
    }
  
     public function admin_viewreq(){
        $this->data['title'] = " View Request  ";
        $this->data['request'] = $this->home_m->allrequest();
        // echo "<pre>"; print_r($this->data['request']);die;
        $this->data['page_name'] = "admin_viewreq";
        $this->load->view('layout/index',$this->data);
     }
  
    public function post_videos(){
     
        if($_POST){   
                $title = $this->input->post('title');
            //image upload------------------------------------
                if ($_FILES['userfile']['name']) {
                    $config['upload_path'] = './assets/uploads/';
                    $config['allowed_types'] = 'gif|jpg|jpeg|png|mp3|mp4|avi|flv|mp4';
                        // $config['max_size'] ='3048';
                    $config['max_size'] ='1000000000000000';
                    $config['max_width'] = '80000';
                    $config['max_height'] ='60000';
                    $this->load->library('upload',$config);
                    if(!$this->upload->do_upload()){
                        $errors = array('error'=>$this->upload->display_errors());
                        $userfile = 'noimage.jpg';
                    }else{
                        //echo "<pre>"; print_r(" uploaded");die;
                        $data = array('upload_data'=>$this->upload->data());
                        $userfile =  $_FILES['userfile']['name'];

                    }
                }else{
                  echo " An error occured ";
                }
            // close image upload ---------------------------
            $date = $this->input->post('date');
                $create = $this->home_m->createvideos($title,$userfile,$date);
                $this->session->set_flashdata('msg_create','<div class="alert alert-success w-50 text-center"> Video Uploaded Successfully</div> ');
                return redirect(base_url('home/post_videos'));
        }else{
            $this->data['title'] = " Post Videos ";
            $this->data['page_name'] = "post_videos";
            $this->load->view('layout/index',$this->data);
        }
  
    }

    public function viewusers(){
         echo " view users ";
      }
     public function getreply($id){
        $user_id = $this->session->userdata('id'); 
        if($_POST){
        
        }else{
        $this->data['title'] = " View Reply  ";
           //$this->data['reqfeed'] = $this->db->get_where('tbl_replyreq',array('user_id'=>$user_id))->result();
        $this->data['reqfeed'] = $this->db->get_where('tbl_replyreq',array('timer'=>$id))->row();
        $this->data['timer'] = $this->db->get_where('tbl_request',array('timer'=>($this->data['reqfeed']->timer) ))->row();

            //$this->data['replyfeed'] = $this->db->get_where('tbl_replyreq',array('user_id'=>$user_id))->result();
            //echo "<pre>"; print_r($this->data['reqfeed']);die;
        $this->data['page_name'] = "getreply";
        $this->load->view('layout/index',$this->data);
        }
    
      }

     public function viewreq(){
        if($_POST){
               $data = [
                 'user_id'=>$this->input->post('user_id'),
                 'replyreq'=>$this->input->post('replyreq'),
                 'date'=>date('Y-M-D'),
                 'timer'=>$this->input->post('timer'),
                 'status'=>'1'
               ];
               $this->db->insert('tbl_replyreq',$data);
                $this->session->set_flashdata('msg_reply',' Reply Send Successfully');
                return redirect(base_url('home/admin_viewreq'));
          }else{
            $id = $this->uri->segment(3);
            $this->data['title'] = " Reply Request  ";
                //$this->data['request'] = $this->db->get_where('tbl_replyreq',array('user_id'=>$userid))->result();
            $this->data['request'] = $this->db->get_where('tbl_request',array('id'=>$id))->result();
            //  var_dump($this->data['request']);die;
            $this->data['page_name'] = "viewreq";
            $this->load->view('layout/index',$this->data);
           }
     
     }
    
     public function deletereq($id){
        $timer = $this->db->get_where('tbl_request',array('user_id'=>$id))->row()->timer;
          $this->db->where('id',$id);
         $del = $this->db->delete('tbl_users');
         if($del){
            $this->db->where('timer',$timer);
            $this->db->delete('tbl_request');

            $this->db->where('timer',$timer);
            $this->db->delete('tbl_replyreq');

            $this->session->set_flashdata('msg_del',' Delete action was successful');
            return redirect(base_url('home/admin_viewreq'));
        }else{
            $this->session->set_flashdata('msg_error','<div class="text-danger"> Error! Unable to delete </div>');
            return redirect(base_url('home/admin_viewreq'));
        }
        


      

        

    }
    
 
}