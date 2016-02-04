<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Main extends CI_Controller {
  public function index() {
    $this->load->view('index');
  }
  public function fileUpload_post(){
    // $config['upload_path'] = './public/uploads/';
    // $config['allowed_types'] = 'gif|jpg|png|doc|pdf';
    // $config['max_size'] = 1024 * 8;
    // // $config['encrypt_name'] = TRUE;
    // $this->load->library('upload', $config);
    // $data = $this->upload->data('file');
    $data = $this->input->post('newTask');
    echo json_encode($data);
  }
}

