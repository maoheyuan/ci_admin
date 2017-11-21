<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {

    public  function __construct(){

        parent::__construct();
        // $this->load->database();
    }


    public function index()
    {
        $this->load->view('Order/index');
    }


    public  function  add(){

        $this->load->view("Order/add");
    }
    public  function  edit(){

        $this->load->view("Order/edit");
    }

    public  function  info(){

        $this->load->view("Order/info");
    }

}
