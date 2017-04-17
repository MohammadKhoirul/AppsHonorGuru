<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Logout extends CI_Controller {     
    function __construct() {
        parent::__construct();
        $this->check_is_validated();
    }
   
    function index() {
        $this->session->sess_destroy();
        redirect('login');
    }
    
    function check_is_validated() {
        if(! $this->session->userdata('validated')){
            redirect('home');
        }
    }

}
?>