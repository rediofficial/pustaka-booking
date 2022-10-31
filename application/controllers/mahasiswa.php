<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mahasiswa extends CI_Controller
{

    function index()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('mahasiswa/tambah');
        $this->load->view('templates/footer');
    }

    public function tampil()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('mahasiswa/TampilanData');
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data = [
            'nama_mhs' => htmlspecialchars($this->input->post('nama_mhs', true)),
            'nis' => htmlspecialchars($this->input->post('nis', true)),
            'kelas' => htmlspecialchars($this->input->post('kelas', true)),
            'tanggal_lahir' => htmlspecialchars($this->input->post('tanggal_lahir', true)),
            'alamat' => htmlspecialchars($this->input->post('alamat', true)),
            'jenis_kelamin' => htmlspecialchars($this->input->post('jenis_kelamin', true)),
            'agama' => htmlspecialchars($this->input->post('agama', true))
        ];

        $this->ModelSiswa->simpanData($data);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-message" role="alert">Berhasil Menambahkan Data Siswa</div>');
        redirect('mahasiswa/tampil');
    }
}
