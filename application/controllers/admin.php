<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin_model');
    }

    public function admin_regist(){
        $this->load->view('admin/admin-regist');
    }
    public function admin_login(){
        $this->load->view('admin/admin-login');
    }
    public function admin_table(){
        $this->load->view('admin/admin-table');
    }
    public function login_success(){
        $this->load->view('admin/admin-index');
    }
    public function admin_me(){
        $userid = $this->uri->segment(3);
        $row = $this->admin_model->get_by_id($userid);
//        var_dump($data);
//        die;
        $data = array(
            'row'=>$row
        );
        $this->load->view('admin/admin-me',$data);
    }
    public function admin_log(){
        $this->load->view('admin/admin-log');
    }
    public function save_admin(){
//		接收数据
        $username = $this->input->post('username');
        $password = $this->input->post('password');


//		访问数据库
        $this->admin_model->save($username, $password);

        $this->load->view('admin/admin-success');
    }
    public function go_login(){
        $this->load->view('admin/admin-login');
    }
    public function check_login(){
        $username = $this->input->post("username");
        $password = $this->input->post('password');

        $row = $this->admin_model->get_by_name_pwd($username, $password);

        if($row){
//            登陆成功，向session存入用户数据
            $this->session->set_userdata('login_admin', $row);
//            $this->load->view('admin/admin-index');
            redirect('admin/login_success');

        }else{
            $this->load->view('admin/admin-regist');
        }
    }
    public function admin_mgr(){
        $result = $this->admin_model->get_all();
//        if($result){
            $data = array(
                'admins' => $result
            );
            $this->load->view('admin/admin-table', $data);
//        }
    }
    public function admin_write(){
        $row = $this->admin_model->get_by_id();
        $data = array(
            'admin' => $row
        );
        $this->load->view('admin/admin-me', $data);
    }
    public function delete_admin(){
        $admin_id = $this->input->get('admin_id');
        $this->admin_model->delete($admin_id);
        $this->admin_mgr();
    }
    public function ajax_edit_me(){
        $admin_id = $this->input->post('admin_id');
        $admin_name = $this->input->post('admin_name');
        $admin_tel = $this->input->post('admin_tel');
        $admin_qq = $this->input->post('admin_qq');
        $res = $this->admin_model->update_admin($admin_id,$admin_name,$admin_tel,$admin_qq);
//        var_dump($res);
//        die;
        if($res){
            echo "success";
        }else{
            echo "fail";
        }
    }
}