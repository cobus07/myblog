
/**
 * Created by PhpStorm.
 * User: 123
 * Date: 2016/1/3
 * Time: 12:55
 */
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Message extends CI_Controller {
    public function check_name(){
        $username = $this->input->get('username');
        $this->load->model('message_model');
        $row = $this->message_model->get_by_username($username);

        if($row){
            echo 'fail';
        }else{
            echo 'success';
        }
    }
    public function save_message(){
        $username = $this->input->post('username');
        $email = $this->input->post('email');
        $message = $this->input->post('message');

        if($username == '' || $email == '' || $message == ''){
//			$this->contact(); //本页面调用函数
            echo "fail";
        }else{
            $this->load->model('message_model');
            $this->message_model->save($username, $email, $message);
//			echo "<script>alert('保存成功!');location.href='../welcome/contact';</script>";
            echo "success";
        }
    }
}
