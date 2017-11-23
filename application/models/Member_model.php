<?php

class Member_model extends CI_Model {

    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function get_members_by_keyword($keyword="",$field='*',$offset=0,$limit=10){
        if($keyword){
           $this->db->like('username', $keyword, 'both');
           $this->db->or_like('mobile',$keyword,'both');
           $this->db->or_like('address',$keyword,'both');
        }
        $this->db->select($field);
        $this->db->limit($limit,$offset);
        $this->db->order_by('id', 'DESC');
        $query =$this->db->get('members');
        //echo $this->db->last_query();
        return $query->result_array();
    }


    public function  count($keyword=""){
        if($keyword){
            $this->db->like('username', $keyword, 'both');
            $this->db->or_like('mobile',$keyword,'both');
            $this->db->or_like('address',$keyword,'both');
        }
        $this->db->from('members');
        return $this->db->count_all_results();
    }


    public  function  get_info_by_id($id){

        if(!$id){
            return false;
        }
        $query=$this->db->where('id',$id)->from('members')->limit(1)->get();
        return  $query->row_array();
    }

    public function insert($post=array()){
        $data=array();
        $data['username']   = $post['username'];
        $data['mobile']  = $post['mobile'];
        $data['password']   = $post['password'];
        $data['account']  = $post['account'];
        $data['address']   = $post['address'];
        $data['addtime']  = time();
        return $this->db->insert('members', $data);
    }

    public function update($id,$post=array()){
        $data=array();
        $data['username']   = $post['username'];
        $data['mobile']  = $post['mobile'];
        $data['password']   = $post['password'];
        $data['account']  = $post['account'];
        $data['address']   = $post['address'];
        $data['edittime']  = time();
        return $this->db->where('id', $id)->update('members', $data);
    }




}