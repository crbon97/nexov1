<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ApiCoin extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('AccountModel');
    }
   
    public function get_coin()
    {
        $data = $this->input->get();
        $CoinChoose = $data['nameCoin'];
        $list = $this->postAPI_v2("https://api.huobipro.com/market/trade?symbol=" . $CoinChoose . "usdt",[], 'GET');
        $priceCoin = $list['tick']['data'][0]['price'];
        $value =  $this->AccountModel->findInfoCoin($CoinChoose);
        $list_data = [
            "infoCoin" =>$value,
            "priceCoin" => $priceCoin
        ];
        echo json_encode($list_data);
    }

}
