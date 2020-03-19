<?php
class Mile_model extends CI_Model{

       function milestone_list(){
              $hasil=$this->db->get('mMilestone');
              return $hasil->result();
       }

       function mileStone_save(){
              $mileData = array(
                    // 'MilestoneUID'  => $this->input->post('mile_no'), 
                     'MilestoneName'  => $this->input->post('MilestoneName'), 
                    // 'Active' => $this->input->post('active'), 
                 );
             $result=$this->db->insert('mMilestone',$mileData);
             return $result;
       }

       function update_mile(){
              $mile_No=$this->input->post('MilestoneUID');
              $MilestoneName=$this->input->post('MilestoneName');
              $this->db->set('MilestoneName', $MilestoneName);
              $this->db->where('MilestoneUID', $mile_No);
              $result=$this->db->update('mMilestone');
              return $result;
          }

          function mile_delete(){
              $mileStoneNo =$this->input->post('MilestoneUID');
              $this->db->where('MilestoneUID', $mileStoneNo);
              $result=$this->db->delete('mMilestone');
              return $result;
          }



}

?>