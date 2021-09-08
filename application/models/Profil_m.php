<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profil_m extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function update_data()
    {
        $username = $this->session->userdata('username');
        if (!empty($_FILES['foto']['name'])) {
            $dataUser = array(
                'user_nama'        => strtoupper(stripHTMLtags($this->input->post('nama', 'true'))),
                'user_avatar'      => $this->upload->file_name,
                'user_date_update' => date('Y-m-d H:i:s'),
            );
        } else {
            $dataUser = array(
                'user_nama'        => strtoupper(stripHTMLtags($this->input->post('nama', 'true'))),
                'user_date_update' => date('Y-m-d H:i:s'),
            );
        }

        $this->db->where('user_username', $username);
        $this->db->update('presto_users', $dataUser);
    }

    public function update_password()
    {
        $user_username = $this->session->userdata('username');
        $password      = trim($this->input->post('newpassword', 'true'));
        $data          = array(
            'user_password'    => sha1($password),
            'user_date_update' => date('Y-m-d H:i:s'),
        );

        $this->db->where('user_username', $user_username);
        $this->db->update('presto_users', $data);
    }
}
/* Location: ./application/model/admin/Profil_m.php */
