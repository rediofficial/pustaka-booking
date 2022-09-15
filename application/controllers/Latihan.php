<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Latihan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        //Codeigniter : Write Less Do More
    }

    function index()
    {
        echo "Selamat Belajar Web Programing II";
    }
}
