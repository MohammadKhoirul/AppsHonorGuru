<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Laporan extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->check_is_validated();
    }

	function index() {
       $this->load->view('laporan/laporan_buat_view');
    }
    
    function check_is_validated() {
        if(! $this->session->userdata('validated')){
            redirect('login');
        }
    }
    
    function laporan_proses() {
        $this->load->model('laporan_model');
        $result['data']=$this->laporan_model->data_penghonoran();
	    $this->load->view('laporan/laporan_hasil_view',$result);
    }
     
}
?>