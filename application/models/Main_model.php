<?php
class Main_model extends CI_Model{
  public function insert($data){
    $insert = $this->db->insert('main',$data);
    $insert_id = $this->db->insert_id();
    $result = array('status' => $insert, 'insertedID' => $insert_id);
    return $result;
  }
  public function insert_file($field_name,$file_destination,$inserted_id){
    $data = array($field_name => $file_destination);
    $this->db->where('id', $inserted_id);
    $result = $this->db->update('main', $data);
    return $result;
  }
}