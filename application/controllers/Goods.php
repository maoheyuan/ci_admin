<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Goods extends CI_Controller {

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
        $this->load->view('Goods/index');
    }


    public  function  add(){

        $this->load->view("Goods/add");
    }
    public  function  edit(){

        $this->load->view("Goods/edit");
    }



}
