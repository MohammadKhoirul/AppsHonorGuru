<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Laporan_model extends CI_Model {
    function __construct() {
        parent::__construct();
    }
    
    function data_penghonoran() {
        $bulan = $this->input->post('bulan'); 	  
        $tahun = $this->input->post('tahun');
        $query=$this->db->query("SELECT * FROM penghonoran WHERE bulan = '$bulan' AND tahun = '$tahun'");
        if($query->num_rows !== 0){
            return $query->result();
        }
        else{
            redirect('laporan');
        }
    }
    
}
?>