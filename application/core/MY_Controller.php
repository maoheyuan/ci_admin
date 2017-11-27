<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/11/27
 * Time: 11:28
 */


class MY_Controller extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('url');
        $admin=$this->session->userdata('admin');
        if($admin){
            redirect("/Common/login");
        }
        $this->load->library('layout',array('main'));
    }
}