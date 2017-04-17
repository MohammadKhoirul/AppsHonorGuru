<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Penghonoran extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->check_is_validated();
    }

	function index() {
 	   $this->load->model('penghonoran_model');
       $result['data'] = $this->penghonoran_model->data_penghonoran();
       $this->load->view('penghonoran/penghonoran_view',$result);
    }
    
    function check_is_validated() {
        if(! $this->session->userdata('validated')){
            redirect('login');
        }
    }
    
    function tambah() {
        $this->load->model('penghonoran_model');
        $result['data'] = $this->penghonoran_model->data_honor();
        $this->load->view('penghonoran/penghonoran_tambah_view', $result);
    }
    
    function tambah_proses() {
        $this->load->model('penghonoran_model');
        $this->penghonoran_model->tambah_data();
	    redirect('penghonoran');
    }
    
    function hapus($id_honor) {   
        $this->db->delete('penghonoran', array('id_honor' => $id_honor));       
	    redirect('penghonoran');
    }
    
    function edit($id_honor) {
        $this->load->model('penghonoran_model');
        $result['data']=$this->penghonoran_model->data_penghonoran_perbaris($id_honor);
        $this->load->view('penghonoran/penghonoran_edit_view',$result);
    }
    
    function edit_proses($id_honor) {
        $this->load->model('penghonoran_model');
        $this->penghonoran_model->edit_data($id_honor);
	    redirect('penghonoran');
    }   
  
}
?>