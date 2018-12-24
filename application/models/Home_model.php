<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Home_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();

        if (version_compare(PHP_VERSION, '7.2.0', '>=')) {

            // Ignores notices and reports all other kinds... and warnings

            error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);

        }
    }
   
    public $booking = "booking";
    public $category = "category";
    public $setting = "setting";
    public $coin = "coin";
    public $users = "users";
    public $deposit = "deposit";

    public function getadmin($email,$pass)
    {
        $sql = "SELECT * FROM " . $this->users . " where Email = '".$email."' and Password ='".$pass."' and Role=1";
        $query = $this->db->query($sql);
        $data = $query->row_object();
      //  print_r( $sql);die();
        return $data;

    }
    public function getcoin()
    {
        $sql = "SELECT * FROM " . $this->coin . " order by ID DESC";
        $query = $this->db->query($sql);
        $data = $query->result_array();
      //  print_r( $sql);die();
        return $data;

    }   
    public function add_coin($data)
    {   
       // print_r($data);die();
        $is = $this->db->insert($this->coin, $data);
        return $is;
    } 
     public function up_coin($id,$data)
    {
        $this->db->where('ID', $id);
        $this->db->update($this->coin,$data); 
      
    }  
     public function delete_coin($id)
    {
        $this->db->where('ID', $id);
        $this->db->delete($this->coin);   
    }   
    public function get_setting()
    {
        $sql = "SELECT * FROM " . $this->setting . " ";
        $this->db->where('ID',1);
        $query = $this->db->query($sql);
        $data = $query->row_object();
      //  print_r( $sql);die();
        return $data;

    }  
     public function edit_setting($id,$data)
    {
        $this->db->where('ID', $id);
       $is= $this->db->update($this->setting,$data); 
        return $is;
    }         
    public function getusers()
    {
        $sql = "SELECT * FROM " . $this->users . " where Role=2 order by ID DESC";
        $query = $this->db->query($sql);
        $data = $query->result_array();
        return $data;
    }
    public function getuser($id)
    {
        $sql = "SELECT * FROM " . $this->users . " where ID='".$id."' and Role=2 order by ID DESC";
        $query = $this->db->query($sql);
        $data = $query->result_array();
      //  print_r( $sql);die();
        return $data;
    } 
    public function getdeposits($status="",$date_from="",$date_to="")
    {
        $str="";
        if ($status!="") {
            $str.=" and deposit.Status='".$status."'";
        }
        if ($date_from!="" && $date_to!="") {
            $str.=" and deposit.Date_create<='".$date_to."' and deposit.Date_create>='".$date_from."'";
        }
        $sql = "SELECT users.Email, coin.Name, deposit.ID, deposit.Total_coin, deposit.Total_usd,  deposit.Price_usd, deposit.Date_create, deposit.Date_update, deposit.Content, deposit.Status, deposit.Types, deposit.Percent, deposit.Term FROM deposit INNER JOIN coin ON deposit.Coin_ID = coin.ID INNER JOIN users ON deposit.User_ID = users.ID  WHERE deposit.ID<>0" .$str;
        $query = $this->db->query($sql);
        $data = $query->result_array();
        return $data;
    }
    public function getdeposit($id)
    {
        $sql = "SELECT users.Email, coin.Name, deposit.ID, deposit.Total_coin, deposit.Total_usd,  deposit.Price_usd, deposit.Date_create, deposit.Date_update, deposit.Content, deposit.Status, deposit.Types, deposit.Percent, deposit.Term FROM deposit INNER JOIN coin ON deposit.Coin_ID = coin.ID INNER JOIN users ON deposit.User_ID = users.ID  WHERE deposit.ID='".$id."'";
        $query = $this->db->query($sql);
        $data = $query->row_object();
        return $data;
    }        
}
