<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/* load the MX_Router class */
require APPPATH . "third_party/MX/Controller.php";

class MY_Controller extends MX_Controller
{	

	function __construct() 
	{
		parent::__construct();
		$this->_hmvc_fixes();
		exit('abc');
		// session check
		// if(!$this->session->userdata('UserID')){
		// 	redirect(base_url().'login');
		// } else {
		// 	$this->UserID = $this->session->userdata('UserID');
		// 	$this->FullName = $this->session->userdata('FullName');
		// 	$this->Email = $this->session->userdata('Email');
		// 	$this->UserRole = $this->session->userdata('UserRole');
		// }
	}
	
	function _hmvc_fixes()
	{		
		//fix callback form_validation		
		//https://bitbucket.org/wiredesignz/codeigniter-modular-extensions-hmvc
		$this->load->library('form_validation');
		$this->form_validation->CI =& $this;
	}

}

/* End of file MY_Controller.php */
/* Location: ./application/core/MY_Controller.php */
