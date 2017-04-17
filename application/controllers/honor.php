<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Honor extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->check_is_validated();
    }

	function index() {
 	   $this->load->model('honor_model');
       $result['data'] = $this->honor_model->data_honor();
       $this->load->view('honor/honor_view',$result);
    }
    
    function check_is_validated() {
        if(! $this->session->userdata('validated')){
            redirect('login');
        }
    }
    
    function tambah() {
        $this->load->model('honor_model');
        $result['data'] = $this->honor_model->data_keterangan();
        $this->load->view('honor/honor_tambah_view', $result);
    }
    
    function tambah_proses() {
        $this->load->model('honor_model');
        $this->honor_model->tambah_data();
	    redirect('honor');
    }
    
    function hapus($nuptk) {
        $this->db->query("UPDATE keterangan SET honor = 'Belum' WHERE nuptk = '$nuptk'");   
        $this->db->delete('honor', array('nuptk' => $nuptk));      
	    redirect('honor');
    }
    
    function edit($nuptk) {
        $this->load->model('honor_model');
        $result['data']=$this->honor_model->data_honor_perbaris($nuptk);
        $this->load->view('honor/honor_edit_view',$result);
    }
    
    function edit_proses($nuptk) {
        $this->load->model('honor_model');
        $this->honor_model->edit_data($nuptk);
	    redirect('honor');
    }   
    
}
?>