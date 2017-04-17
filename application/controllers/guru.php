<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class guru extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->check_is_validated();
    }

	function index() {
 	   $this->load->model('guru_model');
       $result['data'] = $this->guru_model->data_guru();
       $this->load->view('guru/guru_view',$result);
    }
    
    function check_is_validated() {
        if(! $this->session->userdata('validated')){
            redirect('login');
        }
    }
    
    function tambah() {
        $this->load->view('guru/guru_tambah_view');
    }
    
    function tambah_proses() {
        $this->load->model('guru_model');
        $this->guru_model->tambah_data();
	    redirect('guru');
    }
    
    function hapus($nuptk) {
        $this->db->delete('guru', array('nuptk' => $nuptk));
        $this->db->delete('keterangan', array('nuptk' => $nuptk));
		$this->db->delete('honor', array('nuptk' => $nuptk));		
	    redirect('guru');
    }
    
    function edit($nuptk) {
        $this->load->model('guru_model');
        $result['data']=$this->guru_model->data_guru_perbaris($nuptk);
        $this->load->view('guru/guru_edit_view',$result);
    }
    
    function edit_proses($nuptk) {
        $this->load->model('guru_model');
        $this->guru_model->edit_data($nuptk);
	    redirect('guru');
    }
    
}
?>