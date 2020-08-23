<?php

/*
 * Generated by CRUDigniter v2.0 Beta 
 * www.crudigniter.com
 */

class User_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    /*
     * get a user by user_id
     */

    function get_user($user_id) {
        return $this->db->get_where('users', array('user_id' => $user_id))->row_array();
    }

    function get_numb_users($user_id, $category) {
        return $this->db->get_where('users', array('owner_id' => $user_id, 'category' => $category))->num_rows();
    }

    /*
     * get all users
     */

    function get_all_users() {
        return $this->db->get('users')->result_array();
    }

    /*
     * function to add new user
     */

    function add_user($params) {
        $this->db->insert('users', $params);
        return $this->db->insert_id();
    }

    /*
     * function to update user
     */

    function update_user($user_id, $params) {
        $this->db->where('user_id', $user_id);
        $this->db->update('users', $params);
    }

    /*
     * function to delete user
     */

    function delete_user($user_id) {
        $this->db->delete('users', array('user_id' => $user_id));
    }

    function check_unique_feild($value1, $value2, $value5, $value6, $value7, $value8) {
        $this->db->select($value1);
//        $this->db->select('admin_id,username,type');
        $this->db->from($value2);
//        $this->db->where($value3, $value4);
        $this->db->where_not_in($value5, $value6);
        $this->db->where($value7, $value8);
        $this->db->limit(1);
        $query = $this->db->get();
        if ($query->num_rows() == 1) {
            return true;
        } else {
            return false;
        }
    }

    function login($email, $password) {
        $this->db->where("emailaddress", $email);
        $this->db->or_where('user_id', $email);
        $this->db->where("password", $password);
        $this->db->limit(1);
        $query = $this->db->get("users");
        if ($query->num_rows() == 1) {
            return $query->result();
        }
        return false;
    }

}
