<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Config extends MY_Controller {

    public  function __construct(){
        parent::__construct();
        $this->load->model('admin_model');
        $this->load->helper('url');
    }

    public function index()
    {
        $this->load->library('form_validation');
        $this->layout->view('Config/index');

    }


    public  function add(){

        $this->load->library('form_validation');
        $this->form_validation->set_rules('username' ,'', 'required',array('required' => '用户名不能为空'));
        $this->form_validation->set_rules('rpassword','', 'required|matches[password]',array('required' => '确认密码不能为空',"matches"=>"二次输入的密码不一致"));
        $this->form_validation->set_rules('password' ,'', 'required',array('required' => '密码不能为空'));
        $this->form_validation->set_rules('mobile'   ,'', 'required',array('required' => '手机号不能为空'));
        $this->form_validation->set_rules('status'   ,'', 'required',array('required' => '状态不能为空'));
        if ($this->form_validation->run() == FALSE) {
            $this->load->view("admin/add");
        }
        else {
            $post=$this->input->post();
            $this->admin_model->insert($post);
            redirect('/Admin/index');
        }
    }



}
