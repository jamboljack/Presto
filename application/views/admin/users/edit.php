<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-start mb-0">Users</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?=site_url('admin/home');?>">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="#">Menu Users</a></li>
                                <li class="breadcrumb-item"><a href="<?=site_url('admin/users');?>">Users</a></li>
                                <li class="breadcrumb-item" active>Edit Data</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <section id="card-actions">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header border-bottom">
                                <h4 class="card-title"><i data-feather='edit'></i> Form Edit Data</h4>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <a class="btn btn-gradient-warning" href="<?=site_url('admin/users');?>" role="button"><i data-feather='arrow-left'></i> Batal</a>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body mt-1">
                                <form class="form" name="formInput" id="formInput" method="post">
                                <input type="hidden" name="id" value="<?=$detail->user_username;?>">

                                    <div class="row">
                                        <div class="col-md-6 col-12">
                                            <div class="mb-1">
                                                <label class="form-label">Username</label>
                                                <input type="text" class="form-control" name="username" value="<?=$detail->user_username;?>" autocomplete="off" readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="mb-1">
                                                <label class="form-label">Password</label>
                                                <div class="input-group form-password-toggle">
                                                    <input type="password" class="form-control" name="password" id="password" autocomplete="off" placeholder="Input Password">
                                                    <span class="input-group-text cursor-pointer"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye font-small-4"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg></span>
                                                </div>
                                                <p><small class="text-muted"><em>*) Kosongi jika tidak diubah.</em></small></p>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="mb-1">
                                                <label class="form-label">Nama Lengkap</label>
                                                <input type="text" class="form-control" name="name" autocomplete="off" placeholder="Input Nama Lengkap" value="<?=$detail->user_nama;?>" autofocus>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="mb-1">
                                                <label class="form-label">Level</label>
                                                <select class="form-select" name="lstLevel">
                                                    <option value="">- Pilih Level -</option>
                                                    <option value="Admin" <?=($detail->user_level == 'Admin'?'selected':'');?>>Admin</option>
                                                    <option value="Kasir" <?=($detail->user_level == 'Kasir'?'selected':'');?>>Kasir</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="mb-1">
                                                <label class="form-label">Status</label>
                                                <select class="form-select" name="lstStatus">
                                                    <option value="">- Pilih Status -</option>
                                                    <option value="Aktif" <?=($detail->user_status == 'Aktif'?'selected':'');?>>Aktif</option>
                                                    <option value="Tidak Aktif" <?=($detail->user_status == 'Tidak Aktif'?'selected':'');?>>Tidak Aktif</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary me-1"><i data-feather='save'></i> Update</button>
                                        </div>
                                    </div>
                                </form>
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
    $( "#formInput" ).validate({
        rules: {
            name: { required: true },
            lstLevel: { required: true },
            lstStatus: { required: true }
        },
        messages: {
            name: { required:'Nama Lengkap required' },
            lstLevel: { required:'Level required' },
            lstStatus: { required:'Status required' }
        },
        submitHandler: function (form) {
            dataString = $('#formInput').serialize();
            $.ajax({
                url: "<?=site_url('admin/users/updatedata');?>",
                type: "POST",
                data: dataString,
                success: function(data) {
                    toastr.success('Update Data Berhasil', 'Sukses', {
                        closeButton: true,
                        tapToDismiss: false
                    });
                    window.location="<?=site_url('admin/users');?>";
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    toastr.error('Update Data Gagal', 'Error', {
                        closeButton: true,
                        tapToDismiss: false
                    });
                }
            });
        }
    });
});
</script>