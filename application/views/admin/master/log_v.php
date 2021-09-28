<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-start mb-0">Log Users</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?=site_url('admin/home');?>">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="#">Menu Users</a></li>
                                <li class="breadcrumb-item" active>Log Users</li>
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
                                <h4 class="card-title"><i data-feather='list'></i> Daftar Log Users</h4>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <button type="button" class="btn btn-gradient-warning" data-bs-toggle="modal" data-bs-target="#filterData"><i data-feather='filter'></i> Filter</button>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-datatable">
                                <table class="dt-responsive table table-hover-animation" id="tableData">
                                    <thead>
                                        <tr>
                                            <th width="5%">No</th>
                                            <th width="10%">Tanggal</th>
                                            <th width="15%">Nama Lengkap</th>
                                            <th width="15%">IP</th>
                                            <th>Agent</th>
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
            "url": "<?=site_url('admin/log/data_list');?>",
            "type": "POST",
            "data": function(data) {
                data.tgl_dari    = $('#tgl_dari').val();
                data.tgl_sampai  = $('#tgl_sampai').val();
            }
        },
        "columnDefs": [
            {
                "targets": [ 0 ],
                "orderable": false,
            },
            {
                "targets": [ 0, 1 ],
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
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="mb-1">
                                <label class="form-label">Periode dari</label>
                                <input type="text" class="form-control flatpickr-basic" name="tgl_dari" id="tgl_dari" autocomplete="off" value="<?=date('d-m-Y');?>">
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="mb-1">
                                <label class="form-label">Periode sampai</label>
                                <input type="text" class="form-control flatpickr-basic" name="tgl_sampai" id="tgl_sampai" autocomplete="off" value="<?=date('d-m-Y');?>">
                            </div>
                        </div>
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