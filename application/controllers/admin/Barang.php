<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Barang extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->cek_auth_admin();
        $this->load->library('template');
        $this->load->model('admin/barang_m');
        $this->resized_path = realpath(APPPATH . '../img/barang_folder');
        $this->thumbs_path  = realpath(APPPATH . '../img/barang_folder/thumbs');
    }

    public function index()
    {
        $data['listKategori'] = $this->db->order_by('kategori_nama', 'asc')->get('presto_kategori')->result();
        $this->template->display('admin/barang/view', $data);
    }

    public function data_list()
    {
        $List = $this->barang_m->get_datatables();
        $data = array();
        $no   = $_POST['start'];
        foreach ($List as $r) {
            $no++;
            $row       = array();
            $barang_id = $r->barang_id;
            $link      = site_url('admin/barang/editdata/' . $barang_id);
            $row[]     = '<div class="d-inline-flex">
                            <a class="pe-1 dropdown-toggle hide-arrow text-primary" data-bs-toggle="dropdown" aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical font-small-4">
                                    <circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle>
                                </svg>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end" style="">
                                <a href="' . $link . '" class="dropdown-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit font-small-4 me-50"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                    </svg>Edit Data
                                </a>
                                <a href="javascript:;" onclick="hapusData(' . $barang_id . ')" class="dropdown-item delete-record">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 font-small-4 me-50"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line>
                                    </svg>Hapus Data
                                </a>
                            </div>
                            </div>';
            $row[] = $no;
            if ($r->barang_foto == '') {
                $foto = '<img src="' . base_url('img/no-image.png') . '" width="150px" height="100px">';
            } else {
                $foto = '<img src="' . base_url('img/barang_folder/thumbs/' . $r->barang_foto . '" width="100px">');
            }
            $row[]  = $foto;
            $row[]  = $r->barang_kode;
            $row[]  = $r->barang_nama;
            $row[]  = $r->kategori_nama;
            $row[]  = ($r->barang_tipe == 'S' ? '<span class="badge bg-success d-block">STOCK</span>' : '<span class="badge bg-danger d-block">NON STOCK</span>');
            $row[]  = number_format($r->barang_stok, 0, '', ',');
            $row[]  = number_format($r->barang_harga, 0, '', ',');
            $row[]  = number_format($r->barang_ppn, 2, '.', ',');
            $row[]  = number_format($r->barang_total, 0, '', ',');
            $data[] = $row;
        }

        $output = array(
            "draw"            => $_POST['draw'],
            "recordsTotal"    => $this->barang_m->count_all(),
            "recordsFiltered" => $this->barang_m->count_filtered(),
            "data"            => $data,
        );

        echo json_encode($output);
    }

    public function adddata()
    {
        $data['listKategori'] = $this->db->order_by('kategori_nama', 'asc')->get('presto_kategori')->result();
        $this->template->display('admin/barang/add', $data);
    }

    private function nama_exists($nama)
    {
        $this->db->where('barang_nama', $nama);
        $query = $this->db->get('presto_barang');
        if ($query->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function register_nama_exists()
    {
        if (array_key_exists('nama', $_POST)) {
            if ($this->nama_exists(stripHTMLtags($this->input->post('nama', 'true'))) == true) {
                echo json_encode(false);
            } else {
                echo json_encode(true);
            }
        }
    }

    public function savedata()
    {
        if (!empty($_FILES['foto']['name'])) {
            $jam                     = time();
            $nama                    = seo_title(stripHTMLtags($this->input->post('nama')));
            $config['file_name']     = 'Barang_' . $nama . '_' . $jam . '.jpg';
            $config['upload_path']   = './img/barang_folder/';
            $config['allowed_types'] = 'jpg|png|gif|jpeg';
            $config['overwrite']     = true;
            $config['max_size']      = 0;
            $config['width']         = 350;
            $config['height']        = 250;
            $this->load->library('upload');
            $this->upload->initialize($config);
            $configThumb                   = array();
            $configThumb['image_library']  = 'gd2';
            $configThumb['source_image']   = '';
            $configThumb['maintain_ratio'] = true;
            $configThumb['overwrite']      = true;
            $this->load->library('image_lib');
            if (!$this->upload->do_upload('foto')) {
                $response['status'] = 'error';
            } else {
                $upload      = $this->upload->do_upload('foto');
                $upload_data = $this->upload->data();
                $config      = array(
                    'file_name'      => $upload_data['file_name'],
                    'source_image'   => $upload_data['full_path'], //path to the uploaded image
                    'new_image'      => $this->resized_path, //path to
                    'maintain_ratio' => true,
                    'overwrite'      => true,
                    'width'          => 350,
                    'height'         => 250,
                );

                $this->image_lib->initialize($config);
                $this->image_lib->resize();

                $config = array(
                    'source_image'   => $upload_data['full_path'],
                    'new_image'      => $this->thumbs_path,
                    'maintain_ratio' => true,
                    'overwrite'      => true,
                    'width'          => 175,
                    'height'         => 125,
                );

                $this->image_lib->initialize($config);
                $this->image_lib->resize();

                $this->barang_m->insert_data();
                $response['status'] = 'success';
            }
        } else {
            $this->barang_m->insert_data();
            $response['status'] = 'success';
        }

        echo json_encode($response);
    }

    public function editdata($barang_id)
    {
        $data['listKategori'] = $this->db->order_by('kategori_nama', 'asc')->get('presto_kategori')->result();
        $data['detail']       = $this->db->get_where('presto_barang', array('barang_id' => $barang_id))->row();
        $this->template->display('admin/barang/edit', $data);
    }

    public function updatedata()
    {
        if (!empty($_FILES['foto']['name'])) {
            $jam                     = time();
            $nama                    = seo_title(stripHTMLtags($this->input->post('nama')));
            $config['file_name']     = 'Barang_' . $nama . '_' . $jam . '.jpg';
            $config['upload_path']   = './img/barang_folder/';
            $config['allowed_types'] = 'jpg|png|gif|jpeg';
            $config['overwrite']     = true;
            $config['max_size']      = 0;
            $config['width']         = 350;
            $config['height']        = 250;
            $this->load->library('upload');
            $this->upload->initialize($config);
            $configThumb                   = array();
            $configThumb['image_library']  = 'gd2';
            $configThumb['source_image']   = '';
            $configThumb['maintain_ratio'] = true;
            $configThumb['overwrite']      = true;
            $this->load->library('image_lib');
            if (!$this->upload->do_upload('foto')) {
                $response['status'] = 'error';
            } else {
                $upload      = $this->upload->do_upload('foto');
                $upload_data = $this->upload->data();
                $config      = array(
                    'file_name'      => $upload_data['file_name'],
                    'source_image'   => $upload_data['full_path'], //path to the uploaded image
                    'new_image'      => $this->resized_path, //path to
                    'maintain_ratio' => true,
                    'overwrite'      => true,
                    'width'          => 350,
                    'height'         => 250,
                );

                $this->image_lib->initialize($config);
                $this->image_lib->resize();

                $config = array(
                    'source_image'   => $upload_data['full_path'],
                    'new_image'      => $this->thumbs_path,
                    'maintain_ratio' => true,
                    'overwrite'      => true,
                    'width'          => 175,
                    'height'         => 125,
                );

                $this->image_lib->initialize($config);
                $this->image_lib->resize();

                $this->barang_m->update_data();
                $response['status'] = 'success';
            }
        } else {
            $this->barang_m->update_data();
            $response['status'] = 'success';
        }

        echo json_encode($response);
    }

    public function deletedata($id)
    {
        $this->barang_m->delete_data($id);
    }

    public function printdata($kategori = 'all', $tipe = 'all')
    {
        $data['header'] = $this->db->get_where('presto_contact', array('contact_id' => 1))->row();
        if ($kategori != 'all') {
            $data['listData'] = $this->db->order_by('kategori_nama', 'asc')->get_where('presto_kategori', array('kategori_id' => $kategori))->result();
        } else {
            $data['listData'] = $this->db->order_by('kategori_nama', 'asc')->get('presto_kategori')->result();
        }

        $this->load->view('admin/barang/printdata_v', $data);
    }
}
/* Location: ./application/controller/admin/Barang.php */
