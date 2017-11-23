<?php

class Member_model extends CI_Model {

    public $title;
    public $content;
    public $date;

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



    public function insert(){
        $this->title    = $_POST['title']; // please read the below note
        $this->content  = $_POST['content'];
        $this->date = time();
        $this->db->insert('member', $this);
    }




    public function update(){
        $this->title    = $_POST['title'];
        $this->content  = $_POST['content'];
        $this->date = time();
        $this->db->update('member', $this, array('id' => $_POST['id']));
    }

}