<?php
class AccountModel extends CI_Model {
    function __construct(){
        parent::__construct();
        $this->load->database();
       }
       public $deposit = "deposit";
       function getListCoin(){
        $sql = "SELECT * FROM coin";
        $query = $this->db->query($sql);
        $data = $query->result_array();
        return $data;
   }
   function findInfoCoin($nameC){
    $sql = "SELECT * FROM coin where name= '$nameC'";
    $query = $this->db->query($sql);
    $data = $query->result_array();
    return $data;
     }    
     public function add_booking($data)
     {   
        // print_r($data);die();
         $is = $this->db->insert($this->deposit, $data);
         return $is;
     } 
}

