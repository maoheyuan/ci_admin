<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Import extends MY_Controller {

    public  function __construct(){
        parent::__construct();

    }


    public  function  all(){

        $this->admins();
        $this->category();
        $this->goods();
        $this->members();
        $this->logs();
        $this->orders();
    }
    public function admins(){
        $store = $this->load->database('store', TRUE);
        $db = $this->load->database('default', TRUE);

        $store->where('realName !=',"");
        $store->where('userName !=',"");
        $query =$store->get('ot_admin');

        $list=$query->result_array();
        //echo $store->last_query();
        foreach($list as $key=>$value){
            $admin=array();
            $admin["username"]=$value["userName"];
            $admin["realname"]=$value["realName"];
            $admin["mobile"]=$value["mobile"];
            $admin["password"]=$value["password"];
            $admin["status"]=1;
            $admin["addtime"]=$value["addTime"];
            $admin["edittime"]=$value["editTime"];
            $db->insert('admins', $admin);
        }
    }


    public function category(){
        $store = $this->load->database('store', TRUE);
        $db = $this->load->database('default', TRUE);
        $store->where('tbParentId !=', 0);
        $query =$store->get('in_category');
        $list=$query->result_array();

        foreach($list as $key=>$value){
            $category=array();
            $category["name"]=$value["tbName"];
            $category["status"]=rand(1,2);
            $category["addtime"]=($value["editTime"]-10000);
            $category["edittime"]=$value["editTime"];

            $db->insert('category', $category);
        }
    }



    public function goods(){
        $store = $this->load->database('store', TRUE);
        $db = $this->load->database('default', TRUE);
/*
        $store->where('tbParentId !=', 0);*/
        $query =$store->get('in_goods');
        $list=$query->result_array();

       /* var_dump($list);
        exit;*/
        foreach($list as $key=>$value){

            $goods=array();
            $goods["name"]=$value["goodsName"];
            if($value["images"]){
                $goods["image"]=$value["images"];
            }
            $goods["discription"]=($value["goodDescript"]);
            if($value["content"]){
                $goods["content"]=$value["content"];
            }
            $goods["market_price"]=($value["costPrice"]);
            $goods["sales_price"]=$value["costPrice"];
            $goods["stock"]=($value["num"]);
            $goods["status"]=$value["status"];
            $goods["addtime"]=($value["addTime"]);
            $goods["edittime"]=$value["editTime"];
            $db->insert('goods', $goods);
        }
    }

    public function members(){
        $store = $this->load->database('store', TRUE);
        $db = $this->load->database('default', TRUE);
        $store->where('attentions =', 1);
        $store->where('realname !=',"");
        $store->where('mobile !=',"");
        $store->where('address !=',"");
        $store->limit(100,500);
        $query =$store->get('me_member');
        $list=$query->result_array();
/*
         var_dump($list);
         exit;*/
        foreach($list as $key=>$value){
            $member=array();
            $member["username"]=$value["addTime"];
            $member["password"]=$value["openID"];
            $member["mobile"]=$value["mobile"];
            $member["account"]=$value["account"];
            $member["address"]=$value["address"];
            $member["realname"]=$value["realname"];
            $member["status"]=rand(1,2);
            $member["addtime"]=$value["addTime"];
            $member["edittime"]=$value["editTime"];
            $db->insert('members', $member);
        }
    }

    public function orders(){

        $store = $this->load->database('store', TRUE);
        $db = $this->load->database('default', TRUE);
        $store->where('orderSn !=', "");
        $store->where('mobile !=',"");
        $store->where('pickupAddress !=',"");
        $query =$store->get('in_order_delivery');
        $list=$query->result_array();
        //echo $store->last_query();
        foreach($list as $key=>$value){

            $order=array();
            $store->where('orderSn =',$value["orderSn"]);
            $store->where('salesMoney >','0');
            $query =$store->get('in_order');
            $order=$query->row_array();
            if(!$order){
                continue;
            }
            $order_data=array();
            $order_data["ordersn"]=$value["orderSn"];
            $order_data["name"]=$value["name"];
            $order_data["mobile"]=$value["mobile"];
            $order_data["address"]=$value["pickupAddress"];
            $order_data["sales_price"]=$order["salesMoney"];
            $order_data["pay_time"]=$order["payTime"];
            $order_data["pay_type"]=rand(1,2);
            $order_data["pay_money"]=$order["salesMoney"];
            $order_data["status"]=rand(1,3);
            $order_data["add_time"]=$value["addTime"];
            $order_data["edit_time"]=$value["editTime"]?$value['editTime']:$value["addTime"];
            $db->insert('orders', $order_data);
            $store->where('orderSn =',$value["orderSn"]);

            $query =$store->get('in_order_goods');
            $order_goods_list=$query->result_array();
            foreach($order_goods_list as $k=>$val){
                $store->where('id =',$val["goodsId"]);
                $query =$store->get('in_goods');
                $goods=$query->row_array();
                $order_goods=array();
                $order_goods['order_sn']=$val["orderSn"];
                $order_goods['goods_name']=$goods["goodsName"];
                $order_goods['goods_sn']=$val["goodsSn"];
                $order_goods['goods_num']=$val["goodsNum"];
                $order_goods['sales_price']=$val["goodsPrice"];
                $order_goods['market_price']=$val["goodsPrice"];
                $order_goods['return_num']=0;
                $order_goods['add_time']=$val["addTime"];
                $db->insert('orders_goods', $order_goods);
            }
        }
    }


    public  function logs(){


        $store = $this->load->database('store', TRUE);
        $db = $this->load->database('default', TRUE);
        $store->where('userName !=',"");
        $store->where('content !=',"");
        $store->where('modeName !=',"");
        $store->where('createTime !=',"");
        $store->limit(100,500);
        $query =$store->get('tm_operation_logs');
        $list=$query->result_array();
        /*
                 var_dump($list);
                 exit;*/
        foreach($list as $key=>$value){

            $member=array();
            $member["content"]=$value["content"];
            $member["module"]=$value["modeName"];
            $member["operator"]=$value["userName"];
            $member["addtime"]=$value["createTime"];

            $db->insert('logs', $member);
        }

    }

}