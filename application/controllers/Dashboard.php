<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller {
	function __construct()
	{
        parent::__construct();
        $this->folder = 'Dashboard';
	}
    public function index()
    {   
    $data= $this-> postAPI_v2("sandbox-api.coinmarketcap.com/v1/cryptocurrency/quotes/latest?symbol=XRP",[],'GET');
   // print_r($data);die();
    $this->file = 'default';   
    $this->load->view('admin/default');

    }
 
}
