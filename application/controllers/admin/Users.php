<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->cek_auth_admin();
        $this->load->library('template');
        $this->load->model('admin/users_m');
    }

    public function index()
    {
        $this->template->display('admin/users/view');
    }

    public function data_list()
    {
        $List = $this->users_m->get_datatables();
        $data = array();
        $no   = $_POST['start'];

        foreach ($List as $r) {
            $no++;
            $row   = array();
            $link  = site_url('admin/users/editdata/' . $r->user_username);
            $row[] = '<a href="' . $link . '" title="Edit Data">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit font-small-4 me-50"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                        </svg>
                    </a>';
            $row[] = $no;
            $row[] = $r->user_username;
            $row[] = $r->user_nama;
            if ($r->user_level == 'Admin') {
                $level = '<span class="badge bg-success d-block">ADMIN</span>';
            } else {
                $level = '<span class="badge bg-primary d-block">KASIR</span>';
            }
            $row[] = $level;
            if ($r->user_status == 'Aktif') {
                $row[] = '<span class="badge bg-success d-block">AKTIF</span>';
            } else {
                $row[] = '<span class="badge bg-danger d-block">TIDAK AKTIF</span>';
            }
            $data[] = $row;
        }

        $output = array(
            "draw"            => $_POST['draw'],
            "recordsTotal"    => $this->users_m->count_all(),
            "recordsFiltered" => $this->users_m->count_filtered(),
            "data"            => $data,
        );

        echo json_encode($output);
    }

    public function adddata()
    {
        $this->template->display('admin/users/add');
    }

    private function user_exists($username)
    {
        $this->db->where('user_username', $username);
        $query = $this->db->get('whats_users');
        if ($query->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function register_user_exists()
    {
        if (array_key_exists('username', $_POST)) {
            if ($this->user_exists(stripHTMLtags($this->input->post('username', 'true'))) == true) {
                echo json_encode(false);
            } else {
                echo json_encode(true);
            }
        }
    }

    public function savedata()
    {
        $this->users_m->insert_data();
    }

    public function editdata($user_username)
    {
        $data['detail'] = $this->users_m->select_by_id($user_username)->row();
        $this->template->display('admin/users/edit', $data);
    }

    public function updatedata()
    {
        $this->users_m->update_data();
    }
}
/* Location: ./application/controller/admin/Users.php */
