<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mahasiswa extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('modelmahasiswa');
    }

    function index()
    {
        $data['mahasiswa'] = $this->modelmahasiswa->getmahasiswa()->result();
        $this->load->view('mahasiswa/index.php', $data);
        // echo $data;
    }

    function hapus($nim)
    {
        $hapus = array('nim' => $nim);
        $this->modelmahasiswa->hapus($hapus, 'mahasiswa');
        redirect('index.php/mahasiswa');
    }

    public function tambah()
    {
        $this->load->view('mahasiswa/create.php');
    }

    public function create()
    {
        $this->modelmahasiswa->create();
        redirect('index.php/mahasiswa');
    }

    function edit($nim)
    {
        $where = array('nim' => $nim);
        $data['mahasiswa'] = $this->modelmahasiswa->edit_data($where, 'mahasiswa')->result();
        $this->load->view('mahasiswa/edit.php', $data);
    }

    function update(){
        $nim = $this->input->post('nim');
        $nama = $this->input->post('nama');
        $gender = $this->input->post('gender');
        $tmp_lahir = $this->input->post('tmp_lahir');
        $tgl_lahir = $this->input->post('tgl_lahir');
        $ipk = $this->input->post('ipk');
        $prodi_kode = $this->input->post('kode_prodi');

     
        $data = array(
            'nim' =>$nim,
            'nama' => $nama,
            'gender' => $gender,
            'tmp_lahir' =>$tmp_lahir,
            'tgl_lahir' => $tgl_lahir,
            'ipk' => $ipk,
            'prodi_kode' => $prodi_kode
        );
     
        $where = array(
            'nim' => $nim
        );
     
        $this->modelmahasiswa->update_data($where,$data,'mahasiswa');
        redirect('index.php/mahasiswa');
    }
}
