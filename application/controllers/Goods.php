<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Goods extends CI_Controller {

	public  function __construct(){

        parent::__construct();
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
