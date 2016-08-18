
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Comment extends CI_Controller {
    public function save_comment(){
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $website = $this->input->post('website');
        $subject = $this->input->post('subject');

        if($name == '' || $email == '' || $subject == ''){
//            $this->single(); //本页面调用函数
            $this->load->view('single');
//			echo "fail";
//			echo "<script>alert('请重新输入！');location.herf='../welcome/single'</script>";
        }else{
            $this->load->model('comment_model');
            $this->comment_model->save($name, $email, $website, $subject);
            echo "<script>alert('保存成功!');location.href='../welcome/single';</script>";
//			echo "success";
        }
    }
    public function blog_comment(){
        $this->load->model('comment_model');
        $result = $this->comment_model->get_all();
        $data = array(
            'comments' => $result
        );
//        echo $data;
//        注意这里用var_dump()
//        var_dump($data);
//        die;
        $this->load->view('single', $data);
    }
}