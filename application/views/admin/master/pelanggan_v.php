<script src="<?=base_url('backend/app-assets/js/jquery.maskMoney.min.js');?>"></script>
<style type="text/css">
    .number, .digit {
        text-align: right;
    }
</style>
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-start mb-0">Pelanggan</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?=site_url('admin/home');?>">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="#">Data Master</a></li>
                                <li class="breadcrumb-item" active>Pelanggan</li>
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
                                <h4 class="card-title"><i data-feather='list'></i> Daftar Pelanggan</h4>
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
                                            <th width="10%">Nomor</th>
                                            <th width="20%">Nama Pelanggan</th>
                                            <th>Alamat</th>
                                            <th width="10%">Disc (%)</th>
                                            <th width="10%">Tgl. Expired</th>
                                            <th width="5%">Poin</th>
                                            <th width="5%">Default</th>
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
$(document).ready(function() {
    $('.number').maskMoney({thousands:',', precision:0});
    $('.digit').maskMoney({thousands:'', precision:2});
});

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
            "url": "<?=site_url('admin/pelanggan/data_list');?>",
            "type": "POST"
        },
        "columnDefs": [
            {
                "targets": [ 0, 1 ],
                "orderable": false,
            },
            {
                "targets": [ 1, 6, 8 ],
                "className": "text-center",
            },
            {
                "targets": [ 5, 7 ],
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
});

$(document).ready(function() {
    $( "#formInput" ).validate({
        rules: {
            nomor: { required: true,
                remote: {
                    url: "<?=site_url('admin/pelanggan/register_nomor_exists'); ?>",
                    type: "post",
                    data: {
                        nomor: function() { 
                            return $("#nomor").val(); 
                        }
                    }
                }
            },
            nama: { required: true },
            alamat: { required: true },
            kota: { required: true },
            telp: { required: true },
            lstStatus: { required: true }
        },
        messages: {
            nomor: { required :'Nomor ID required', remote:'Nomor ID sudah Ada' },
            nama: { required :'Nama Pelanggan required' },
            alamat: { required :'Alamat required' },
            kota: { required :'Kota required' },
            telp: { required :'No. Telp required' },
            lstStatus: { required :'Status required' }
        },
        submitHandler: function (form) {
            dataString = $('#formInput').serialize();
            $.ajax({
                url: "<?=site_url('admin/pelanggan/savedata');?>",
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
    $("#nomor").val('');
    $("#nama").val('');
    $("#alamat").val('');
    $("#kota").val('');
    $("#telp").val('');
    $("#disc").val('');
    $("#tgl_expired").val('');
    $("#lstStatus").val('');

    var MValid = $("#formInput");
    MValid.validate().resetForm();
}

function edit_data(id) {
    $('#formEdit')[0].reset();
    $.ajax({
        url : "<?=site_url('admin/pelanggan/get_data/');?>"+id,
        type: "GET",
        dataType: "JSON",
        success: function(data) {
            var locale      = 'en';
            var options     = {minimumFractionDigits: 2, maximumFractionDigits: 2};
            var formatter   = new Intl.NumberFormat(locale, options);
            $('#id').val(data.pelanggan_id);
            $('#pelanggan_nomor').val(data.pelanggan_nomor);
            $('#pelanggan_nama').val(data.pelanggan_nama);
            $('#pelanggan_alamat').val(data.pelanggan_alamat);
            $('#pelanggan_kota').val(data.pelanggan_kota);
            $('#pelanggan_telp').val(data.pelanggan_telp);
            $('#pelanggan_disc').val(formatter.format(data.pelanggan_disc));
            if (data.pelanggan_expired != '1970-01-01') {
                $('#pelanggan_expired').val(data.pelanggan_expired.split("-").reverse().join("-"));
            } else {
                $('#pelanggan_expired').val('');
            }
            $('#pelanggan_status').val(data.pelanggan_status);
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
            nomor: { required: true },
            nama: { required: true },
            alamat: { required: true },
            kota: { required: true },
            telp: { required: true },
            lstStatus: { required: true }
        },
        messages: {
            nomor: { required :'Nomor ID required' },
            nama: { required :'Nama Pelanggan required' },
            alamat: { required :'Alamat required' },
            kota: { required :'Kota required' },
            telp: { required :'No. Telp required' },
            lstStatus: { required :'Status required' }
        },
        submitHandler: function (form) {
            dataString = $('#formEdit').serialize();
            $.ajax({
                url: "<?=site_url('admin/pelanggan/updatedata');?>",
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

function hapusData(pelanggan_id) {
    var id = pelanggan_id;
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
                url : "<?=site_url('admin/pelanggan/deletedata')?>/"+id,
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
                    <label class="mb-1">Nomor ID Member</label>
                    <div class="mb-1">
                        <input type="text" class="form-control col-md-6" placeholder="Input Nomor ID Member" name="nomor" id="nomor" autocomplete="off">
                    </div>
                    <label class="mb-1">Nama Pelanggan</label>
                    <div class="mb-1">
                        <input type="text" class="form-control" placeholder="Input Nama Pelanggan" name="nama" id="nama" autocomplete="off">
                    </div>
                    <label class="mb-1">Alamat</label>
                    <div class="mb-1">
                        <input type="text" class="form-control" placeholder="Input Alamat" name="alamat" id="alamat" autocomplete="off">
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label class="mb-1">Kota</label>
                            <div class="mb-1">
                                <input type="text" class="form-control" placeholder="Input Kota" name="kota" id="kota" autocomplete="off">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label class="mb-1">No. Telp</label>
                            <div class="mb-1">
                                <input type="text" class="form-control" placeholder="Input No. Telp" name="telp" id="telp" autocomplete="off">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label class="mb-1">Disc (%)</label>
                            <div class="mb-1">
                                <input type="text" class="form-control digit" placeholder="0.00" name="disc" id="disc" autocomplete="off">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label class="mb-1">Tgl. Expired</label>
                            <div class="mb-1">
                                <input type="text" class="form-control flatpickr-basic" placeholder="DD-MM-YYYY" name="tgl_expired" id="tgl_expired" autocomplete="off">
                            </div>
                        </div>
                    </div>
                    <label class="mb-1">Default ?</label>
                    <div class="mb-1">
                        <select class="form-select" name="lstStatus" id="lstStatus">
                            <option value="">- Pilih Status -</option>
                            <option value="Y">Ya</option>
                            <option value="T">Tidak</option>
                        </select>
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
                    <label class="mb-1">Nomor ID Member</label>
                    <div class="mb-1">
                        <input type="text" class="form-control col-md-6" placeholder="Input Nomor ID Member" name="nomor" id="pelanggan_nomor" autocomplete="off">
                    </div>
                    <label class="mb-1">Nama Pelanggan</label>
                    <div class="mb-1">
                        <input type="text" class="form-control" placeholder="Input Nama Pelanggan" name="nama" id="pelanggan_nama" autocomplete="off">
                    </div>
                    <label class="mb-1">Alamat</label>
                    <div class="mb-1">
                        <input type="text" class="form-control" placeholder="Input Alamat" name="alamat" id="pelanggan_alamat" autocomplete="off">
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label class="mb-1">Kota</label>
                            <div class="mb-1">
                                <input type="text" class="form-control" placeholder="Input Kota" name="kota" id="pelanggan_kota" autocomplete="off">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label class="mb-1">No. Telp</label>
                            <div class="mb-1">
                                <input type="text" class="form-control" placeholder="Input No. Telp" name="telp" id="pelanggan_telp" autocomplete="off">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label class="mb-1">Disc (%)</label>
                            <div class="mb-1">
                                <input type="text" class="form-control digit" placeholder="0.00" name="disc" id="pelanggan_disc" autocomplete="off">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label class="mb-1">Tgl. Expired</label>
                            <div class="mb-1">
                                <input type="text" class="form-control flatpickr-basic" placeholder="DD-MM-YYYY" name="tgl_expired" id="pelanggan_expired" autocomplete="off">
                            </div>
                        </div>
                    </div>
                    <label class="mb-1">Default ?</label>
                    <div class="mb-1">
                        <select class="form-select" name="lstStatus" id="pelanggan_status">
                            <option value="">- Pilih Status -</option>
                            <option value="Y">Ya</option>
                            <option value="T">Tidak</option>
                        </select>
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