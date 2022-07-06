<?php 
 
class modelmahasiswa extends CI_Model{

    function getmahasiswa(){
        return $this->db->get('mahasiswa');
    }
    
    function hapus($hapus,$table){
        $this->db->where($hapus);
        $this->db->delete($table);
    } 

    public function create(){
        $data = array(
            'nim'=>$this->input->post('nim'),
            'nama'=>$this->input->post('nama'),
            'gender' => $this->input->post('gender'),
            'tmp_lahir' => $this->input->post('tmp_lahir'),
            'tgl_lahir' => $this->input->post('tgl_lahir'),
            'ipk' => $this->input->post('ipk'),
            'prodi_kode' => $this->input->post('kode_prodi'),
        );
        $this->db->insert('mahasiswa', $data);
        header("location",base_url().'index.php/mahasiswa');
    }

    function edit_data($where,$table){		
        return $this->db->get_where($table,$where);
    }

    function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	
}