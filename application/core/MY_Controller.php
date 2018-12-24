<?php
defined('BASEPATH') OR exit('No direct script access aloowed');
Class MY_Controller extends CI_Controller
{    
	function __construct()
	{

        parent::__construct();
        $this->load->database();
        if($this->uri->segment(1) == "admin"){
            $this->_check_login();
        }
        
        $this->load->model('Home_model');           
	}

	private function _check_login()
	{
	    $controller=$this->uri->segment(2);
		if($this->session->userdata('email') && $this->session->userdata('role')==1){
            if(!isset($controller)){
                redirect('/admin/dashboard/');
            }
        }else{
            $this->load->view('admin/login');
            
        }
	}
public function postAPI_v2($url,$json,$method='POST'){
        $client = new \GuzzleHttp\Client(['base_uri' => ""]);
       
        if($method=='POST'||$method=='PUT'){
            $res = $client->request($method, $url, [
                'headers'=>array('Authorization'=>isset($this->token)?$this->token:''),
                'json'=>$json
            ]);
        }else{
            $res = $client->request($method, $url, [
                'headers'=>array('Content-Type'=>'application/json','X-CMC_PRO_API_KEY'=>"b6361c7d-b6e3-4c07-886b-c64cd1909347")
            ]);
        }
      
        $check_data=json_decode($res->getBody()->getContents(),true);
       
        return $check_data;
    }
    public function dataPagition($data,$sort,$field,$page, $perpage,$total)
    {
        //$total = $data['total'];
       // $data =  $data['data'];
        $filter = isset($datatable['query']['generalSearch']) && is_string($datatable['query']['generalSearch'])
            ? $datatable['query']['generalSearch'] : '';
        if ( ! empty($filter)) {
            $data = array_filter($data, function ($a) use ($filter) {
                return (boolean)preg_grep("/$filter/i", (array)$a);
            });
            unset($datatable['query']['generalSearch']);
        }
        $meta    = [];
        $pages = 1;
        //sort
        usort($data, function ($a, $b) use ($sort, $field) {
            if ( ! isset($a[$field]) || ! isset($b[$field])) {
                return false;
            }
            if ($sort === 'asc') {
                return $a[$field] > $b[$field] ? true : false;
            }
            return $a[$field] < $b[$field] ? true : false;
        });
        // $perpage 0; get all data
        if ($perpage > 0) {
            $pages  = ceil(count($data) / $perpage); // calculate total pages
            $pages1  = ceil($total / $perpage); // calculate total pages
            $page   = max($page, 1); // get 1 page when $_REQUEST['page'] <= 0
            $page   = min($page, $pages1); // get last page when $_REQUEST['page'] > $totalPages
            $offset = ($page - 1) * $perpage;
            if ($offset < 0) {
                $offset = 0;
            }
           // $data = array_slice($data, $offset, $perpage, true);
        }
        $meta = [
            'page'    => $page,
            'pages'   => $pages,
            'perpage' => $perpage,
            'total'   => $total,
        ];
        // if selected all records enabled, provide all the ids
        if (isset($datatable['requestIds']) && filter_var($datatable['requestIds'], FILTER_VALIDATE_BOOLEAN)) {
            $meta['rowIds'] = array_map(function ($row) {
                return $row->RecordID;
            }, $alldata);
        }
        
        
        header('Content-Type: application/json');
        header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
        header('Access-Control-Allow-Headers: Content-Type, Content-Range, Content-Disposition, Content-Description');
        $result = [
            'meta' => $meta + [
                    'sort'  => $sort,
                    'field' => $field,
                ],
            'data' => $data,
        ];
        echo json_encode($result, JSON_PRETTY_PRINT);
        
    }
public function upload_image($file, $extension, $folder) {
 
    if (isset($file) && !$file['error']) {

        $ext = end(explode('.', $file['filename']));
        $name = basename($file['filename'], '.' . $ext);

        if (strpos($extension, $ext) === false) {
            return false; // không hỗ trợ
        }

        if (!copy($file["tmp_name"], $folder . $file['filename'])) {
            if (move_uploaded_file($file["tmp_name"], $folder . $file['filename'])) {
                return false;
            }
        }
 //print_r($file['filename']);die();
        return $file['filename'];
    }
    return false;
}
    
}