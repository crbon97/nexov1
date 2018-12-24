<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting extends MY_Controller {
    function __construct()
    {
        parent::__construct();
        $this->folder = 'Setting';
    }
    public function index()
    {   
    $this->file = 'default';      
    $data['list']= $this->Home_model-> get_setting();
    $this->load->view('admin/default',$data);
    }
    public function edit_setting()
    {
    $data = $this->input->post();  
    $arr = array(
        'Rate_usd' => $data['rate_usd'], 
        'Percent' => $data['percent'], 
        'Min' => $data['min'], 
        'Max' => $data['max'], 
        'Switch'  => $data['Switch']
        );   

        $res =  $this->Home_model->edit_setting(1,$arr);
    
    if ($res) {
      echo json_encode(array("status"=>1 , "mess"=>"thanh cong", "data"=>[]));die();
    }
    }
  
}
