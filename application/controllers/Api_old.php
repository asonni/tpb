<?php defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH.'/libraries/REST_Controller.php';

class Api extends REST_Controller
{
  function __construct(){
    // Construct our parent class
    parent::__construct();
  }
  public function register_post(){
    $data = $this->post('main_data');
    $file_path = '/public/uploads/';
    $filesName = array(
      'memorandum' => $file_path.$this->post('memorandum'),
      'statute' => $file_path.$this->post('statute'),
      'operatingLicense' => $file_path.$this->post('operatingLicense'),
      'commercialRecord' => $file_path.$this->post('commercialRecord'),
      'chamber' => $file_path.$this->post('chamber'),
      'detectionExecutedProjects' => $file_path.$this->post('detectionExecutedProjects'),
      );
    $results = array_merge($data, $filesName); 
    $status = $this->Main_model->insert($results);
    $this->response($results);
  }
  public function fileUpload_post(){
    // $errors = array();
    // $file_name = $_FILES['file']['name'];
    // $file_size = $_FILES['file']['size'];
    // $file_tmp = $_FILES['file']['tmp_name'];
    // $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
    // $file_path = './public/uploads/' . $file_name;
    // $extensions = array("pdf");
    // if(in_array($file_ext,$extensions ) === false){
    //   $errors[]="file extension not allowed, please choose a PDF file only :(";
    // }
    // if($file_size > 2000000){
    //   $errors[] = "File size cannot exceed 2 MB :(";
    // }
    // if(empty($errors)==true){
    //   // $file_full_path = array();
    //   $result = move_uploaded_file($file_tmp, $file_path);
    //   // $file_full_path[] = '/public/uploads/' . $file_name;
    //   // if(empty($file_full_path)==true){
    //   //   $this->response($file_full_path);
    //   // }
    //   // $status = $this->Main_model->insert_file($files_path);
    //   if ($result) {
    //     $this->response("The file has been uploaded :)");
    //   } else {
    //     $this->response("The file wasn't upload :(");
    //   }
    $file = $_FILES['file'];
    // File properties
    $file_name = $file['name'];
    $file_tmp = $file['tmp_name'];
    $file_size = $file['size'];
    $file_error = $file['error'];
    // Work out the file extension
    $file_ext = explode('.', $file_name);
    $file_ext = strtolower(end($file_ext));
    $allowed = array('pdf');
    if (in_array($file_ext, $allowed)){
      if($file_error === 0) {
        if ($file_size <= 2097152){
          $file_name_new = uniqid('', true) . '.' . $file_ext;
          $file_destination = './public/uploads/' . $file_name_new;
          if (move_uploaded_file($file_tmp, $file_destination)){
            $this->response("The file has been uploaded :)");
          } else {
            $this->response("The file wasn't upload :(");
          }
        } else {
          $this->response("The file size can't exceed 2 MB :(");
        }
      } else {
        $this->response("There is an error".$file_error.":(");
      }
    } else {
      $this->response("file extension not allowed, please choose a PDF file only :(");
    }
    // } else {
    //   $this->response($errors);
    // }
    // // $config['encrypt_name'] = TRUE;
    // $config['file_name'] = $file_name;
    // $config['file_size'] = $file_size;
    // $config['file_tmp'] = $file_tmp;
    // $config['file_type'] = $file_type;
    // $config['upload_path'] = './public/uploads/';
    // $config['allowed_types'] = 'pdf';
    // $config['max_size'] = 1024 * 8;
    // $this->load->library('upload', $config);
    // // // $data = $this->upload->data();
    // if ( ! $this->upload->do_upload())
    // {
    //   // $error = array('error' => $this->upload->display_errors());
    //   $this->response($this->upload->display_errors());
    // }
    // else
    // {
    //   // $data = array('upload_data' => $this->upload->data());
    //   $this->response($this->upload->data());
    // }
  }
}