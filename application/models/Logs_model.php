<?php

class Logs_model extends CI_Model {

    public function __construct(){
        parent::__construct();
        $this->load->database();

    }

    public function get_logs_by_keyword($keyword="",$field='*',$offset=0,$limit=10){
        if($keyword){
           $this->db->like('content', $keyword, 'both');
            $this->db->or_like('operator',$keyword,'both');
        }
        $this->db->select($field);
        $this->db->limit($limit,$offset);
        $this->db->order_by('id', 'DESC');
        $query =$this->db->get('logs');
        //echo $this->db->last_query();
        $list=$query->result_array();
        foreach($list as $key=>$value){
            $list[$key]=$this->format_data($value);
        }
        return $list;
    }


    protected  function format_data($data){

        if($data["addtime"]){
            $data["addtime"]=date("Y-m-d H:i:s",$data["addtime"]);
        }
        return $data;
    }


    public function  count($keyword=""){
        if($keyword){
            $this->db->like('content', $keyword, 'both');
            $this->db->or_like('operator',$keyword,'both');
        }
        $this->db->from('logs');
        return $this->db->count_all_results();
    }



}