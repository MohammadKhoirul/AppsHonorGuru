<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Honor_model extends CI_Model {
    function __construct() {
        parent::__construct();
    }
    
    function data_honor() {
        $query=$this->db->query("SELECT * FROM honor ORDER BY nama");
        return $query->result();
    }
    
    function data_keterangan() {
        $query=$this->db->query("SELECT nuptk FROM keterangan WHERE honor = 'Belum'");
        return $query->result();
    }
    
    function tambah_data() {
        $nuptk = $this->input->post('nuptk');
        $query = $this->db->query("SELECT nama FROM guru WHERE nuptk = '$nuptk'");
        $nama = $query->row();
        $jumlah_jam = $this->input->post('jumlah_jam');  
        $jumlah_honor = $this->input->post('jumlah_honor');
        
        $query=$this->db->get('guru');
        if($query->num_rows == 0){
            redirect('honor');
        }
        
        if($nuptk == null){
            redirect('honor');
        }
              
        $data = array ('nuptk' => $nuptk, 'nama' => $nama->nama, 'jumlah_jam' => $jumlah_jam, 'jumlah_honor' => $jumlah_honor);
        $this->db->insert('honor',$data);
                
        $value_honor = 'Sudah';
        $honor = array('honor' => $value_honor);
        $this->db->where('nuptk',$nuptk);
        $this->db->update('keterangan',$honor);
    }
    
    function edit_data($nuptk) { 
        $nuptk = $this->input->post('nuptk');
        $jumlah_jam = $this->input->post('jumlah_jam');
        $jumlah_honor = $this->input->post('jumlah_honor');  	  
        $data = array ('nuptk' => $nuptk, 'jumlah_jam' => $jumlah_jam, 'jumlah_honor' => $jumlah_honor);
        $this->db->where('nuptk',$nuptk);
        $this->db->update('honor',$data);
    }
    
    function data_honor_perbaris($nuptk) {
        $query=$this->db->query("SELECT * FROM honor WHERE nuptk = '$nuptk'");
        return $query->row();
    }
    
}
?>