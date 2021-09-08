<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kategori extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->cek_auth_admin();
        $this->load->library('template');
        $this->load->model('admin/kategori_m');
    }

    public function index()
    {
        $this->template->display('admin/master/kategori_v');
    }

    public function data_list()
    {
        $List = $this->kategori_m->get_datatables();
        $data = array();
        $no   = $_POST['start'];

        foreach ($List as $r) {
            $no++;
            $row         = array();
            $kategori_id = $r->kategori_id;
            $row[]       = '<a href="javascript:;" title="Edit Data" onclick="edit_data(' . $kategori_id . ')">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit font-small-4 me-50"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                            </svg>
                          </a>
                          <a href="javascript:;" onclick="hapusData(' . $kategori_id . ')" title="Hapus Data">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-circle"><circle cx="12" cy="12" r="10"></circle><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
                          </a>';
            $row[]  = $no;
            $row[]  = $r->kategori_kode;
            $row[]  = $r->kategori_nama;
            $data[] = $row;
        }

        $output = array(
            "draw"            => $_POST['draw'],
            "recordsTotal"    => $this->kategori_m->count_all(),
            "recordsFiltered" => $this->kategori_m->count_filtered(),
            "data"            => $data,
        );

        echo json_encode($output);
    }

    private function kode_exists($kode)
    {
        $this->db->where('kategori_kode', $kode);
        $query = $this->db->get('presto_kategori');
        if ($query->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function register_kode_exists()
    {
        if (array_key_exists('kode', $_POST)) {
            if ($this->kode_exists(stripHTMLtags($this->input->post('kode', 'true'))) == true) {
                echo json_encode(false);
            } else {
                echo json_encode(true);
            }
        }
    }

    public function savedata()
    {
        $this->kategori_m->insert_data();
    }

    public function get_data($id)
    {
        $data = $this->db->get_where('presto_kategori', array('kategori_id' => $id))->row();
        echo json_encode($data);
    }

    public function updatedata()
    {
        $this->kategori_m->update_data();
    }

    public function deletedata($id)
    {
        $this->kategori_m->delete_data($id);
    }
}
/* Location: ./application/controller/admin/Kategori.php */
