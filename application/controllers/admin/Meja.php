<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Meja extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->cek_auth_admin();
        $this->load->library('template');
        $this->load->model('admin/meja_m');
    }

    public function index()
    {
        $this->template->display('admin/master/meja_v');
    }

    public function data_list()
    {
        $List = $this->meja_m->get_datatables();
        $data = array();
        $no   = $_POST['start'];

        foreach ($List as $r) {
            $no++;
            $row     = array();
            $meja_id = $r->meja_id;
            $row[]   = '<a href="javascript:;" title="Edit Data" onclick="edit_data(' . $meja_id . ')">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit font-small-4 me-50"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                            </svg>
                          </a>
                          <a href="javascript:;" onclick="hapusData(' . $meja_id . ')" title="Hapus Data">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-circle"><circle cx="12" cy="12" r="10"></circle><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
                          </a>';
            $row[]  = $no;
            $row[]  = $r->meja_nama;
            $data[] = $row;
        }

        $output = array(
            "draw"            => $_POST['draw'],
            "recordsTotal"    => $this->meja_m->count_all(),
            "recordsFiltered" => $this->meja_m->count_filtered(),
            "data"            => $data,
        );

        echo json_encode($output);
    }

    public function savedata()
    {
        $this->meja_m->insert_data();
    }

    public function get_data($id)
    {
        $data = $this->db->get_where('presto_meja', array('meja_id' => $id))->row();
        echo json_encode($data);
    }

    public function updatedata()
    {
        $this->meja_m->update_data();
    }

    public function deletedata($id)
    {
        $this->meja_m->delete_data($id);
    }
}
/* Location: ./application/controller/admin/Meja.php */
