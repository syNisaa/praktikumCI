<?php
defined('BASEPATH') or exit('No direct script access allowed');

class admin extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('modeldosen');
        $this->load->model('modeluser');
        $this->load->library('session');
    }

    function index()
    {
        $this->load->view('loginregister/index.php');
        // echo $data;
    }

    function ceklogin()
    {
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));

        if($this->modeluser->auth_admin($username, $password)){
            $this->session->set_userdata('username', $username);
			redirect('index.php/admin/dashboard');
		} else {
			$this->session->set_flashdata('message_login_error', 'Login Gagal, pastikan username dan passwrod benar!');
		}
    }

    function dashboard()
    {
        $this->load->view('template/dashboard');
        // echo $data;
    }

    function logout(){
        $this->session->sess_destroy();
        redirect(base_url('index.php'));
    }
}
