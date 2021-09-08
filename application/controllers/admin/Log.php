<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Log extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->cek_auth_admin();
        $this->load->library('template');
        $this->load->model('admin/log_m');
    }

    public function index()
    {
        $this->template->display('admin/master/log_v');
    }

    public function data_list()
    {
        $List = $this->log_m->get_datatables();
        $data = array();
        $no   = $_POST['start'];

        foreach ($List as $r) {
            $no++;
            $row    = array();
            $row[]  = $no;
            $row[]  = date('d-m-Y H:i:s', strtotime($r->log_date));
            $row[]  = $r->user_nama;
            $row[]  = $r->log_ip;
            $row[]  = $r->log_agent;
            $data[] = $row;
        }

        $output = array(
            "draw"            => $_POST['draw'],
            "recordsTotal"    => $this->log_m->count_all(),
            "recordsFiltered" => $this->log_m->count_filtered(),
            "data"            => $data,
        );

        echo json_encode($output);
    }
}
/* Location: ./application/controller/admin/Log.php */
