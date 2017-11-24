<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logs extends CI_Controller {

    public  function __construct(){
        parent::__construct();
        $this->load->model('logs_model');
        $this->load->helper('url');
        $data=array();
        $data['controller'] =  $this->router->fetch_class();
        $this->load->view('Common/headerNav');
        $this->load->view('Common/sidebarNav',$data);
    }

    public function index()
    {
        $keyword = $this->input->get('keyword');
        $page = $this->input->get('per_page');
        $logs=$this->logs_model->get_logs_by_keyword($keyword,"*",$page);
        $count=$this->logs_model->count($keyword);
        $this->load->library('page');
        $data["page"]=$this->page->getPage($count,10,"/Logs/index");
        $data["logs"]=$logs;
        $this->load->view('Logs/index',$data);

    }

}
