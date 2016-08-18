<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

//	public function _construct(){
//		parent::_construct;
//		header('Content-Type:text/html, charset=utf-8');
//}

	public function index(){
		$this->load->view('index');
	}
	public function contact(){
		$this->load->view('contact');
	}
	public function single(){
		$this->load->view('single');
	}

	public function get_articles(){
		$page = $this -> input -> get('page');
		$this -> load -> model('blog_model');
		$all = $this -> blog_model -> get_all();
		$total = count($all);
		$total_page = ceil($total/6);
		$result = $this -> blog_model -> get_by_page($page);
		$json = array(
				'data' => $result,
				'isEnd' => $page/6+1<$total_page?false:true
		);
		echo json_encode($json);
	}
}
