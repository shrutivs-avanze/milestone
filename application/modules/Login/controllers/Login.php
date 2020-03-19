<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MX_Controller {
       function __construct(){
              parent::__construct();
              $this->load->model('login_model');
              $this->load->library("session");
          }

          public function index(){

		$this->load->view('login_view');
		}

	public function signup()
	{
		$this->load->view('sign_up');
	}
	
	public function savesignup()
	{
              $signupMile = $this->login_model->signup_save();
              echo json_encode($signupMile);
	}
	
	public function usercheck()
	{
		$email = $_POST['email'];
		$password = $_POST['password'];
		
		$status = $this->login_model->usercheck($email,$password);
		
		if($status==true)
		{
			header("Location:".base_url()."mile/index");
		}
		else
		{
			$this->session->set_flashdata("msg","<center> Invalid Details </center>");
			header("Location:index");
			
		}
	}
	
}

?>