<?php
$meta = $this->menu_m->select_meta()->row();
?>
<div class="content-body">
    <div class="auth-wrapper auth-v2">
        <div class="auth-inner row m-0">
            <a class="brand-logo" href="<?=base_url();?>">
                <h2 class="brand-text text-primary"><img src="<?=base_url('img/logo-app.png');?>" height="50px;"></h2>
            </a>
            <div class="d-none d-lg-flex col-lg-8 align-items-center p-5">
                <div class="w-100 d-lg-flex align-items-center justify-content-center px-5"><img class="img-fluid" src="<?=base_url('img/bg-login.png');?>" alt="Login V2" /></div>
            </div>
            <div class="d-flex col-lg-4 align-items-center auth-bg px-2 p-lg-5">
                <div class="col-12 col-sm-8 col-md-6 col-lg-12 px-xl-2 mx-auto">
                    <h2 class="card-title fw-bold mb-1 brand-text text-danger">Selamat Datang,</h2>
                    <p class="card-text mb-2">Silahkan masukkan <b>Username</b> dan <b>Password</b> Anda :</p>
                    <form class="auth-login-form mt-2" method="POST" name="formLogin" id="formLogin">
                        <div class="mb-1">
                            <label class="form-label">Username</label>
                            <input class="form-control" id="username" type="text" name="username" placeholder="Username Anda" autocomplete="off" autofocus />
                        </div>
                        <div class="mb-1">
                            <div class="d-flex justify-content-between">
                                <label class="form-label" for="login-password">Password</label>
                            </div>
                            <div class="input-group input-group-merge form-password-toggle">
                                <input class="form-control form-control-merge" id="password" type="password" name="password" placeholder="Password Anda" /><span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
                            </div>
                        </div>
                        <div class="alert alert-danger" role="alert" id="msgHide"></div>
                        <button class="btn btn-danger w-100" tabindex="4">Login</button>
                        <p class="text-center mt-2"><span>Copyright @ 2021<br>Jama' Rochmad Muttaqin</span></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
$.validator.addMethod("alphanumeric", function(value, element) {
    return this.optional(element) || /^[\w.]+$/i.test(value);
}, "Hanya Huruf, Angka dan Garis Bawah");

$(document).ready(function() {
    $("#msgHide").hide();
});

$(document).ready(function() {
    $("#formLogin").validate({
        rules: {
            username: { required: true, alphanumeric: true,
                remote: {
                    url: "<?=site_url('login/check_login_exists');?>",
                    type: "post",
                    data: {
                        username: function() {
                            return $("#username").val();
                        }
                    }
                }
            },
            password: { required: true }
        },
        messages: {
            username: {
                required :'Username harus diisi', remote: 'Username Anda tidak terdaftar'
            },
            password: {
                required :'Password harus diisi'
            }
        },
        submitHandler: function (form) {
            dataString = $("#formLogin").serialize();
            $.ajax({
                url: '<?=site_url('login/validasi');?>',
                type: "POST",
                data: dataString,
                dataType: "JSON",
                success: function(data) {
                    if (data.status === 'success') {
                        location.reload();
                    } else {
                        $('#msgHide').show();
                        $('#msgHide').html('<div class="alert-body">'+data.msg+'</div>');
                    }
                },
                error: function() {
                    $('#msgHide').show();
                    $('#msgHide').html('<div class="alert-text">Error Proses Login</div>');
                }
            });
        }
    });
});
</script>