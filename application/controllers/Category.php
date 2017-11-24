<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {


    public  function __construct(){
        parent::__construct();
        $this->load->model('category_model');
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
        $categorys=$this->category_model->get_members_by_keyword($keyword,"*",$page);
        $count=$this->category_model->count($keyword);
        $this->load->library('page');
        $data["page"]=$this->page->getPage($count,10,"/Category/index");
        $data["categorys"]=$categorys;
        $this->load->view('Category/index',$data);

    }
    public  function add(){
        $this->load->library('form_validation');
        $this->form_validation->set_rules('name' ,'', 'required',array('required' => '分类不能为空'));
        $this->form_validation->set_rules('status'   ,'', 'required',array('required' => '状态不能为空'));
        if ($this->form_validation->run() == FALSE) {
            $this->load->view("Category/add");
        }
        else {
            $post=$this->input->post();
            $this->category_model->insert($post);
            redirect('/Category/index');
        }
    }
    public  function edit(){

        $this->load->library('form_validation');
        $this->form_validation->set_rules('name' ,'', 'required',array('required' => '分类不能为空'));
        $this->form_validation->set_rules('status'   ,'', 'required',array('required' => '状态不能为空'));
        $id=$this->input->get("id");
        $category=$this->category_model->get_info_by_id($id);
        $data["category"]=$category;
        $post=$this->input->post();
        if ($this->form_validation->run() == FALSE ) {

            if($this->input->method()=="post"){
                $data["category"]=$post;
            }
            $this->load->view("Category/edit",$data);
        }
        else {

            $this->category_model->update($id,$post);
            redirect("/Category/index?");
        }
    }

    public  function  delete(){
        $id = $this->input->get('id');
        $this->category_model->delete($id);
        redirect("/Category/index");
    }

}
