<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Latihan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        echo "Selamat Belajar Web Programing II";
    }
    public function penjumlahan($n1, $n2)
    {
        $this->load->model('Model_latihan1');
        $data['nilai1'] = $n1;
        $data['nilai2'] = $n2;
        $data['hasil'] = $this->Model_latihan1->jumlah($n1 + $n2);
        $this->load->view('view_latihan', $data);
    }
}
