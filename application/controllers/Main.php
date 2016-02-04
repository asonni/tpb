<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Main extends CI_Controller {
  function __construct()
    {
      // Construct our parent class
      parent::__construct();
    }
  public function index() {
    $this->load->view('index');
  }
  public function register(){
    // echo ($data['companyName']);
    $data = $this->input->post('main_data');
    $status = $this->Main_model->insert();
    if ($status){
      echo json_encode($status);
    } else {
      echo json_encode($status);
    }
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

