<?php defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH.'/libraries/REST_Controller.php';

class Api extends REST_Controller
{
  // public $id = 100;
  function __construct(){
    // Construct our parent class
    parent::__construct();
  }
  public function register_post(){
    $data = $this->post('main_data');
    $status = $this->Main_model->insert($data);
    // $this->fileUpload_post(1);
    // $this->id = 200;
    $this->response($status);
  }
  public function fileUpload_post(){
    // $inserted_id = $this->id;
    $field_name = $_POST['fieldName'];
    $inserted_id = $_POST['insertedID'];
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
            // if ($inserted_id > 0){
            //   $this->response("The ID from Back-end is ".$inserted_id);
            // } else {
            //   $this->response("The ID wasn't found from Back-end");
            // }
            $file_result = $this->Main_model->insert_file($field_name,$file_destination,$inserted_id);
            if ($file_result){
              $this->response("The file has been uploaded :)");
            } else {
              $this->response("The file has been uploaded into dir, but hasn't inserted into the DB :(");
            }
          } else {
            $this->response("The file wasn't upload :(");
          }
        } else {
          $this->response("The file size can't exceed 2 MB :(");
        }
      } else {
        $this->response("There is an error ".$file_error." :(");
      }
    } else {
      $this->response("file extension not allowed, please choose a PDF file only :(");
    }
  }
}