<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-start mb-0">Kategori</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?=site_url('admin/home');?>">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="#">Data Barang</a></li>
                                <li class="breadcrumb-item" active>Kategori</li>
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
                                <h4 class="card-title"><i data-feather='list'></i> Daftar Kategori</h4>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <button type="button" class="btn btn-gradient-primary" data-bs-toggle="modal" data-bs-target="#formModalAdd"><i data-feather='plus-circle'></i> Tambah</button>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-datatable">
                                <table class="dt-responsive table table-hover-animation" id="tableData" width="100%">
                                    <thead>
                                        <tr>
                                            <th width="6%">Aksi</th>
                                            <th width="5%">No</th>
                                            <th width="5%">Kode</th>
                                            <th>Nama Kategori</th>
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
            "url": "<?=site_url('admin/kategori/data_list');?>",
            "type": "POST"
        },
        "columnDefs": [
            {
                "targets": [ 0, 1 ],
                "orderable": false,
            },
            {
                "targets": [ 1 ],
                "className": "text-center",
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
});

$(document).ready(function() {
    $( "#formInput" ).validate({
        rules: {
            kode: {
                required: true,
                remote: {
                    url: "<?=site_url('admin/kategori/register_kode_exists');?>",
                    type: "post",
                    data: {
                        kode: function() {
                            return $("#kode").val();
                        }
                    }
                }
            },
            nama: { required: true }
        },
        messages: {
            kode: { required :'Kode required', remote:'Kode sudah Ada' },
            nama: { required :'Nama Kategori required' }
        },
        submitHandler: function (form) {
            dataString = $('#formInput').serialize();
            $.ajax({
                url: "<?=site_url('admin/kategori/savedata');?>",
                type: "POST",
                data: dataString,
                success: function(data) {
                    toastr.success('Simpan Data Berhasil', 'Sukses', {
                        closeButton: true,
                        tapToDismiss: false
                    });
                    $('#formModalAdd').modal('hide');
                    resetformInput();
                    reload_table();
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    toastr.error('Error Simpan Data', 'Error', {
                        closeButton: true,
                        tapToDismiss: false
                    });
                    $('#formModalAdd').modal('hide');
                }
            });
        }
    });
});

function resetformInput() {
    $("#kode").val('');
    $("#nama").val('');

    var MValid = $("#formInput");
    MValid.validate().resetForm();
}

function edit_data(id) {
    $('#formEdit')[0].reset();
    $.ajax({
        url : "<?=site_url('admin/kategori/get_data/');?>"+id,
        type: "GET",
        dataType: "JSON",
        success: function(data) {
            $('#id').val(data.kategori_id);
            $('#kategori_kode').val(data.kategori_kode);
            $('#kategori_nama').val(data.kategori_nama);
            $('#formModalEdit').modal('show');
        },
        error: function (jqXHR, textStatus, errorThrown) {
            alert('Error get data from ajax');
        }
    });
}

$(document).ready(function() {
    $( "#formEdit" ).validate({
        rules: {
            nama: { required: true }
        },
        messages: {
            nama: { required :'Nama Kategori required' }
        },
        submitHandler: function (form) {
            dataString = $('#formEdit').serialize();
            $.ajax({
                url: "<?=site_url('admin/kategori/updatedata');?>",
                type: "POST",
                data: dataString,
                success: function(data) {
                    toastr.success('Update Data Berhasil', 'Sukses', {
                        closeButton: true,
                        tapToDismiss: false
                    });
                    $('#formModalEdit').modal('hide');
                    reload_table();
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    toastr.error('Error Update Data', 'Error', {
                        closeButton: true,
                        tapToDismiss: false
                    });
                    $('#formModalEdit').modal('hide');
                }
            });
        }
    });
});

function hapusData(kategori_id) {
    var id = kategori_id;
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
                url : "<?=site_url('admin/kategori/deletedata')?>/"+id,
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

<div class="modal fade text-start modal-primary" id="formModalAdd" tabindex="-1" aria-labelledby="formModalAdd" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><i data-feather='plus-circle'></i> Form Tambah Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="formInput" name="formInput" method="post" class="form form-horizontal">
                <div class="modal-body">
                    <label class="mb-1">Kode</label>
                    <div class="mb-1 col-md-3">
                        <input type="text" class="form-control" maxlength="1" placeholder="Input Kode" name="kode" id="kode" autocomplete="off">
                    </div>
                    <label class="mb-1">Nama Kategori</label>
                    <div class="mb-1">
                        <input type="text" class="form-control" placeholder="Input Nama Kategori" name="nama" id="nama" autocomplete="off">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-gradient-primary"><i data-feather='save'></i> Simpan</button>
                    <button type="button" class="btn btn-gradient-warning" data-bs-dismiss="modal"><i data-feather='x'></i> Batal</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade text-start modal-primary" id="formModalEdit" tabindex="-1" aria-labelledby="formModalEdit" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><i data-feather='edit'></i> Form Edit Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="formEdit" name="formEdit" method="post" class="form form-horizontal">
            <input type="hidden" name="id" id="id">
                <div class="modal-body">
                    <label class="mb-1">Kode</label>
                    <div class="mb-1 col-md-3">
                        <input type="text" class="form-control" maxlength="1" placeholder="Input Kode" name="kode" id="kategori_kode" readonly>
                    </div>
                    <label class="mb-1">Nama Kategori</label>
                    <div class="mb-1">
                        <input type="text" class="form-control" placeholder="Input Nama Kategori" name="nama" id="kategori_nama" autocomplete="off">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-gradient-primary"><i data-feather='save'></i> Update</button>
                    <button type="button" class="btn btn-gradient-warning" data-bs-dismiss="modal"><i data-feather='x'></i> Batal</button>
                </div>
            </form>
        </div>
    </div>
</div>