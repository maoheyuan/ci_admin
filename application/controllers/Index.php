<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends MY_Controller {

    public  function __construct(){
        parent::__construct();
         $this->load->database();
    }


    public function index(){


        $goods_count= $this->db->from('goods')->count_all_results();
        $orders_count= $this->db->from('orders')->count_all_results();
        $members_count= $this->db->from('members')->count_all_results();
        $query=$this->db->select_sum('pay_money')->get("orders");
        $orders_money=$query->row_array();
        $data["goods_count"]  = $goods_count;
        $data["orders_count"] = $orders_count;
        $data["members_count"]= $members_count;
        $data["orders_money"] = $orders_money['pay_money'];


        
        $this->layout->view('index/index',$data);
	}





}
