<?php
class Main_model extends CI_Model{
  public function insert($data){
    // $data = $this->input->post('main_data');
    $insert = $this->db->insert('main',$data);
    $insert_id = $this->db->insert_id();
    $result = array('status' => $insert, 'insert_id' => $insert_id);
    return $result;
  }
}