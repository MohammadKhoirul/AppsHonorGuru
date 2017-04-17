<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Penghonoran_model extends CI_Model {
    function __construct() {
        parent::__construct();
    }
    
    function data_penghonoran() {
        $query=$this->db->query("SELECT * FROM penghonoran ORDER BY id_honor DESC");
        return $query->result();
    }
    
    function data_honor() {
        $query=$this->db->query("SELECT nuptk FROM honor");
        return $query->result();
    }
    
    function tambah_data() {
        $id_honor = $this->input->post('id_honor');
        $bulan = $this->input->post('bulan'); 	  
        $tahun = $this->input->post('tahun');
        $nuptk = $this->input->post('nuptk');
        $query = $this->db->query("SELECT * FROM honor WHERE nuptk = '$nuptk'");
        $data = $query->row();     
        
        $total = $data->jumlah_jam * $data->jumlah_honor * 4;
              
        $query=$this->db->get('honor');
        if($query->num_rows == 0){
            redirect('penghonoran');
        }
        
        if($id_honor == null){
            redirect('penghonoran');
        }
        
        if($id_honor == 'HNR'){
            redirect('penghonoran');
        } 
        $data = array ('id_honor' => $id_honor, 'bulan' => $bulan, 'tahun' => $tahun, 'nuptk' => $nuptk, 'nama' => $data->nama, 'jumlah_jam' => $data->jumlah_jam, 'jumlah_honor' => $total);
        $this->db->insert('penghonoran',$data);

    }
    
    function edit_data($id_honor) { 
        $id_honor = $this->input->post('id_honor');
        $bulan = $this->input->post('bulan'); 	  
        $tahun = $this->input->post('tahun');	  
        $data = array ('id_honor' => $id_honor, 'bulan' => $bulan, 'tahun' => $tahun);
        $this->db->where('id_honor',$id_honor);
        $this->db->update('penghonoran',$data);
    }
    
    function data_penghonoran_perbaris($id_honor) {
        $query=$this->db->query("SELECT * FROM penghonoran WHERE id_honor = '$id_honor'");
        return $query->row();
    }
        
}
?>