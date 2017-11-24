<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

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
        $keyword = $this->input->get('keyword');
        $page = $this->input->get('per_page');
        $admins=$this->admin_model->get_members_by_keyword($keyword,"*",$page);
        $count=$this->admin_model->count($keyword);
        $this->load->library('page');
        $data["page"]=$this->page->getPage($count,10,"/Admin/index");
        $data["admins"]=$admins;
        $this->load->view('admin/index',$data);
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


    public  function edit(){
        $this->load->library('form_validation');
        $this->form_validation->set_rules('username' ,'', 'required',array('required' => '用户名不能为空'));
        $this->form_validation->set_rules('mobile'   ,'', 'required',array('required' => '手机号不能为空'));
        $this->form_validation->set_rules('status'   ,'', 'required',array('required' => '状态不能为空'));
        $id=$this->input->get("id");
        $admin=$this->admin_model->get_info_by_id($id);
        $data["admin"]=$admin;
        $post=$this->input->post();
        if ($this->form_validation->run() == FALSE ||$post["password"]!=$post["rpassword"]) {
            if($this->input->method()=="post"){
                $data["admin"]=$post;
                if($post["password"]!=$post["rpassword"]){
                    $this->form_validation->set_file_error( "rpassword",'二次输入的密码不一致');
                }
            }
            $this->load->view("admin/edit",$data);
        }
        else {
            $this->admin_model->update($id,$post);
            redirect("/Admin/index");
        }
    }

    public  function  delete(){
        $id = $this->input->get('id');
        $this->admin_model->delete($id);
        redirect("/Admin/index");
    }
}
