<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mahasiswa extends CI_Controller
{

    function index()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('mahasiswa/tambah');
        $this->load->view('templates/footer');
    }

    public function siswa()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('mahasiswa/TampilData');
        $this->load->view('templates/footer');
    }

    function html_escape($text): string
    {
        $text = $text ?? '';  // If the value passed into function is null set $text to a blank string
        return htmlspecialchars($text, ENT_QUOTES, 'UTF-8', false); // Return escaped string
    }

    public function tambah()
    {
        $data = [
            'nama' => htmlspecialchars($this->input->post('nama', true)),
            'nis' => htmlspecialchars($this->input->post('nis', true)),
            'kelas' => htmlspecialchars($this->input->post('kelas', true)),
            'tanggal_lahir' => htmlspecialchars($this->input->post('tanggal_lahir', true)),
            'alamat' => htmlspecialchars($this->input->post('alamat', true)),
            'jenis_kelamin' => htmlspecialchars($this->input->post('jenis_kelamin', true)),
            'agama' => htmlspecialchars($this->input->post('agama', true))
        ];

        $this->ModelSiswa->simpanData($data);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-message" role="alert">Berhasil Menambahkan Data Siswa</div>');
        redirect('mahasiswa/siswa');
    }
}
