<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Home_m extends CI_model{

  //private $tbl_adminlogin = 'tbl_admin';


  public function createvideos($title,$userfile,$cat,$date){
        $data_arr =[
            'title'=>$title,
            'userfile'=>$userfile,
            'category_id'=>$cat,
            'date'=>$date
            
        ];

         $this->db->insert('tbl_post_videos',$data_arr);
   }


  public function createuser($names,$email,$userfile,$cat,$password){
    $data_arr =[
        'names'=>$names,
        'email'=>$email,
        'userfile'=>$userfile,
        'category_id'=>$cat,
        'password'=>$password
        
    ];

     $this->db->insert('tbl_users',$data_arr);
}

   public function CheckUser($email,$password){
      $query = $this->db->get_where('tbl_users',array('email'=>$email,'password'=>$password));
      return $query->row();
   } 

   public function adminlogin($username,$password){
      $query = $this->db->get_where('tbl_admin',array('username'=>$username,'password'=>$password));
      return $query->row();
   } 

  public function allrequest(){
      $this->db->select('*');
      $this->db->from('tbl_users');
      $this->db->join('tbl_request','tbl_users.id = tbl_request.user_id');
      $query = $this->db->get();
      return $query->result();
  }

  public function getrequest($user_id){
    $this->db->select('*');
    $this->db->from('tbl_request');
    $this->db->join('tbl_replyreq','tbl_request.user_id = tbl_replyreq.user_id');
    $this->db->where('tbl_request.user_id',$user_id);
    $this->db->where('tbl_replyreq.user_id',$user_id);
    $query = $this->db->get();
    return $query->result();
  }

}