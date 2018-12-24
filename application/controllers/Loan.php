<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Loan extends MY_Controller {
    function __construct()
    {
        parent::__construct();
        $this->folder = 'Loan';
    }
    public function index()
    {   
    $this->file = 'default';   
    $this->load->view('admin/default');
    }
    public function getlists()
   {
    
        $datatable = array_merge(['pagination' => [], 'sort' => [], 'query' => []], $_REQUEST);
        $sort = !empty($datatable['sort']['sort']) ? $datatable['sort']['sort'] : 'desc';
        $field = !empty($datatable['sort']['field']) ? $datatable['sort']['field'] : 'id';
        $page = !empty($datatable['pagination']['page']) ? (int) $datatable['pagination']['page'] : 1;
        $perpage = !empty($datatable['pagination']['perpage']) ? (int) $datatable['pagination']['perpage'] : -1;   
        $status=!empty($datatable['query']['list']['status']) ? (int)$datatable['query']['list']['status'] : "";   
        $date_from=!empty($datatable['query']['list']['date_from']) ? strtotime($datatable['query']['list']['date_from']) : "";   
        $date_to=!empty($datatable['query']['list']['date_to']) ? strtotime($datatable['query']['list']['date_to']) : "";  

        $data=$this->Home_model->getdeposits($status,$date_from,$date_to);
        $result= $this->dataPagition($data,$sort,$field,$page, $perpage,count($data));

       // echo json_encode($result, JSON_PRETTY_PRINT);
   }
    public function getlist()
    {
    $data = $this->input->post();  
    $res =  $this->Home_model->getdeposit($data['id']);
    if ($res) {
      echo json_encode($res);die();
    }
    }
  
}
