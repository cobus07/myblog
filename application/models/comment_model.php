<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Comment_model extends CI_Model{
    public function save($name, $email, $website, $subject){
        $arr = array(
            "name" => $name,
            "email" => $email,
            "website" => $website,
            "subject" => $subject
        );
        $this->db->insert('t_comment', $arr);
    }

    public function get_all(){
        $this -> db -> select("*");
        $this -> db -> from('t_comment comment');
        $this -> db -> join('t_blog blog', 'comment.this_blog=blog.blog_id');
        return $this -> db -> get() -> result();
    }
}