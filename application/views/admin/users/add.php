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
                                <li class="breadcrumb-item" active>Tambah Data</li>
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
                                <h4 class="card-title"><i data-feather='plus-circle'></i> Form Tambah Data</h4>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <a class="btn btn-gradient-warning" href="<?=site_url('admin/users');?>" role="button"><i data-feather='arrow-left'></i> Batal</a>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body mt-1">
                                <form class="form" name="formInput" id="formInput" method="post">
                                    <div class="row">
                                        <div class="col-md-6 col-12">
                                            <div class="mb-1">
                                                <label class="form-label">Username</label>
                                                <input type="text" class="form-control" name="username" id="username" autocomplete="off" placeholder="Input Username" autofocus>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="mb-1">
                                                <label class="form-label">Password</label>
                                                <div class="input-group form-password-toggle">
                                                    <input type="password" class="form-control" name="password" id="password" autocomplete="off" placeholder="Input Password">
                                                    <span class="input-group-text cursor-pointer"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye font-small-4"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="mb-1">
                                                <label class="form-label">Nama Lengkap</label>
                                                <input type="text" class="form-control" name="name" autocomplete="off" placeholder="Input Nama Lengkap">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="mb-1">
                                                <label class="form-label">Level</label>
                                                <select class="form-select" name="lstLevel">
                                                    <option value="">- Pilih Level -</option>
                                                    <option value="Admin">Admin</option>
                                                    <option value="Kasir">Kasir</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary me-1"><i data-feather='save'></i> Simpan</button>
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
$.validator.addMethod("alphanumeric", function(value, element) {
    return this.optional(element) || /^[\w.]+$/i.test(value);
}, "Hanya Huruf, Angka dan Garis Bawah");

$(document).ready(function() {
    $( "#formInput" ).validate({
        rules: {
            username: {
                required: true, minlength: 5, alphanumeric: true,
                remote: {
                    url: "<?=site_url('admin/users/register_user_exists');?>",
                    type: "post",
                    data: {
                        username: function() {
                            return $("#username").val();
                        }
                    }
                }
            },
            password: { required: true, minlength: 5 },
            name: { required: true },
            lstLevel: { required: true }
        },
        messages: {
            username: {
                required:'Username required', minlength:'Minimal 5 Karakter',
                remote: 'Username sudah ada, mohon Ganti'
            },
            password: { required:'Password required', minlength:'Minimal 5 Karakter' },
            name: { required:'Nama Lengkap required' },
            lstLevel: { required:'Level required' }
        },
        submitHandler: function (form) {
            dataString = $('#formInput').serialize();
            $.ajax({
                url: "<?=site_url('admin/users/savedata');?>",
                type: "POST",
                data: dataString,
                success: function(data) {
                    toastr.success('Simpan Data Berhasil', 'Sukses', {
                        closeButton: true,
                        tapToDismiss: false
                    });
                    window.location="<?=site_url('admin/users');?>";
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    toastr.error('Simpan Data Gagal', 'Error', {
                        closeButton: true,
                        tapToDismiss: false
                    });
                }
            });
        }
    });
});
</script>