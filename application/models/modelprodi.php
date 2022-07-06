<?php 
 
class modelprodi extends CI_Model{

    function getprodi(){
        return $this->db->get('prodi');
    }
    
    function hapus($hapus,$table){
        $this->db->where($hapus);
        $this->db->delete($table);
    } 

    public function create(){
        $data = array(
            'kode'=>$this->input->post('kode'),
            'nama'=>$this->input->post('nama'),
            'kaprodi'=>$this->input->post('kaprodi')
        );
        $this->db->insert('prodi', $data);
        header("location",base_url().'index.php/prodi');
    }

    function edit_data($where,$table){		
        return $this->db->get_where($table,$where);
    }

    function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	
}