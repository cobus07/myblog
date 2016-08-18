<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Message_model extends CI_Model{
    public function save($username, $email, $message){
        $arr = array(
            'username' => $username,
            'email' => $email,
            'message' => $message
        );
        $this->db->insert('t_message', $arr);
    }

    public function get_by_username($username){
        return $this->db->get_where('t_message', array('username'=>$username))->row();
    }
}