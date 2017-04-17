<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {     
    function __construct() {
        parent::__construct();
        $this->check_isvalidated();
    }
   
    function index($msg = NULL) {
        $this->load->model('login_model');
        $result = $this->login_model->validate();
        if(! $result) {
            $data['msg'] = $msg;
            $this->load->view('login/login_view', $data);
        }
        else {
            redirect('home');
        }
    }
    
    function check_isvalidated() {
        if($this->session->userdata('validated')){
            redirect('home');
        }
    }
    
    function process() {
        $this->load->model('login_model');
        $result = $this->login_model->validate();
        if(! $result) {
            $msg = '<div>Login Gagal, Kesalahan Username Atau Password</div>';
            $this->index($msg);
        }
        else {
            redirect('home');
        }        
    }
        
}
?>