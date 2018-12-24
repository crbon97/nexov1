<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends MY_Controller {
    function __construct()
    {
        parent::__construct();
        $this->folder = 'Users';
    }
    public function index()
    {   
    $this->file = 'default';   
    $this->load->view('admin/default');
    }
    public function getlist()
   {
        $datatable = array_merge(['pagination' => [], 'sort' => [], 'query' => []], $_REQUEST);
        $sort = !empty($datatable['sort']['sort']) ? $datatable['sort']['sort'] : 'desc';
        $field = !empty($datatable['sort']['field']) ? $datatable['sort']['field'] : 'id';
        $page = !empty($datatable['pagination']['page']) ? (int) $datatable['pagination']['page'] : 1;
        $perpage = !empty($datatable['pagination']['perpage']) ? (int) $datatable['pagination']['perpage'] : -1;
        $data=$this->Home_model->getusers();
        $result= $this->dataPagition($data,$sort,$field,$page, $perpage,count($data));

       // echo json_encode($result, JSON_PRETTY_PRINT);
   }

  
}
