<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Coin extends MY_Controller {
    function __construct()
    {
        parent::__construct();     
        $this->folder = 'Coin';
    }
    public function index()
    { 
    $this->file = 'default';   
    $this->load->view('admin/default');
    }
    public function get_coin()
    {
    $data =  $this->Home_model->getcoin();
    $list_data  = array();
    foreach ($data as $key => $value) {
    $Name=$value['Name'];
    $list= $this-> postAPI_v2("https://api.huobipro.com/market/trade?symbol=".$value['Name']."usdt",[],'GET');
  // print_r($list);die();
    if ($list['status']==true) { 
       $data_val=  array(
                "id"=> "".$value['ID']."",
                "media"=> "".$value['Media']."",
                "address"=> "".$value['Address']."",
                "name"=> "".$value['Name']."" ,
                "Percent"=> "".$value['Percent']."" ,
                "Date_create"=> "".$value['Date_create']."" ,
                "val"=>"".$list['tick']['data'][0]['price'].""
            );
    array_push($list_data, $data_val);
    }
    }
    $result= $this->dataPagition($list_data,"desc","ID",1, 100,count($list_data));
    }
    public function add()
    {
    $data = $this->input->post();  
    $file = $_FILES;     

      
        if ($file['media']['size'] > 0 ) {
            $arr_image = [
                'name' => 'media',
                'originalname' => $time . $file['media']['name'],
                'filename' => $time . $file['media']['name'],
                'mimetype' => $file['media']['type'],
                'tmp_name' => $file['media']['tmp_name']
              //  'contents' => !empty($file['media']['tmp_name']) ? file_get_contents($file['media']['tmp_name']) : ''
            ];
           // array_push($arr,$arr_image);
        }
        if ($thumb = $this->upload_image($arr_image, 'jpg|png|gif|JPG|jpeg|JPEG|PNG|GIF', "upload/")) {        
        }
    $arr = array(
        'Name' => $data['name'], 
        'Address' => $data['address'], 
        'Percent' => $data['percent'], 
        'Media' => $thumb,
        'Date_create'  => time()
        );   
    if ($data['id']==0) {
       $res =  $this->Home_model->add_coin($arr);
    } else {
        $res =  $this->Home_model->up_coin($data['id'],$arr);
    }
    if ($res) {
      echo json_encode(array("status"=>1 , "mess"=>"thanh cong", "data"=>[]));die();
    }
    }
    public function delete_coin()
    {
    $data = $this->input->post(); 
    $res =  $this->Home_model->delete_coin($data['id']);
    }  
}
