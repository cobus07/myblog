<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model{
    public function save($username,$password){
        $arr = array(
            "admin_name" => $username,
            "admin_pwd" => $password
            );
    $this->db->insert('t_admin',$arr);
    }
    public function get_by_name_pwd($username, $password){
        $arr = array(
            'admin_name' => $username,
            'admin_pwd' => $password
        );
        return $this->db->get_where('t_admin', $arr)->row();
    }

    public function get_by_id($userid){
        $arr = array(
            'admin_id' => $userid,
        );
        return $this->db->get_where('t_admin', $arr)->row();
    }

    public function get_all(){
        return $this->db->get('t_admin')->result();
    }

    public function delete($admin_id){
        $this->db->delete('t_admin',array('admin_id'=>$admin_id));
    }

    public function update_admin($admin_id,$admin_name,$admin_tel,$admin_qq){
        $data = array(
            'admin_name'=>$admin_name,
            'admin_tel'=>$admin_tel,
            'admin_qq'=>$admin_qq
        );
        $this->db->where('admin_id',$admin_id);
        $query = $this->db->update('t_admin',$data);
//        var_dump($query);
//        die;
        if($query){
            return TRUE;
        }else{
            return FALSE;
        }
    }
}