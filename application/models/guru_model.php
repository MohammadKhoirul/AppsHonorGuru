<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Guru_model extends CI_Model {
    function __construct() {
        parent::__construct();
    }
    
    function data_guru() {
        $query=$this->db->query("SELECT * FROM guru ORDER BY nama");
        return $query->result();
    }
    
    function tambah_data() {
        $nuptk = $this->input->post('nuptk'); 	  
        $nama = $this->input->post('nama'); 
        $jenis_kelamin = $this->input->post('jenis_kelamin');
        $lama_mengajar = $this->input->post('lama_mengajar'); 
        $umur = $this->input->post('umur'); 	  
        $alamat = $this->input->post('alamat');
        
        if($nuptk == null){
            redirect('guru');
        }
        
        $data = array ('nuptk' => $nuptk, 'nama'  => $nama, 'jenis_kelamin' => $jenis_kelamin, 'lama_mengajar' => $lama_mengajar, 'umur' => $umur, 'alamat'=> $alamat);
        $this->db->insert('guru',$data);
		
		$honor = 'Belum';
		$data2 = array ('nuptk' => $nuptk, 'honor'  => $honor);
		$this->db->insert('keterangan',$data2);
    }
    
    function edit_data($nuptk) {
        $nuptk = $this->input->post('nuptk'); 	  
        $nuptk_change = $this->input->post('nuptk_change');
        $nama  = $this->input->post('nama'); 
        $jenis_kelamin = $this->input->post('jenis_kelamin');
        $lama_mengajar = $this->input->post('lama_mengajar');  
        $umur = $this->input->post('umur'); 	  
        $alamat = $this->input->post('alamat');
        $data = array ('nuptk' => $nuptk_change, 'nama'  => $nama, 'jenis_kelamin' => $jenis_kelamin, 'lama_mengajar' => $lama_mengajar, 'umur' => $umur, 'alamat'=> $alamat);
        $this->db->where('nuptk',$nuptk);
        $this->db->update('guru',$data);
        
        $data2 = array ('nuptk' => $nuptk_change);
        $this->db->where('nuptk',$nuptk);
        $this->db->update('keterangan',$data2);
        
        $cek = $this->db->get('honor');
        if($cek->num_rows > 0) {
            $data3 = array ('nuptk' => $nuptk_change, 'nama' => $nama);
            $this->db->where('nuptk',$nuptk);
            $this->db->update('honor',$data3);
        }
    }
    
    function data_guru_perbaris($nuptk) {
        $query=$this->db->query("SELECT * FROM guru WHERE nuptk = '$nuptk'");
        return $query->row();
    }

}
?>