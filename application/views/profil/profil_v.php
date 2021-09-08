<?php
$username = $this->session->userdata('username');
$dataUser = $this->menu_m->select_user($username)->row();
?>

<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-start mb-0">Profil</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?=base_url();?>">Dashboard</a></li>
                                <li class="breadcrumb-item" active>Profil</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <section id="page-account-settings">
                <div class="row">
                    <div class="col-md-3 mb-2 mb-md-0">
                        <ul class="nav nav-pills flex-column nav-left">
                            <li class="nav-item">
                                <a class="nav-link active" id="account-pill-general" data-bs-toggle="pill" href="#umum" aria-expanded="true">
                                    <i data-feather="user" class="font-medium-3 me-1"></i>
                                    <span class="fw-bold">Informasi Umum</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="account-pill-password" data-bs-toggle="pill" href="#ubah-password" aria-expanded="false">
                                    <i data-feather="lock" class="font-medium-3 me-1"></i>
                                    <span class="fw-bold">Ganti Password</span>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-md-9">
                        <div class="card">
                            <div class="card-body">
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active" id="umum" aria-labelledby="account-pill-general" aria-expanded="true">
                                        <div class="d-flex">
                                            <?php if (!empty($dataUser->pegawai_foto)) {?>
                                            <a href="#" class="me-25">
                                                <img src="<?=$dataMeta->meta_link.'/img/pegawai_folder/'.$detail->pegawai_foto;?>" id="account-upload-img" class="rounded me-50" alt="profile image" height="80" width="80" />
                                            </a>
                                            <?php } else {?>
                                            <div class="rounded me-50" alt="profile image" height="80" width="80" src="<?=base_url('img/no-image.jpg');?>"></div>
                                            <?php } ?>
                                        </div>

                                        <form class="validate-form mt-2" id="formInput" name="formInput" method="post" enctype="multipart/form-data">
                                            <div class="row">
                                                <div class="col-12 col-sm-6">
                                                    <div class="mb-1">
                                                        <label class="form-label">Username</label>
                                                        <input type="text" class="form-control" name="username" placeholder="Username" value="<?=$dataUser->user_username;?>" readonly />
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6">
                                                    <div class="mb-1">
                                                        <label class="form-label">Nama Lengkap</label>
                                                        <input type="text" class="form-control" name="nama" value="<?=$detail->user_nama;?>" placeholder="Input Nama Lengkap" autocomplete="off" autofocus />
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6">
                                                    <div class="mb-1">
                                                        <label class="form-label">Upload Avatar (JPG,PNG)</label>
                                                        <input type="file" class="form-control" name="foto" accept=".png,.jpg,.jpeg" autocomplete="off" />
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <button type="submit" class="btn btn-primary mt-2 me-1"><i data-feather='save'></i> Update</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                    <div class="tab-pane fade" id="ubah-password" role="tabpanel" aria-labelledby="account-pill-password" aria-expanded="false">
                                        <form class="validate-form" name="formPassword" id="formPassword">
                                            <div class="row">
                                                <div class="col-12 col-sm-6">
                                                    <div class="mb-1">
                                                        <label class="form-label" for="account-new-password">Password Baru</label>
                                                        <div class="input-group form-password-toggle input-group-merge">
                                                            <input type="password" class="form-control" name="newpassword" id="newpassword" placeholder="Input Password Baru" autocomplete="off" />
                                                            <div class="input-group-text cursor-pointer">
                                                                <i data-feather="eye"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6">
                                                    <div class="mb-1">
                                                        <label class="form-label" for="account-retype-new-password">Konfirmasi Password Baru</label>
                                                        <div class="input-group form-password-toggle input-group-merge">
                                                            <input type="password" class="form-control" name="confirmpassword" id="confirmpassword" placeholder="Input Konfirmasi Password Baru" autocomplete="off" />
                                                            <div class="input-group-text cursor-pointer"><i data-feather="eye"></i></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <button type="submit" class="btn btn-primary me-1 mt-1"><i data-feather='save'></i> Update Password</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
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
            nama: { required: true }
        },
        messages: {
            nama: { required :'Nama Lengkap required' }
        },
        submitHandler: function (form) {
            var formData = new FormData($('#formInput')[0]);
            $.ajax({
                dataType: 'json',
                data: formData,
                async: true,
                url: "<?=site_url('profil/updatedata');?>",
                type: "POST",
                success: function(data) {
                    if (data.status === 'success') {
                        toastr.success('Update Data Berhasil', 'Sukses', {
                            closeButton: true,
                            tapToDismiss: false
                        });
                    } else {
                        toastr.info('Type Data Salah', 'Info', {
                            closeButton: true,
                            tapToDismiss: false
                        });
                    }
                    location.reload();
                },
                error: function() {
                    toastr.error('Update Data Gagal', 'Error', {
                        closeButton: true,
                        tapToDismiss: false
                    });
                },
                cache: false,
                contentType: false,
                processData: false
            });
        }
    });
});

$(document).ready(function() {
    $( "#formPassword" ).validate({
        rules: {
            newpassword: { required: true, minlength: 5 },
            confirmpassword: { required: true, equalTo: "#newpassword" }
        },
        messages: {
            newpassword: {
                required:'Password Baru harus di isi', minlength:'Password Baru minimal 5 karakter'
            },
            confirmpassword: {
                required:'Konfirmasi Password harus di isi', minlength:'Konfirmasi Password minimal 5 karakter',
                equalTo: "Konfirmasi Password harus sama dengan Password Baru"
            }
        },
        submitHandler: function (form) {
            dataString = $('#formPassword').serialize();
            $.ajax({
                url: "<?=site_url('profil/updatepassword');?>",
                type: "POST",
                data: dataString,
                success: function(data) {
                    toastr.success('Update Password Berhasil', 'Sukses', {
                        closeButton: true,
                        tapToDismiss: false
                    });
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    toastr.error('Error Update Password', 'Error', {
                        closeButton: true,
                        tapToDismiss: false
                    });
                }
            });
        }
    });
});
</script>