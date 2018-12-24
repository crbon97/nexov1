<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->model('Home_model');        
    }
    public function index()
    {

    }
    public function checklogin()
    {
        $request=$this->input->Post();
        $data =  $this->Home_model->getadmin($request['email1'],md5($request['password']));  
      //  print_r($data);die();
               if(count($data) >= 1) { 
                    $sestion_token = array(
                        'email' => $data->Email,
                        'role' => $data->Role, 
                        'UID' => $data->ID
                        );
                    $this->session->set_userdata($sestion_token);
                    echo json_encode(array('status' => true , 'message'=>'Đăng nhập thành công','data'=>[]));die;
               
                 } else {
                    echo json_encode(array('status' => false , 'message'=>'Email hoặc mật khẩu không đúng','data'=>[]));die;
                 }
    }
    public function checklogout()
    {
        $this->session->sess_destroy();
        $res = array('status'=>true , 'message' => 'Đăng xuất thành công!','data'=>array());
        echo json_encode($res);
    }
}
