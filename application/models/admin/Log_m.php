<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Log_m extends CI_Model
{
    public $table         = 'v_log';
    public $column_order  = array(null, 'log_date', 'user_nama', 'log_ip', 'log_agent');
    public $column_search = array('user_nama', 'log_date', 'log_ip', 'log_agent');
    public $order         = array('log_date' => 'desc');

    public function __construct()
    {
        parent::__construct();
    }

    private function _get_datatables_query()
    {
        if ($this->input->post('tgl_dari', 'true')) {
            $dari = date('Y-m-d', strtotime($this->input->post('tgl_dari', 'true')));
            $this->db->where('DATE(log_date) >=', $dari);
        }
        if ($this->input->post('tgl_sampai', 'true')) {
            $sampai = date('Y-m-d', strtotime($this->input->post('tgl_sampai', 'true')));
            $this->db->where('DATE(log_date) <=', $sampai);
        }

        $this->db->from($this->table);

        $i = 0;
        foreach ($this->column_search as $item) {
            if ($_POST['search']['value']) {
                if ($i === 0) {
                    $this->db->group_start();
                    $this->db->like($item, $_POST['search']['value']);
                } else {
                    $this->db->or_like($item, $_POST['search']['value']);
                }

                if (count($this->column_search) - 1 == $i) {
                    $this->db->group_end();
                }
            }
            $i++;
        }

        if (isset($_POST['order'])) {
            $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } else if (isset($this->order)) {
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }

    public function get_datatables()
    {
        $this->_get_datatables_query();
        if ($_POST['length'] != -1) {
            $this->db->limit($_POST['length'], $_POST['start']);
        }

        $query = $this->db->get();
        return $query->result();
    }

    public function count_filtered()
    {
        $this->_get_datatables_query();
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function count_all()
    {
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }
}
/* Location: ./application/model/admin/Log_m.php */
