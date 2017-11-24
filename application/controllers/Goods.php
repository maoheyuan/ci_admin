<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Goods extends CI_Controller {

    public  function __construct(){
        parent::__construct();
        $this->load->model('goods_model');
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
        $goods=$this->goods_model->get_goods_by_keyword($keyword,"*",$page);
        $count=$this->goods_model->count($keyword);
        $this->load->library('page');
        $data["page"]=$this->page->getPage($count,10,"/Goods/index");
        $data["goods"]=$goods;
        $this->load->view('goods/index',$data);

    }


    public  function add(){

        $this->load->library('form_validation');
        $this->form_validation->set_rules('username' ,'', 'required',array('required' => '用户名不能为空'));
        $this->form_validation->set_rules('password' ,'', 'required',array('required' => '密码不能为空'));
        $this->form_validation->set_rules('rpassword','', 'required',array('required' => '确认密码不能为空'));
        $this->form_validation->set_rules('rpassword','', 'matches[password]', array("matches"=>"二次输入的密码不一致"));
        $this->form_validation->set_rules('mobile'   ,'', 'required',array('required' => '手机号不能为空'));
        $this->form_validation->set_rules('status'   ,'', 'required',array('required' => '状态不能为空'));
        $this->form_validation->set_rules('account'  ,'', 'required',array('required' => '账号不能为空'));
        $this->form_validation->set_rules('address'  ,'', 'required',array('required' => '地址不能为空'));
        if ($this->form_validation->run() == FALSE) {
            $this->load->view("goods/add");
        }
        else {
            $post=$this->input->post();
            $this->goods_model->insert($post);
            redirect('/Goods/index');
        }
    }


    public  function edit(){

        $this->load->library('form_validation');
        $this->form_validation->set_rules('username' ,'', 'required',array('required' => '用户名不能为空'));
        $this->form_validation->set_rules('mobile'   ,'', 'required',array('required' => '手机号不能为空'));
        $this->form_validation->set_rules('status'   ,'', 'required',array('required' => '状态不能为空'));
        $this->form_validation->set_rules('account'  ,'', 'required',array('required' => '账号不能为空'));
        $this->form_validation->set_rules('address'  ,'', 'required',array('required' => '地址不能为空'));
        $id=$this->input->get("id");
        $goods=$this->goods_model->get_info_by_id($id);
        $data["goods"]=$goods;
        $post=$this->input->post();
        if ($this->form_validation->run() == FALSE ||$post["password"]!=$post["rpassword"]) {
            if($this->input->method()=="post"){
                $data["goods"]=$post;
                if($post["password"]!=$post["rpassword"]){
                    $this->form_validation->set_file_error( "rpassword",'二次输入的密码不一致');
                }
            }
            $this->load->view("goods/edit",$data);
        }
        else {

            $this->goods_model->update($id,$post);
            redirect("/Goods/index?");
        }
    }
    public  function  delete(){
        $id = $this->input->get('id');
        $this->goods_model->delete($id);
        redirect("/Goods/index");
    }



}
