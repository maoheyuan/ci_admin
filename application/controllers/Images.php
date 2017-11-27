<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Images extends MY_Controller {

    public  function __construct(){
        parent::__construct();
        // $this->load->database();
    }



    public function index()
    {
        $this->layout->view('Images/index');
    }
    public  function  add(){

        $this->layout->view("Images/add");
    }
    public  function  edit(){

        $this->layout->view("Images/edit");
    }
    public  function  info(){

        $this->layout->view("Images/info");
    }

}
