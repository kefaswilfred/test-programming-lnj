<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function cek($email)
    {
        $this->db->where('email', $email);
        $result = $this->db->get('user');
        if ($result->num_rows() > 0) 
        {
        	return $result->row();
        } 
        else 
        {
            return false;
        }
    }

}
