<?php 
 
class modeldosen extends CI_Model{

    function getdosen(){
        return $this->db->get('dosen');
    }
    
    function hapus($hapus,$table){
        $this->db->where($hapus);
        $this->db->delete($table);
    } 

    public function create(){
        $data = array(
            'nidn'=>$this->input->post('nipd'),
            'nama'=>$this->input->post('nama'),
            'gender' => $this->input->post('gender'),
            'tmp_lahir' => $this->input->post('tmp_lahir'),
            'tgl_lahir' => $this->input->post('tgl_lahir'),
            'pendidikan_akhir' => $this->input->post('pendidikan_akhir'),
            'prodi_kode' => $this->input->post('kode_prodi'),
        );
        $this->db->insert('dosen', $data);
        header("location",base_url().'index.php/dosen');
    }

    function edit_data($where,$table){		
        return $this->db->get_where($table,$where);
    }

    function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	
}