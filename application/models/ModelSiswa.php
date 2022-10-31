<?php

defined('BASEPATH') or exit('No direct script access allowed');

class ModelSiswa extends CI_Model
{
    public function simpanData($data = null)
    {
        $this->db->insert('siswa', $data);
    }

    public function getSiswa()
    {
        $q = $this->db->get('siswa');
        $data = $q->result_array();
        return $data;
    }
}
