<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Config extends CI_Controller {

    public  function __construct(){
        parent::__construct();
        $this->load->model('admin_model');
        $this->load->helper('url');
        $data=array();
        $data['controller'] =  $this->router->fetch_class();
        $this->load->view('Common/headerNav');
        $this->load->view('Common/sidebarNav',$data);
    }




    public function index()
    {
        $this->load->library('form_validation');
        $keyword = $this->input->get('keyword');
        $page = $this->input->get('per_page');
        $admins=$this->admin_model->get_admins_by_keyword($keyword,"*",$page);
        $count=$this->admin_model->count($keyword);

        $this->load->view('Config/index');
    }


    public  function add(){


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
