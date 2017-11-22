<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {

    public  function __construct(){
        parent::__construct();
        $data=array();
        $data['controller'] =  $this->router->fetch_class();
        $this->load->view('Common/headerNav');
        $this->load->view('Common/sidebarNav',$data);
        // $this->load->database();
    }




    public function index()
	{
/*        $this->load->library('pagination');
        $config['base_url'] = '/Member/index/page/';
        $config['total_rows'] = 200;
        $config['per_page'] = 10;
        $config['reuse_query_string'] = true;
        $config['full_tag_open'] = '<ul>';
        $config['full_tag_close'] = '</ul>';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li><a class="active" href="#">';
        $config['cur_tag_close'] = '</li></a>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['last_link'] = '末页';
        $config['first_link'] = '首页';

        $this->pagination->initialize($config);
        $data["page"]= $this->pagination->create_links();*/
        $data["page"]=$this->getPage();
        $this->load->view('member/index',$data);
		//$this->load->view('member/index');
	}



    private  function  getPage(){
        $this->load->library('pagination');
        $config['base_url'] = '/Member/index/page/';
        $config['total_rows'] = 200;
        $config['per_page'] = 10;
        $config['reuse_query_string'] = true;
        $config['full_tag_open'] = '<ul>';
        $config['full_tag_close'] = '</ul>';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li><a class="active" href="#">';
        $config['cur_tag_close'] = '</li></a>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['last_link'] = '末页';
        $config['first_link'] = '首页';
        $this->pagination->initialize($config);
        $page= $this->pagination->create_links();
        return $page;

    }





}
