<?php
class Main_model extends CI_Model{
  public function insert($data){
    $insert = $this->db->insert('main',$data);
    $insert_id = $this->db->insert_id();
    $result = array('status' => $insert, 'insertedID' => $insert_id);
    return $result;
  }
}