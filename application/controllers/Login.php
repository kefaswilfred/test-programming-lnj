<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{

    public function __construct() {
        parent::__construct();

        $this->load->model('Login_model');
    }

    function index()
    {
        $this->load->view('login');
    }

    public function cek()
    {
        $email = $this->input->post('email');
        $pass = $this->input->post('password');
        $password = password_hash($pass, PASSWORD_BCRYPT);
        $login = $this->Login_model->cek($email);
        if (!$login)
        {
            $respon = array(
                'is_true' => 0,
                'msg' => 'failed',
            );
        }
        else if (password_verify($pass, $login->password))
        {   
            $array = array(
                'user_id'   => $login->id,
                'email'     => $login->email,
                'logged_in' => true,

            );
            $this->session->set_userdata($array);
            $respon = array(
                'is_true' => 1,
                'msg' => 'success',
            );              
        }
        else
        {
            $respon = array(
                'is_true' => 0,
                'msg' => 'failed',
            );
        }

        echo json_encode($respon);
    }

}
