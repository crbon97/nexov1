<?php

class Pages extends MY_Controller {
        
        function __construct()
	{
                parent::__construct();
                $this->folder = 'pages';
                $this->load->database(); 
                $this->load->model('AccountModel');
         }

        public function view($page = 'default')
        { 
                 $this->file = 'account';
                $data['title'] = "account";
                $data["title"] ="account";
                $data["dtcoin"] = $this->AccountModel->getListCoin();  
                $this->load->view('default', $data);  
        }
        function account(){
                $this->file = 'account';
                $data["title"] ="account";
                $data["dtcoin"] = $this->AccountModel->getListCoin();
                $this->load->view('default', $data);
        }
     

        function transactions(){
                $this->file = 'transactions';
                $data['title'] = "transactions";
                $this->load->view('default', $data);
        }
        function insertBook(){
                //$data = json_decode($this->input->raw_input_stream , TRUE);
                $data =  $this->input->post();
               
                // $data=json_decode($data1);
                $arr = array(
                        'Coin_ID' => $data['Coin_ID'], 
                        'User_ID' => $data['User_ID'], 
                        'Total_coin' => $data['Total_coin'], 
                        'Total_usd' => $data['Total_usd'],
                        'Price_usd' => $data['Price_usd'],
                        'Loan_limit' => $data['Loan_limit'],
                        'Percent' => $data['Percent'],
                        'Status' => $data['Status'],
                        'Term' => $data['Term'],
                        'Content' => $data['Content'],
                        'Date_create'  => time(),
                        'Date_update'  => time(),

                        );
                       // print_r($arr);die;   
                        
                       
                       $data =$this->AccountModel->add_booking($arr);  
               
                      print_r( $data);  
                die;
           
        }
        
        
       
}