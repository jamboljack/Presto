<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('template_login');
        $this->load->model('login_m');
    }

    public function index()
    {
        $session = $this->session->userdata('logged_in_presto');
        if ($session == false) {
            $this->template_login->display('admin/login_v');
        } else {
            redirect(site_url('admin/home'));
        }
    }

    public function validasi()
    {
        $username     = trim(stripHTMLtags($this->input->post('username', 'true')));
        $password     = trim(stripHTMLtags($this->input->post('password', 'true')));
        $temp_account = $this->login_m->check_user_account($username, sha1($password));
        $num_rows     = $temp_account->num_rows();
        if ($num_rows > 0) {
            $account    = $temp_account->row();
            $array_item = array(
                'username'         => trim($account->user_username),
                'nama'             => strtoupper(trim($account->user_nama)),
                'avatar'           => $account->user_avatar,
                'level'            => $account->user_level,
                'logged_in_presto' => true,
            );

            $this->session->set_userdata($array_item);

            // Insert ke Log
            $this->load->library('user_agent');
            if ($this->agent->is_browser()) {
                $agent = $this->agent->browser() . ' ' . $this->agent->version();
            } elseif ($this->agent->is_robot()) {
                $agent = $this->agent->robot();
            } elseif ($this->agent->is_mobile()) {
                $agent = $this->agent->mobile();
            } else {
                $agent = 'Unidentified User Agent';
            }

            $dataLog = array(
                'log_user'  => $username,
                'log_date'  => date('Y-m-d H:i:s'),
                'log_agent' => $agent,
                'log_ip'    => $this->input->ip_address(),
            );

            $this->db->insert('presto_log', $dataLog);

            $response = ['status' => 'success'];
        } else {
            $response = ['status' => 'failed', 'msg' => 'Maaf! Password Anda Salah.'];
        }

        echo json_encode($response);
    }

    private function login_exists($username)
    {
        $this->db->where('user_username', $username);
        $this->db->where('user_status', 'Aktif');
        $query = $this->db->get('presto_users');
        if ($query->num_rows() > 0) {
            return false;
        } else {
            return true;
        }
    }

    public function check_login_exists()
    {
        if (array_key_exists('username', $_POST)) {
            if ($this->login_exists(stripHTMLtags($this->input->post('username', 'true'))) == true) {
                echo json_encode(false);
            } else {
                echo json_encode(true);
            }
        }
    }

    public function logout()
    {
        $this->output->set_header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . 'GMT');
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-chace');
        $this->session->sess_destroy();
        redirect(base_url());
    }
}

/* Location: ./application/controller/Login.php */
