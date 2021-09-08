<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->cek_auth_admin();
        $this->load->library('template');
    }

    public function index()
    {
        $this->template->display('admin/home_v');
    }
}
/* Location: ./application/controller/admin/Home.php */
