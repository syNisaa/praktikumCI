<?php
defined('BASEPATH') or exit('No direct script access allowed');

class prodi extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('modelprodi');
    }

    function index()
    {
        $data['prodi'] = $this->modelprodi->getprodi()->result();
        $this->load->view('prodi/index.php', $data);
        // echo $data;
    }

    function hapus($kode)
    {
        $hapus = array('kode' => $kode);
        $this->modelprodi->hapus($hapus, 'prodi');
        redirect('index.php/prodi');
    }

    public function tambah()
    {
        $this->load->view('prodi/create.php');
    }

    public function create()
    {
        $this->modelprodi->create();
        redirect('index.php/prodi');
    }

    function edit($kode)
    {
        $where = array('kode' => $kode);
        $data['prodi'] = $this->modelprodi->edit_data($where, 'prodi')->result();
        $this->load->view('prodi/edit.php', $data);
    }

    function update(){
        $kode = $this->input->post('kode');
        $nama = $this->input->post('nama');
        $kaprodi = $this->input->post('kaprodi');

     
        $data = array(
            'kode' => $kode,
            'nama' => $nama,
            'kaprodi' => $kaprodi
        );
     
        $where = array(
            'kode' => $kode
        );
     
        $this->modelprodi->update_data($where,$data,'prodi');
        redirect('index.php/prodi');
    }
}
