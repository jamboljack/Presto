<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-start mb-0">Barang</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?=site_url('admin/home');?>">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="#">Data Barang</a></li>
                                <li class="breadcrumb-item" active>Barang</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <section id="responsive-datatable">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header border-bottom">
                                <h4 class="card-title"><i data-feather='list'></i> Daftar Barang</h4>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <button type="button" class="btn btn-gradient-warning" data-bs-toggle="modal" data-bs-target="#filterData"><i data-feather='filter'></i> Filter</button>
                                        <a class="btn btn-gradient-primary" href="<?=site_url('admin/barang/adddata');?>" role="button"><i data-feather='plus-circle'></i> Tambah</a>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-datatable">
                                <table class="dt-responsive table" id="tableData">
                                    <thead>
                                        <tr>
                                            <th width="3%">Aksi</th>
                                            <th width="5%">No</th>
                                            <th width="10%">Foto</th>
                                            <th width="5%">Kode</th>
                                            <th>Nama Barang</th>
                                            <th width="15%">Kategori</th>
                                            <th width="8%">Tipe</th>
                                            <th width="5%">Stok</th>
                                            <th width="10%">Harga Pokok</th>
                                            <th width="5%">PPN</th>
                                            <th width="10%">Harga Jual</th>
                                        </tr>    
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>

<script type="text/javascript">
function reload_table() {
    table.ajax.reload(null,false);
}

var table;
$(document).ready(function() {
    table = $('#tableData').DataTable({
        "responsive": true,
        "processing": false,
        "serverSide": true,
        "order": [],
        "ajax": {
            "url": "<?=site_url('admin/barang/data_list');?>",
            "type": "POST",
            "data": function(data) {
                data.lstKategori = $('#lstKategori').val();
                data.lstTipe     = $('#lstTipe').val();
            }
        },
        "columnDefs": [
            {
                "targets": [ 0, 1, 2 ],
                "orderable": false,
            },
            {
                "targets": [ 1, 2, 6 ],
                "className": "text-center",
            },
            {
                "targets": [ 7, 8, 9, 10 ],
                "className": "text-right",
            }
        ],
        dom: '<"d-flex justify-content-between align-items-center mx-0 row"<"col-sm-12 col-md-6"l><"col-sm-12 col-md-6"f>>t<"d-flex justify-content-between mx-0 row"<"col-sm-12 col-md-6"i><"col-sm-12 col-md-6"p>>',
        language: {
            paginate: {
                previous: '&nbsp;',
                next: '&nbsp;'
            }
        }
    });

    $('#btn-filter').click(function() {
        reload_table();
        $('#filterData').modal('hide');
    });

    $('#btn-reset').click(function() {
        $('#form-filter')[0].reset();
        reload_table();
        $('#filterData').modal('hide');
    });
});

function hapusData(barang_id) {
    var id = barang_id;
    Swal.fire({
        title: 'Anda Yakin ?',
        text: "Data ini akan di Hapus.",
        icon: 'warning',
        showCancelButton: true,
        cancelButtonText: 'Tidak',
        confirmButtonText: 'Ya, Hapus',
        customClass: {
            confirmButton: 'btn btn-success',
            cancelButton: 'btn btn-outline-danger ms-1'
        },
        buttonsStyling: false
    }).then(function (result) {
        if (result.value) {
            $.ajax({
                url : "<?=site_url('admin/barang/deletedata')?>/"+id,
                type: "POST",
                success: function(data) {
                    toastr.success('Hapus Data Berhasil', 'Sukses', {
                        closeButton: true,
                        tapToDismiss: false
                    });
                    reload_table();
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    toastr.error('Error Hapus Data', 'Error', {
                        closeButton: true,
                        tapToDismiss: false
                    });
                }
            });
        }
    });
}
</script>

<div class="modal fade text-start modal-warning" id="filterData" tabindex="-1" aria-labelledby="filterData" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><i data-feather='filter'></i> Filter Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="form-filter">
                <div class="modal-body">
                    <label class="mb-1">Kategori</label>
                    <div class="mb-1">
                        <select class="form-select" name="lstKategori" id="lstKategori">
                            <option value="">- SEMUA DATA -</option>
                            <?php foreach ($listKategori as $r) { ?>
                            <option value="<?=$r->kategori_id;?>"><?=$r->kategori_nama;?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <label class="mb-1">Tipe</label>
                    <div class="mb-1">
                        <select class="form-select" name="lstTipe" id="lstTipe">
                            <option value="">- SEMUA DATA -</option>
                            <option value="S">STOCK</option>
                            <option value="N">NON STOCK</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-gradient-warning" id="btn-filter"><i data-feather='filter'></i> Filter</button>
                    <button type="button" class="btn btn-gradient-danger" id="btn-reset"><i data-feather='refresh-ccw'></i> Reset</button>
                </div>
            </form>
        </div>
    </div>
</div>