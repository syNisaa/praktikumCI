<?php
defined('BASEPATH') or exit('No direct script access allowed');

class dosen extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('modeldosen');
    }

    function index()
    {
        $data['dosen'] = $this->modeldosen->getdosen()->result();
        $this->load->view('dosen/index.php', $data);
        // echo $data;
    }

    function hapus($nidn)
    {
        $hapus = array('nidn' => $nidn);
        $this->modeldosen->hapus($hapus, 'dosen');
        redirect('index.php/dosen');
    }

    public function tambah()
    {
        $this->load->view('dosen/create.php');
    }

    public function create()
    {
        $this->modeldosen->create();
        redirect('index.php/dosen');
    }

    function edit($nidn)
    {
        $where = array('nidn' => $nidn);
        $data['dosen'] = $this->modeldosen->edit_data($where, 'dosen')->result();
        $this->load->view('dosen/edit.php', $data);
    }

    function update()
    {
        $nidn = $this->input->post('nipd');
        $nama = $this->input->post('nama');
        $gender = $this->input->post('gender');
        $tmp_lahir = $this->input->post('tmp_lahir');
        $tgl_lahir = $this->input->post('tgl_lahir');
        $pendidikan_akhir = $this->input->post('pendidikan_akhir');
        $prodi_kode = $this->input->post('kode_prodi');


        $data = array(
            'nidn' =>$nidn,
            'nama' => $nama,
            'gender' => $gender,
            'tmp_lahir' =>$tmp_lahir,
            'tgl_lahir' => $tgl_lahir,
            'pendidikan_akhir' => $pendidikan_akhir,
            'prodi_kode' => $prodi_kode
        );

        $where = array(
            'nidn' => $nidn
        );

        $this->modeldosen->update_data($where, $data, 'dosen');
        redirect('index.php/dosen');
    }
}
