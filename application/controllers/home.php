<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->check_is_validated();
    }

	function index() {
       $this->load->view('home/home_view');
    }
    
    function check_is_validated(){
        if(! $this->session->userdata('validated')){
            redirect('login');
        }
    }

}
?>