<?php
defined('BASEPATH') or exit('No direct script access allowed');
class ModelUser extends CI_Model
{

    public function simpanData($data = null)
    {
        $this->pustaka->insert('user', $data);
    }
    public function cekData($where = null)
    {
        return $this->pustaka->get_where('user', $where);
    }
    public function getUserWhere($where = null)
    {
        return $this->pustaka->get_where('user', $where);
    }
    public function cekUserAccess($where = null)
    {
        $this->pustaka->select('*');
        $this->pustaka->from('access_menu');
        $this->pustaka->where($where);
        return $this->pustaka->get();
    }
    public function getUserLimit()
    {
        $this->pustaka->select('*');
        $this->pustaka->from('user');
        $this->pustaka->limit(10, 0);
        return $this->pustaka->get();
    }
}
