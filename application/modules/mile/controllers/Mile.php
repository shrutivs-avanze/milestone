<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mile extends MX_Controller {
       function __construct(){
              parent::__construct();
              $this->load->model('mile_model');
              $this->load->library("session");
          }
       
       function index(){
              $this->load->view('mile_view');
       }   

       function mile_data(){
              $mileData = $this->mile_model->milestone_list();
              echo json_encode($mileData);
       }

       function save_mile(){
              $mileSave = $this->mile_model->mileStone_save();
              echo json_encode($mileSave);
       }


       function mile_update(){
              $mileUpdate=$this->mile_model->update_mile();
              echo json_encode($mileUpdate);
       }

       function delete_mile(){
              $mileDelete = $this->mile_model->mile_delete();
              echo json_encode($mileDelete);
       }

       public function logout()
	{
		$data = array("Name"=>"","ID"=>"");
		$this->session->set_userdata($data);
		$this->session->set_flashdata("msg","<center> You are logout successfully.. </center>");
		header("Location:".base_url()."Login/index");
	}
}


?>