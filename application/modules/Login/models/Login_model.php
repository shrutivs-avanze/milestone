<?php
class Login_model extends CI_Model{

       var $db;
		function __construct()
		{
			parent::__construct();
                      $this->db = $this->load->database("default",TRUE);
                      $this->load->library("session");
              }
              
       function signup_save(){
              $signupData = array(
                    'fname'  => $this->input->post('fname'), 
                    'mobile'  => $this->input->post('mobile'), 
                    'email' => $this->input->post('email'), 
                    'password' => $this->input->post('password'), 
                    'gender' => $this->input->post('gender'), 
                    'month' => $this->input->post('month'), 
                    'day' => $this->input->post('day'), 
                    'year' => $this->input->post('year'), 
                    'city' => $this->input->post('city'), 
                 );
             $result=$this->db->insert('register',$signupData);
             header("Location:Login/index");
             return $result;
       }

       public function usercheck($email,$password)
		{
			$res = $this->db->query("select * from register where email='$email'and password='$password'");
			if($res->num_rows()>0)
			{
				$row=$res->row();
				$data = array("ID"=>$row->id,"Name"=>$row->fname);
				$this->session->set_userdata($data);
				return true;
			}
			else
			{
				return false;
			}
		}
}
?>